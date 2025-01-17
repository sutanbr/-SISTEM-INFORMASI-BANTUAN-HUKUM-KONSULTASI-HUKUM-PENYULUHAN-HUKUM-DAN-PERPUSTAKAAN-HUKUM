@extends('layout.header')
@section('konten')


<section style="margin-bottom:150px;">
    <h2 style="text-align: left; margin-left: 100px; margin-top:100px"> PROFIL PEKERJA</h2>
    <div class="containerpr">
        <div class="cardpr" style="background-image: url('{{ asset('images/rdn.jpg') }}')">
            <div class="bio">
                <h4 class="bio-title">Bio Data</h4>
                <span data-bio="Nama: RDN, Tempat Asal: Jakarta, Tanggal Lahir: 1 Januari 2000"></span>
            </div>
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/rdns.jpg') }}')">
            <div class="bio">
                <h4 class="bio-title">Bio Data</h4>
                <span data-bio="Nama: RDNS, Tempat Asal: Bandung, Tanggal Lahir: 2 Februari 2001"></span>
            </div>
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/dnc.jpg') }}')">
            <div class="bio">
                <h4 class="bio-title">Bio Data</h4>
                <span data-bio="Nama: DNC, Tempat Asal: Surabaya, Tanggal Lahir: 3 Maret 2002"></span>
            </div>
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/fr.jpg') }}')">
            <div class="bio">
                <h4 class="bio-title">Bio Data</h4>
                <span data-bio="Nama: FR, Tempat Asal: Yogyakarta, Tanggal Lahir: 4 April 2003"></span>
            </div>
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/sprkl.jpg') }}')">
            <div class="bio">
                <h4 class="bio-title">Bio Data</h4>
                <span data-bio="Nama: SPRKL, Tempat Asal: Bali, Tanggal Lahir: 5 Mei 2004"></span>
            </div>
        </div>
    </div>
</section>




    
    
    {{-- <div class="container">
        <div class="cardpr" style="background-image: url('{{ asset('images/rdn.jpg') }}')" onclick="showData(this)">
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/rdns.jpg') }}')" onclick="showData(this)">
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/dnc.jpg') }}')" onclick="showData(this)">
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/fr.jpg') }}')" onclick="showData(this)">
        </div>
        <div class="cardpr" style="background-image: url('{{ asset('images/sprkl.jpg') }}')" onclick="showData(this)">
        </div> --}}
{{--         
        <div id="dataCard" class="data-cardpr">
            <h2>Data Informasi</h2>
            <p><strong>Nama:</strong> John Doe</p>
            <p><strong>Tempat Asal:</strong> Jakarta</p>
            <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
            <!-- Tambahkan data lainnya sesuai kebutuhan -->
        </div> --}}
        
        
    </div>
</section>
@endsection