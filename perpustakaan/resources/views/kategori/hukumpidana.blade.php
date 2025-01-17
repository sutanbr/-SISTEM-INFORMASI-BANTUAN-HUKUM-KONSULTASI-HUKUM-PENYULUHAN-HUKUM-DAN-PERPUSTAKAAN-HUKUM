@extends('layout.header')
@section('konten')
<section class="section">
    <h2 style="text-align: left; margin-left: 100px;"><i class="fas fa-book"></i> Kategori:Hukum Pidana</h2>
    @foreach ($buku as $item)
    <div class="book-container">
        <div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">{{ $item->judul }} ({{ $item->kode_buku }})</p>
            <a href="{{ url('/buku/hukum1') }}"><button style="font-family: 'Poppins'">Detail(aktif)</button></a>
        </div>
        <div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">KUHP (3252352)</p>
            <button style="font-family: 'Poppins'">Detail</button>
        </div>
        <div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">KUHP (3252352)</p>
            <button style="font-family: 'Poppins'">Detail</button>
        </div>
        <div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">KUHP (3252352)</p>
            <button style="font-family: 'Poppins'">Detail</button>
        </div><div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">KUHP (3252352)</p>
            <button style="font-family: 'Poppins'">Detail</button>
        </div><div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">KUHP (3252352)</p>
            <button style="font-family: 'Poppins'">Detail</button>
        </div><div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">KUHP (3252352)</p>
            <button style="font-family: 'Poppins'">Detail</button>
        </div><div class="book-item">
            <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
            <p style="font-family: 'Poppins'">KUHP (3252352)</p>
            <button style="font-family: 'Poppins'">Detail</button>
        </div>
    </div>
    @endforeach
</section>


@endsection