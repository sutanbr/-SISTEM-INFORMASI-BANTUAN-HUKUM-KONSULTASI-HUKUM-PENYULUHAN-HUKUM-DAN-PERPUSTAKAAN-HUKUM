<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
        font-family: 'poppins';
        }

        button:hover{
            background-color: white;
            border-radius: 30%;

        }
        button{
            background-color: white;
            border-radius: 30%;
        }
        card{
            background-color: #3163A8;
            border-radius: 30%;
            padding: 300px;
            margin:100px 700px 100px 50px;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <span class="perpu">PUSHAM</span>
        <span class="kumham"></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
    </li>
    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/login') }}">Login</a>
    </li>
    <li class="nav-item {{ Request::is('dashboard/koleksi') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/dashboard/koleksi') }}">Koleksi Buku</a>
    </li>
    <li class="nav-item {{ Request::is('bantuan') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/bantuan') }}">bantuan</a>
    </li>
    <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
        <a class="nav-link" href="{{ asset('dashboard/profile') }}" style="font-family: 'Poppins'">profile</a>
    </li>
</ul>
</div>
</nav>

@yield('login')

<footer style="background-color: #0A1958; color: white; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <!-- Section 1: Logo dan Informasi Kontak -->
            <div class="col-md-4">
                <img src="{{ asset('images/logokumham.png') }}" alt="Logo" style="width: 80px; margin-bottom: 20px;">
                <h5 style="font-weight: bold; color: #FFFFFF; margin-bottom: 20px;">
                    KANTOR WILAYAH KEMENTERIAN HUKUM DAN HAM PROVINSI KALIMANTAN SELATAN
                </h5>
                <p style="color: #FFFFFF; font-size: 14px;">
                    <i class="fas fa-map-marker-alt"></i> Jl. Brig. Jend. H. Hasan Basri No.30 Banjarmasin, Kalimantan Selatan
                </p>
                <p style="color: #FFFFFF; font-size: 14px;">
                    <i class="fas fa-phone"></i> 05113302790
                </p>
                <p style="color: #FFFFFF; font-size: 14px;">
                    <i class="fas fa-envelope"></i> 
                    <a href="mailto:kanwilkalsel@kemenkumham.go.id" style="color: white; text-decoration: none;">kanwilkalsel@kemenkumham.go.id</a>
                </p>
                <p style="color: #FFFFFF; font-size: 14px;">
                    <i class="fas fa-envelope"></i> 
                    <a href="mailto:humas.kemenkumhamkalsel@gmail.com" style="color: white; text-decoration: none;">humas.kemenkumhamkalsel@gmail.com</a>
                </p>
            </div>

            <!-- Section 2: Unit Utama -->
            <div class="col-md-4">
                <h5 style="font-weight: bold; color: #FFFFFF; margin-bottom: 20px; padding-left: 0px;">UNIT UTAMA</h5>

                <ul style="display: flex; flex-direction: column; align-items: left; padding-left: 0; list-style: none; color: #FFFFFF; font-size: 14px;">
                    <li style="margin-bottom: 5px;">Sekretariat Jenderal</li>
                    <li style="margin-bottom: 5px;">Ditjen PP</li>
                    <li style="margin-bottom: 5px;">Ditjen AHU</li>
                    <li style="margin-bottom: 5px;">Ditjen PAS</li>
                    <li style="margin-bottom: 5px;">Ditjen Imigrasi</li>
                    <li style="margin-bottom: 5px;">Ditjen KI</li>
                    <li style="margin-bottom: 5px;">Ditjen HAM</li>
                    <li style="margin-bottom: 5px;">Inspektorat Jenderal</li>
                    <li style="margin-bottom: 5px;">BPHN</li>
                    <li style="margin-bottom: 5px;">BSK Kumham</li>
                    <li style="margin-bottom: 5px;">BPSDM Kumham</li>
                </ul>
            </div>

            <!-- Section 3: Profil Kantor Wilayah -->
            <div class="col-md-4">
                <h5 style="font-weight: bold; color: #FFFFFF; margin-bottom: 20px; " >PROFIL KANTOR WILAYAH</h5>
                <ul style="display: flex; flex-direction: column; align-items: left; padding-left: 0; list-style: none; color: #FFFFFF; font-size: 14px;">
                    <li style="margin-bottom: 10px;">Sejarah Kementerian</li>
                    <li style="margin-bottom: 10px;">Profil Pejabat</li>
                    <li style="margin-bottom: 10px;">Struktur Organisasi</li>
                    <li style="margin-bottom: 10px;">Tugas Pokok dan Fungsi</li>
                    <li style="margin-bottom: 10px;">Visi dan Misi</li>
                    <li style="margin-bottom: 10px;">Tata Nilai</li>
                    <li style="margin-bottom: 10px;">Sekilas Kantor Wilayah</li>
                    <li style="margin-bottom: 10px;">Kepala Kantor Wilayah Dari Masa Ke Masa</li>
                    <li style="margin-bottom: 10px;">Kontak</li>
                </ul>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="text-center" style="margin-top: 20px;">
            <a href="https://www.facebook.com/kemenkumhamkalsel/" style="color: white; margin: 0 10px; text-decoration: none;"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/kumham_kalsel" style="color: white; margin: 0 10px; text-decoration: none;"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/kemenkumhamkalsel/" style="color: white; margin: 0 10px; text-decoration: none;"><i class="fab fa-instagram"></i></a>
            <a href="#" style="color: white; margin: 0 10px; text-decoration: none;"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com/@kemenkumhamkalsel" style="color: white; margin: 0 10px; text-decoration: none;"><i class="fab fa-youtube"></i></a>
        </div>

        <div class="text-center" style="margin-top: 20px;">
            <p style="color: #FFC738;">Laman Resmi Kantor Wilayah </p>
            <p style="color: #FFC738;"> Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia</p>
            <p style="color: #FFC738;">Provinsi Kalimantan Selatan</p>
            <p style="color: #FFFFFF;">Copyright © 2024 Pusat Data dan Teknologi Informasi</p>
        </div>
    </div>
</footer>
</body>
</html>