@extends('layout.header')
@section('konten')

<section style="margin: 70px 0 100px 0;">
    <h2 style="text-align: center; color:#2b66ac;"> INFORMASI PERPUSTAKAAN</h2>
    <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px; gap:800px">
        <div id="filterDropdown" style="margin-right: 20px;">
            <select id="filterSelect" style="padding: 10px; border-radius: 5px; font-size: 16px;">
                <option value="semua" selected disabled hidden>Pilih Kategori ⭣</option>
                <option value="semua">Semua Buku</option>
                <option value="hukum">Hukum</option>
                <option value="ham">HAM</option>
                <option value="pemasyarakatan">Pemasyarakatan</option>
                <option value="imigrasi">Imigrasi</option>
            </select>
        </div>
        <div>
            <input type="text" id="searchInput" placeholder="Cari Buku..." style="padding: 10px; width: 200px; border-radius: 5px; font-size: 16px;">
        </div>
    </div>
    <div class="gallery">
        @foreach($buku as $item)
            <a href="{{ url('/buku/' . $item->kode_buku) }}" class="gallery-item {{ strtolower($item->jenis_buku) }} semua">
                <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}">
                <p>{{ $item->judul }}<br>{{ $item->kode_buku }} ({{ $item->stok > 0 ? 'aktif' : 'habis' }})</p>
            </a>
        @endforeach
    </div>
</section>

@endsection
