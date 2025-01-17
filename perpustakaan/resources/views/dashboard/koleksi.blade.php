@extends('layout.header')
@section('konten')

<div class="containers">
    <!-- Add the 'Kembali' Button -->
    <a href={{asset('home')}} class="btn btn-primary" style="margin: 40px 30px 0px 64px; background-color: #5c6bc0; border: none; padding: 8px 20px; border-radius: 30px; color: white; font-size: 0.9rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; display: inline-block; text-align: center;">
        Kembali
    </a>
<section style="margin: 70px 0 100px 0; font-family: 'Montserrat', sans-serif;">
    <h2 style="text-align: center; color: #2b66ac; font-size: 2rem; font-weight: 600; margin-bottom: 30px;">INFORMASI PERPUSTAKAAN</h2>
    
    <!-- Filter and Search Bar -->
    <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 30px; gap: 20px;">
        <!-- Dropdown Filter -->
        <div id="filterDropdown">
            <select id="filterSelect" style="padding: 12px 20px; border-radius: 30px; font-size: 16px; border: 1px solid #ccc; transition: all 0.3s ease;">
                <option value="semua" selected disabled hidden>Pilih Kategori ⭣</option>
                <option value="semua">Semua Buku</option>
                <option value="hukum">Hukum</option>
                <option value="ham">HAM</option>
                <option value="internasional">Internasional</option>
                <option value="imigrasi">Hukum Imigrasi</option>
                <option value="pidana">Hukum Pidana</option>
                <option value="pajak">Hukum Pajak</option>
                <option value="anak">Hukum Anak</option>
                <option value="islam">Hukum Islam</option>
                <option value="bisnis">Hukum Bisnis</option>
                <option value="ekonomi">Hukum Ekonomi</option>
            </select>
        </div>

        <!-- Search Bar -->
        <div>
            <input type="text" id="searchInput" placeholder="Cari Buku..." 
                style="padding: 12px 20px; width: 250px; border-radius: 30px; font-size: 16px; border: 1px solid #ccc; transition: all 0.3s ease;">
        </div>
    </div>
    
    <!-- Book Gallery -->
    <div class="gallery" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 30px; padding: 0 20px;">
        @foreach($buku as $item)
            <a href="{{ url('/buku/' . $item->kode_buku) }}" class="gallery-item {{ strtolower($item->jenis_buku) }} semua" 
                style="display: block; text-decoration: none; border-radius: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; overflow: hidden; background-color: #fff;">
                
                <!-- Book Image -->
                <div style="position: relative; width: 100%; height: 400px; overflow: hidden; border-bottom: 2px solid #eee; ">
                    <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }} " 
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                </div>

                <!-- Book Info -->
                <div style="padding: 15px;">
                    <p style="font-size: 1.1rem; color: #2b66ac; font-weight: 600; margin-bottom: 10px;">{{ $item->judul }}</p>
                    <p style="font-size: 1rem; color: #555;">{{ $item->kode_buku }}</p>
                    <p style="font-size: 1rem; color: {{ $item->stok > 0 ? '#27ae60' : '#e74c3c' }}; font-weight: 500;">
                        {{ $item->stok > 0 ? 'Tersedia' : 'Habis' }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</section>

@endsection
