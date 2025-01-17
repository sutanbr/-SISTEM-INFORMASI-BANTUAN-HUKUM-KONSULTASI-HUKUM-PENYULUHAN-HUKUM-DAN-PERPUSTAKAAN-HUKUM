@extends('layout.header')

@section('konten')
<style>
    /* General styles */
    body {
        font-family: 'poppins', sans-serif;
        background-color: #f4f7fc;
    }

    /* Card Styling */
    .card {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    }

    .card-header {
        background-color: #00bcd4;
        color: #ffffff;
        font-size: 1.4rem;
        font-weight: bold;
        text-align: center;
        padding: 20px;
        border-radius: 15px 15px 0 0;
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
    }

    table th, table td {
        padding: 15px;
        text-align: left;
        font-size: 1rem;
        color: #333;
        border-bottom: 1px solid #f1f1f1;
    }

    table th {
        background-color: #f5f5f5;
        font-weight: 600;
    }

    table tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    /* Pagination Styling */
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    .pagination a {
        padding: 10px 20px;
        margin: 0 5px;
        background-color: #00bcd4;
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-size: 1rem;
        transition: all 0.3s ease-in-out;
    }

    .pagination a:hover {
        background-color: #0097a7;
        transform: scale(1.1);
    }

    .pagination a.active {
        background-color: #00796b;
        color: #ffffff;
    }

    .pagination a:disabled {
        background-color: #e0e0e0;
        color: #a3a3a3;
        cursor: not-allowed;
    }

    /* Modal Styling */
    .modal-content {
        border-radius: 15px;
        padding: 20px;
    }

    .modal-header {
        border-bottom: 1px solid #e1e1e1;
    }

    .modal-title {
        font-size: 1.5rem;
        font-weight: 600;
    }

    .close {
        font-size: 1.5rem;
        font-weight: bold;
    }

    /* Barcode Image Styling */
    .barcode {
        border-radius: 10px;
        transition: transform 0.2s ease-in-out;
    }

    .barcode:hover {
        transform: scale(1.1);
    }
</style>
<div class="containers">
    <!-- Add the 'Kembali' Button -->
    <a href={{asset('keranjang/keranjang')}} class="btn btn-primary" style="margin: 40px 30px 0px 64px; background-color: #5c6bc0; border: none; padding: 8px 20px; border-radius: 30px; color: white; font-size: 0.9rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; display: inline-block; text-align: center;">
        Kembali
    </a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 100px 0;">
                <div class="card-header">Data Peminjaman</div>

                @if(count($peminjaman) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Gambar Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Status Pinjam</th>
                <th>Kode Barcode</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->buku->kode }}</td>
                    <td>{{ $item->buku->judul }}</td>
                    <td>
                        <img src="{{ asset('images/' . $item->buku->gambar) }}" alt="Gambar Buku" width="100" height="100" style="border-radius: 15px;">
                    </td>
                    <td>{{ $item->tanggal_pinjam }}</td>
                    <td>{{ $item->status_pinjam }}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#barcodeModal{{ $item->id_peminjaman }}">
                            <img src="{{ $item->barcode_image }}" alt="Barcode" width="100" height="50" class="barcode">
                        </a>
                    </td>
                </tr>
                <!-- Modal for Barcode Image -->
                <div class="modal fade" id="barcodeModal{{ $item->id_peminjaman }}" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                {{-- <h5 class="modal-title" id="barcodeModalLabel">{{ $item->kode_buku }}</h5> --}}
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ $item->barcode_image }}" alt="Barcode" width="230" height="150" class="barcode">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>


                    <!-- Pagination -->
                    <div class="pagination">
                        @if($currentPage > 1)
                            <a href="{{ url('keranjang/barcode?page=' . ($currentPage - 1)) }}">&laquo; Previous</a>
                        @endif

                        @for($i = 1; $i <= $totalPages; $i++)
                            <a href="{{ url('keranjang/barcode?page=' . $i) }}" class="{{ $i == $currentPage ? 'active' : '' }}">{{ $i }}</a>
                        @endfor

                        @if($currentPage < $totalPages)
                            <a href="{{ url('keranjang/barcode?page=' . ($currentPage + 1)) }}">Next &raquo;</a>
                        @endif
                    </div>
                @else
                    <p class="text-center">Tidak ada data</p>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection