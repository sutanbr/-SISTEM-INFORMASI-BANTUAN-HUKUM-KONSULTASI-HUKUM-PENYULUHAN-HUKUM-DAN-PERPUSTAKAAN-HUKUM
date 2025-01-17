@extends('layout.header')
@section('konten')
<section class="section">
    @if (Auth::check())
    <a href="{{ route('koleksi') }}" class="btn btn-primary" style="margin: 0 0 20px 0; background-color: #5c6bc0; border: none; padding: 8px 20px; border-radius: 30px; color: white; font-size: 0.9rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; display: inline-block; text-align: center;">
        Kembali
    </a>
    <h2 style="text-align: left; margin-left: 100px; font-family: 'Montserrat', sans-serif; font-size: 2rem; font-weight: 600; color: #333;">Detail Buku</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-3 mt-4">
                <div class="card" style="background-color: #f9f9f9; border-radius: 15px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); display: flex; flex-direction: row; align-items: center; padding: 20px; max-width: 900px; margin: 0 auto;">
                    
                    <!-- Background behind Book Image -->
                    <div style="background-color: #175869; padding: 15px; border-radius: 20px; margin-right: 20px;">
                        <!-- Gambar Buku -->
                        <img src="{{ asset('images/' . $buku->gambar) }}" 
                             style="width: 250px; height: auto; object-fit: cover; border-radius: 15px; cursor: pointer;" 
                             alt="Gambar Buku"
                             data-bs-toggle="modal" 
                             data-bs-target="#imageModal">
                    </div>
                    
                    <!-- Modal untuk menampilkan gambar asli -->
                    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="background: transparent; border: none;">
                                <div class="modal-body d-flex justify-content-center align-items-center p-0" style="min-height: 30vh;">
                                    <img src="{{ asset('images/' . $buku->gambar) }}" 
                                         style="width: 600px; height: 600px; object-fit: contain;" 
                                         alt="Gambar Buku">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Detail Buku -->
                    <div class="box-inside-card" style="background-color: #fff; padding: 20px; border-radius: 20px; width: 100%; display: flex; flex-direction: column; justify-content: flex-start; align-items: flex-start;">
                        <h4 style="color: #3c6e71; font-size: 1.6rem; font-weight: 700; margin-bottom: 20px;">Detail Buku</h4>
                        <p style="color: #3c6e71; font-size: 1rem; margin: 5px 0;">Judul: <span style="color: #444; font-weight: 600;">{{ $buku->judul }}</span></p>
                        <p style="color: #3c6e71; font-size: 1rem; margin: 5px 0;">Kategori Buku: <span style="color: #444; font-weight: 600;">{{ $buku->jenis_buku }}</span></p>
                        {{-- <p style="color: #3c6e71; font-size: 1rem; margin: 5px 0;">Kode Buku: <span style="color: #444; font-weight: 600;">{{ $buku->kode_buku }}</span></p> --}}
                        <p style="color: #3c6e71; font-size: 1rem; margin: 5px 0;">Stok: <span style="color: #444; font-weight: 600;">{{ $buku->stok }}</span></p>
                        
                        <!-- Buttons in one row -->
<div class="button-container" style="display: flex; justify-content: space-between; width: 100%; margin-top: 20px;">
    @if ($buku->stok > 0)
        <form id="addBookForm" action="{{ route('keranjang.tambah', $buku->kode_buku) }}" method="POST">
            @csrf
            <button 
                type="button" 
                id="confirmBtn" 
                class="btn btn-success" 
                style="
                    padding: 8px 20px; 
                    font-size: 0.9rem; 
                    border-radius: 25px; 
                    border: none; 
                    background-color: #27ae60; 
                    color: white; 
                    transition: background-color 0.3s ease, transform 0.3s ease; 
                    width: auto; /* Tombol hanya selebar kontennya */ 
                    white-space: nowrap; /* Mencegah teks turun ke baris berikutnya */
                    text-align: center; 
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                " 
                onmouseover="this.style.backgroundColor='#2ecc71'; this.style.transform='scale(1.05)';" 
                onmouseout="this.style.backgroundColor='#27ae60'; this.style.transform='scale(1)';">
                Tambah Buku
            </button>
        </form>
    @else
        <button 
            type="button" 
            class="btn btn-danger" 
            style="
                padding: 8px 20px; 
                font-size: 0.9rem; 
                border-radius: 25px; 
                border: none; 
                background-color: #e74c3c; 
                color: white; 
                cursor: not-allowed; 
                opacity: 0.7; 
                width: auto; /* Tombol hanya selebar kontennya */ 
                white-space: nowrap; /* Mencegah teks turun ke baris berikutnya */
                text-align: center; 
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            " 
            disabled>
            Stok Habis
        </button>
    @endif

    <a href="{{ route('keranjang') }}" class="btn btn-info" style="padding: 8px 5px; font-size: 0.9rem; border-radius: 25px; border: none; background-color: #3498db; color: white; transition: background-color 0.3s ease, transform 0.3s ease; width: 48%; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onmouseover="this.style.backgroundColor='#2980b9'; this.style.transform='scale(1.05)';" onmouseout="this.style.backgroundColor='#3498db'; this.style.transform='scale(1)';">
        Lihat Keranjang
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pop-up Konfirmasi -->
    <div id="confirmPopup" class="modal" style="display:none;">
        <div class="modal-content book-item" style="padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h4 style="color: #333; font-weight: 600;">Konfirmasi</h4>
            <p style="color: #333;">Apakah Anda yakin ingin menambahkan buku ini ke keranjang?</p>
            <div class="button-container" style="text-align: center; margin-top: 20px;">
                <button id="confirmActionBtn" style="background-color: #27ae60; color: white; padding: 8px 20px; font-size: 0.9rem; border-radius: 25px; border: none; margin-right: 10px; transition: background-color 0.3s ease, transform 0.3s ease;" onmouseover="this.style.backgroundColor='#2ecc71'; this.style.transform='scale(1.05)';" onmouseout="this.style.backgroundColor='#27ae60'; this.style.transform='scale(1)';">
                    Iya
                </button>
                <button id="cancelActionBtn" style="background-color: #e74c3c; color: white; padding: 8px 20px; font-size: 0.9rem; border-radius: 25px; border: none; transition: background-color 0.3s ease, transform 0.3s ease;" onmouseover="this.style.backgroundColor='#c0392b'; this.style.transform='scale(1.05)';" onmouseout="this.style.backgroundColor='#e74c3c'; this.style.transform='scale(1)';">
                    Tidak
                </button>
            </div>
        </div>
    </div>

    <script>
        // Show confirmation modal when "Tambah Buku" button is clicked
        document.getElementById('confirmBtn').addEventListener('click', function() {
            document.getElementById('confirmPopup').style.display = 'block'; // Show confirmation modal
        });

        // Handle confirmation action - submit the form
        document.getElementById('confirmActionBtn').addEventListener('click', function() {
            document.getElementById('confirmPopup').style.display = 'none'; // Close modal
            document.getElementById('addBookForm').submit(); // Submit the form
        });

        // Handle cancel action - close the modal
        document.getElementById('cancelActionBtn').addEventListener('click', function() {
            document.getElementById('confirmPopup').style.display = 'none'; // Close modal
        });
    </script>

    @else
    <p style="text-align: center; font-size: 1.2rem; color: #e74c3c;">Anda harus login untuk melihat detail buku ini.</p>
    @endif
</section>
@endsection