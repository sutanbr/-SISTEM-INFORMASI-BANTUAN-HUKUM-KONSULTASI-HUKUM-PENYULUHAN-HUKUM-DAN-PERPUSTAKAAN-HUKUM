@extends('layout.header')

@section('konten')
<style>
    /* General body and container styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .containers {
        padding: 40px 20px;
        max-width: 1400px;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
        color: #2358A3;
        font-size: 2.5rem;
        margin-bottom: 30px;
        font-weight: 600;
    }

    /* Card and Item Styles */
    .books-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .books-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .books-info {
        display: flex;
        align-items: center;
    }

    .books-info img {
        width: 100px;
        height: 100px;
        border-radius: 8px;
        margin-right: 15px;
        object-fit: cover;
    }

    .books-title {
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 5px;
    }

    .stock {
        color: #999;
        font-size: 0.9rem;
    }

    .controls {
        display: flex;
        align-items: center;
    }

    .controls button {
        background-color: #2358A3;
        color: white;
        border: none;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease;
    }

    .controls button:hover {
        background-color: #1a437b;
    }

    .controls input {
        width: 50px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 0 10px;
    }

    .delete-button {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .delete-button:hover {
        background-color: #d32f2f;
    }

    /* Button and Modal Styles */
    .pinjam-button {
        background-color: #2358A3;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        cursor: pointer;
        display: block;
        margin: 30px auto;
        transition: background-color 0.3s ease;
    }

    .pinjam-button:hover {
        background-color: #1a437b;
    }

    /* Modal Styling */
    .modal-content {
        border-radius: 10px;
        padding: 20px;
        border: none;
        background-color: #fff;
    }

    .modal-header {
        border-bottom: 1px solid #ddd;
    }

    .modal-title {
        font-size: 1.4rem;
        font-weight: 600;
    }

    .modal-footer {
        display: flex;
        justify-content: space-between;
    }

    .modal-footer button {
        border-radius: 50px;
        padding: 8px 15px;
        transition: background-color 0.3s ease;
    }

    .modal-footer button:hover {
        background-color: #f44336;
        color: white;
    }

    .modal-footer .btn-secondary {
        background-color: #ddd;
        color: #333;
    }

    .modal-footer .btn-primary {
        background-color: #2358A3;
        color: white;
    }

    .empty-cart img {
        max-width: 300px;
        margin-bottom: 20px;
    }

    .empty-cart h2 {
        font-size: 1.8rem;
        color: #2358A3;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .empty-cart p {
        font-size: 1rem;
        margin-bottom: 20px;
    }

    .empty-cart .btn {
        background-color: #2358A3;
        color: white;
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .empty-cart .btn:hover {
        background-color: #1a437b;
    }

</style>

<div class="containers">
    <a href={{asset('dashboard/koleksi')}} class="btn btn-primary" style="margin: 40px 30px 0px 64px; background-color: #5c6bc0; border: none; padding: 8px 20px; border-radius: 30px; color: white; font-size: 0.9rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; display: inline-block; text-align: center;">
        Kembali
    </a>
    <h1>Keranjang Buku</h1>

        <!-- Add the 'Kembali' Button -->
        
    @if(count($keranjang) == 0)
        <div class="empty-cart" style="text-align: center;">
            <img src="{{ asset('images/tidakada.png') }}" alt="Empty Cart">
            <h2>Keranjang Buku Kosong!</h2>
            <p>Silahkan pinjam buku di koleksi buku atau jika anda sudah meminjam buku silahkan cek halaman barcode.</p>
            <button class="btn btn-primary">
                <a href="{{ route('koleksi') }}" style="color: white; text-decoration: none;">Pinjam Buku Sekarang!</a>
            </button>
        </div>
    @else
        @foreach($keranjang as $item)
        <div class="books-item">
            <div class="books-info">
                <img src="{{ asset('images/' . $item->buku->gambar) }}" alt="Book Cover" style="height: auto;">
                <div>
                    <div class="books-title">{{ $item->buku->judul }}</div>
                    <div class="stock">Stok Tersedia: {{ $item->buku->stok }}</div>
                </div>
            </div>

            <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Hapus</button>
            </form>
        </div>
        @endforeach
    @endif

    <form action="{{ route('pinjam.buku') }}" method="POST">
        @csrf
        <button type="button" class="pinjam-button" data-toggle="modal" data-target="#confirmPopup">Pinjam Buku</button>
    </form>

    <!-- Modal Pop-up Konfirmasi -->
    <div id="confirmPopup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmPopupLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmPopupLabel">Konfirmasi</h5>
                </div>
                <div class="modal-body">
                    @if(count($keranjang) == 0)
                        <p>Keranjang buku kosong! Silahkan pinjam buku di koleksi buku atau jika anda sudah meminjam buku silahkan cek halaman barcode.</p>
                    @else
                        <p>Apakah anda yakin ingin meminjam buku ini?</p>
                    @endif
                </div>
                <div class="modal-footer">
                    @if(count($keranjang) == 0)
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    @else
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <form action="{{ route('pinjam.buku') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Iya</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
