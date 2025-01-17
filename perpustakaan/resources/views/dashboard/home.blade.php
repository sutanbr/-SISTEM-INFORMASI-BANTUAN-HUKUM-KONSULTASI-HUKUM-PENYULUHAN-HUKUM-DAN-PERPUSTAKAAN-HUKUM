<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link to CSS stylesheets like Bootstrap, FontAwesome, etc. -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/kumham.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Tambahkan jQuery -->



    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            background-color: #0056b3;
            height: 80px;
        }
        .navbar a {
            color: #FFFFFF !important;
        }
        .navbar-brand .perpu {
            color: white;
        }
        .navbar-brand .kumham {
            color: #ffa500;
        }
        .nav-link:hover {
    text-decoration: underline;
}

        .section {
            padding: 60px 0;
        }

        .book-collection {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .book-item {
            text-align: center;
        }
        .book-item img {
            width: 100px;
            height: 150px;
        }
        .book-item h5 {
            font-size: 16px;
            margin-top: 10px;
        }
        .book-item p {
            font-size: 14px;
            color: #666;
        }
        a {
    color: black; 
    text-decoration: none; 
}


a:hover {
    text-decoration: underline; 
}

.book-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Mengatur grid dengan lebar minimal */
    gap: 10px; /* Jarak antar elemen */
    padding: 50px;
}

        .jam-container {
            display: flex;
            justify-content: space-around;
            padding: 100px;
        }

        .book-item {
            font-weight: bold;
    transition: transform 0.3s ease; 
}
.jam-item {
    background-color: #d1dce5; 
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    text-align: left;
}


        .book-item img {
    width: 70%;
    height: auto;
    border-radius: 30px;
    transition: transform 0.3s ease; /* Efek transisi pada gambar */
}

/* Efek saat cursor diarahkan ke gambar */
.book-item img:hover {
    transform: scale(1.1); /* Membesarkan gambar */
}


        .book-item button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


        .book-item button:hover {
            background-color: #0056b3;
        }
.images{
    display:flex;
    width: 100%;
    transition: 2s;
}
.images img{
    width: 100%;
}
.wrapper{
    width: 100%;
    margin: auto;
    border: radius 5px;
    overflow: hidden;
    position: relative;
}
.navigation a{
    display:inline-block;
    height: 25px;
    width: 25px;
    background-color: #dedede;
    font-size:0px;
    border-radius: 50%;
    margin: 3px;
}
.navigation a:hover{
    background-color: #666;
}
.navigation{
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    text-align: center;
    margin-top: -50px;
}
.nav-item.active .nav-link {
    color: black; /* Warna biru untuk halaman aktif */
    text-decoration: underline; /* Underline untuk halaman aktif */
}

.navbar-brand .PERPUSTAKAAN {
            color: greenyellow;
        }
        .navbar-brand .PUSHAM {
            color: BLUE;
        }
.fade-in {
            opacity: 0; 
            transform: translateX(100%); 
            transition: opacity 0.5s ease, transform 0.5s ease; 
        }

        .fade-in.show {
            opacity: 1; 
            transform: translateX(0);
        }
        .custom-section {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
        }


        .animated-image {
    animation: fadeIn 2s forwards; 
}
.text-container {
            animation: fadeInLeft 2s forwards;
        }
        .image-container {
    width: 40%; 
    text-align: right; 
    position: relative; 
}
.benefits-section {
    text-align: center;
    margin: 20px;
}

.benefits-section h2 {
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
}

.highlight-green {
    color: #8BC34A; /* Warna hijau */
}

.highlight-blue {
    color: #2196F3; /* Warna biru */
}

.benefits-section p {
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 30px;
}

.benefit-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* Mengatur 4 kolom */
    gap: 20px;
    justify-items: center;
}

.benefit-item {
    text-align: center;
    font-family: 'Poppins', sans-serif;
}

.benefit-item img {
    width: 150px; /* Sesuaikan ukuran gambar */
    height: auto;
    margin-bottom: 15px;
}

.benefit-item p {
    font-size: 14px;
    color: #333;
}
.carousel-image {
        height: 250px;
        object-fit: contain;
    }
    .gallery-item {
            width: 150px;
            margin: 10px;
            text-align: center;
            display: none; /* Hidden by default */
        }

        .gallery-item img {
            width: 100%;
            border-radius: 10px;
        }

        .gallery-item p {
            font-size: 14px;
            margin-top: 5px;
        }

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateX(20px); 
    }
    to {
        opacity: 1;
        transform: translateX(0); 
    }
}

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px); 
            }
            to {
                opacity: 1;
                transform: translateX(0); 
            }
        }


        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
/* form input data */
.centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        /* Style for the form inputs */
        .form-input {
            width: 300px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Style for the submit button */
        .submit-btn {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #2B66AC;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Align success alert popup */
        .success-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: none; /* Hidden by default */
        }
        /*  */
        .containerd {
  display: flex;
  justify-content: center;
  align-items: stretch; /* Membuat tinggi semua card sejajar */
  min-height: 60vh;
  gap: 20px; /* Memberi jarak antar card */
}

.cardd {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
  padding: 10px;
  width: 30%; /* Menentukan lebar card */
  box-sizing: border-box; /* Memastikan padding dihitung dalam lebar total */
  display: flex;
  flex-direction: column; /* Agar konten di dalam card vertikal */
  justify-content: space-between; /* Mengatur posisi konten dalam card */
  max-height: 300px; /* Tinggi maksimum card */
  overflow: auto; /* Menambahkan scroll jika konten melebihi tinggi */
}

.cardd  h2{
  margin-bottom: 10px;
  font-size: 1.5rem;
  color: #333;
  text-align: center; /* Menengahkan teks h2 */
}

.cardd-content {
  display:flex;
  justify-content: space-between;
}

.cardd ul {
  list-style: none;
  padding-left: 20px;
}

.cardd li {
  margin-bottom: 5px;
  
}

.cardd-header {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  justify-content: center; /* Menengahkan konten di dalam header */
}

.cardd-header i {
  font-size: 2rem;
  color: #007bff;
  margin-right: 10px;
}

.left-column, .right-column {
  width: 45%; /* Membuat kolom dengan lebar 45% */
}

.image-slider {
    position: relative;
    width: 600px; /* Sesuaikan dengan lebar gambar */
    height: auto;
    overflow: hidden;
}

.slider-container {
    display: flex;
    transition: transform 1s ease-in-out;
}

.slider-container img {
    width: 500px; /* Sesuaikan dengan lebar gambar */
    height: auto;
}

/* Tidak perlu @keyframes jika tidak ingin ada animasi hover, 
   cukup mengandalkan javascript untuk slide otomatis */


/* Menggunakan JavaScript untuk kontrol slide otomatis */



.kartu {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    width: 200px;
    border: 1px solid #000000;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #fff;
}

.kartu:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
}

.kartu img {
    width: 100%;
    height: 250px;
    border-bottom: 1px solid #ddd;
}
@keyframes slide-fade {
  0% {
    transform: translateX(0);
    opacity: 1;
  }
  33% {
    transform: translateX(-33.33%);
    opacity: 0;
  }
  66% {
    transform: translateX(-66.66%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
[data-aos] {
    opacity: 0;
    transition: opacity 1s ease, transform 1s ease;
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translateX(0);
}

/* scroll button */
.scroll-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .scroll-btn:hover {
            background-color: #004494;
        }

    </style>
   <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>


</head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    


<body>
   
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <div style="display: flex; align-items: center;">
                <img class="perpu" src="images/logo-buku.png" style="width: 100px; height: auto; margin-right: 10px;">
                <span style="font-family: 'Poppins'; font-size: 18px; color: #ffffff; font-weight: bold;">PERPUSTAKAAN HUKUM</span>
            </div>
            <span class="kumham" style="color: #ffa500;"></span>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li>
                    @if (Auth::check())
                    <div>
                        @if (Auth::user()->role_id == 1)
                        <a href="{{ route('admin/dashboard') }}" class="btn btn-primary" 
                            style="margin: 0 10px 0 10px; border-radius: 20px; padding: 5px 10px;">
                            Admin
                        </a>
                    @endif
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="margin:0 10px 0 10px;">Logout</button>
                        </form>
                    </div>
                @else
                    <div>
                      
                        <a href="{{ route('login') }}" class="btn" style="background-color: #75b4f7; color: black; font-family: 'Poppins'; border-radius: 20px; padding: 5px 10px; margin: 0 10px 0 10px">Login</a>
                    </div>
                @endif
                </li>
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}" style="display: flex; align-items: center;">
                        <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> kembali
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('home') }}" style="display: flex; align-items: center;">
                        <i class="fas fa-home" style="margin-right: 8px;"></i> home
                    </a>
                </li>
                
                <li class="nav-item {{ Request::is('keranjang') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('keranjang.index') }}" style="font-family: 'Poppins'; position: relative; display: flex; align-items: center;">
                        <i class="fas fa-shopping-cart" style="margin-right: 8px;"></i>
                        Keranjang
                        <span id="bubble-notif" style="position: absolute; top:0; right: -10px; background-color: red; color: white; font-size: 12px; border-radius: 50%; padding: 2px 6px; display: none;">0</span>
                    </a>
                </li>
        </li>
        {{-- <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
        </li> --}}
        <li class="nav-item {{ Request::is('dashboard/koleksi') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/dashboard/koleksi') }}" style="display: flex; align-items: center;">
                <i class="fas fa-book" style="margin-right: 8px;"></i>
                Koleksi Buku
            </a>
        </li>
        <li class="nav-item {{ Request::is('dashboard/bantuan') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('dashboard/bantuan') }}" style="display: flex; align-items: center;">
                <i class="fas fa-question-circle" style="margin-right: 8px;"></i>
                Bantuan
            </a>
        </li>
        
        {{-- <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('dashboard/profile') }}" style="font-family: 'Poppins'">profile</a>
        </li> --}}
        <li class="nav-item {{ Request::is('keranjang/barcode') ? 'active' : '' }}">
            <a class="nav-link" href="{{ asset('keranjang/barcode') }}" style="font-family: 'Poppins'; position: relative; display: flex; align-items: center;">
                <i class="fas fa-barcode" style="margin-right: 8px;"></i>
                Barcode
                <span id="notif-bubble" style="
                    position: absolute;
                    top: 0;
                    right: -10px;
                    background-color: red;
                    color: white;
                    border-radius: 50%;
                    padding: 2px 8px;
                    font-size: 12px;
                    font-weight: bold;
                    display: none; /* Hidden by default */
                "></span>
            </a>
        </li>
        
        
        
    </ul>
    </div>
    </nav>

       
    
    

        <!-- Menu Tambahan -->
       
        
        
    <section style="margin:0; padding:100px; background-image: url('images/Kantor123.png'); background-size: cover; background-position: center; background-repeat: no-repeat;"> 
        <div  style="display: flex; justify-content: space-between; align-items: center;">
            <div class="col-md-6">
                <div style="text-align: center; transform: translateX(-50px); padding: 5px;">
                    <h1 style="color:#ffffff; font-family: 'Montserrat', sans-serif; font-size:2rem; font-weight:bold; margin-bottom:15px; display: inline-block; white-space: nowrap; letter-spacing: 1px; text-transform: uppercase; line-height: 1.2; text-align: center; transform: translateX(-30px);">
                        "Perpustakaan adalah sumber
                    </h1>
                    
<h1 style="color:#ffffff; font-family: 'Montserrat', sans-serif; font-size:2rem; font-weight:bold; margin-bottom:15px; display: inline-block; white-space: nowrap; letter-spacing: 1px; text-transform: uppercase; line-height: 1.2; text-align: center;">ilmu  mana setiap halaman</h1>
<h1 style="color:#ffffff; font-family: 'Montserrat', sans-serif; font-size:2rem; font-weight:bold; margin-bottom:15px; display: inline-block; white-space: nowrap; letter-spacing: 1px; text-transform: uppercase; line-height: 1.2; text-align: center;"> membuka dunia baru."</h1>


                    
                    <p style="color:#ffffff; font-family: 'Lora', serif; font-size:1.1rem; line-height:1.8; font-weight:300; text-align:center; max-width: 800px; margin: 0 auto; letter-spacing: 0.5px;">
                        Di Kementerian Hukum dan HAM, tersimpan ribuan buku yang siap memperkaya pengetahuan dan mendalami wawasan hukum serta hak asasi manusia. Setiap halaman adalah kunci untuk membuka pintu ilmu dan pemahaman yang lebih luas.
                    </p>
                
                    <div style="margin-top: 30px; text-align: center;">
                        <a href="{{asset('dashboard/koleksi')}}" class="btn btn-primary btn-lg" style="background-color:#ffffff; border:none; padding:15px 30px; font-size:1.1rem; border-radius:30px; transition: background-color 0.3s ease-in-out; color:black; font-weight:500; text-transform: uppercase;" 
                            onmouseover="this.style.backgroundColor='#9E7B6D';" onmouseout="this.style.backgroundColor='#ffffff';">Pinjam Buku Sekarang</a>
                            <button class="scroll-btn" onclick="scrollToSection()"> Tambah Pengunjung</button>
                    </div>
                </div>
                
            </div>
    
            <!-- Slideshow Section -->
            <div class="col-md-6" style="position: relative; max-width: 600px; transform: translateX(20px);">
                <div class="image-slider">
                    <div class="slider-container">
                        <img src="{{ asset('images/alur.png') }}" class="animated-image" alt="tentang kami" style="border-radius: 10%; width:100%;">
                        {{-- <img src="{{ asset('images/Per2.jpg') }}" class="animated-image" alt="tentang kami"style="border-radius: 10%">
                        <img src="{{ asset('images/Per3.jpg') }}" class="animated-image" alt="tentang kami"style="border-radius: 10%">
                        <img src="{{ asset('images/Per1.jpg') }}" class="animated-image" alt="tentang kami"style="border-radius: 10%">
                        <img src="{{ asset('images/Per5.jpg') }}" class="animated-image" alt="tentang kami"style="border-radius: 10%"> --}}
                        <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    <section class="section" style="background: #ffffff; padding: 20px;" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1000">
        <h2 style="text-align: center; margin-left: 100px; font-weight: bold; margin-bottom: 100px; margin-top: 5%">REKOMENDASI BUKU</h2>
        <div class="book-container">
            @foreach ($buku as $item)
            <a href="{{ asset('buku/' . $item->kode_buku) }}" class="kartu" data-aos="fade-in" data-aos-delay="800">
                <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}">
                <div class="card-content">
                    <p>{{ $item->judul }}</p>
                    <p>({{ $item->kode_buku }})</p>
                </div>
            </a>
        @endforeach
            <!-- Tambahkan kartu lainnya -->
        </div>
    </section>
    
    <section>
        <div class="container" style="margin-bottom: 200px;">
            <h2 class="mb-4" style="padding:50px; text-align:center;">Rekomendasi Buku</h2>
            <div id="bookCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum1.jpg') }}" class="img-fluid carousel-image" alt="Book 1">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum2.jpeg') }}" class="img-fluid carousel-image" alt="Book 2">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum3.jpeg') }}" class="img-fluid carousel-image" alt="Book 3">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum4.jpg') }}" class="img-fluid carousel-image" alt="Book 4">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum5.jpg') }}" class="img-fluid carousel-image" alt="Book 5">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum6.jpg') }}" class="img-fluid carousel-image" alt="Book 6">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum7.jpg') }}" class="img-fluid carousel-image" alt="Book 7">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('images/hukum8.jpg') }}" class="img-fluid carousel-image" alt="Book 8">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#bookCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#bookCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="section;"data-aos="fade-in" data-aos-delay="300" >
        <h2 style="text-align: center; margin:100px 0 100px 0;  ">INFORMASI PERPUSTAKAAN</h2>
        <div class="containerd">
    <div class="cardd">
      <div class="cardd-header">
        <i class="fas fa-clock"></i>
        <h2>Waktu Operasional</h2>
      </div>
      <ul style="text-align: center; font-size:1.5rem; ">
        <li>Senin: 08:00 - 16:00 &nbsp;</li>
        <li>Selasa: 08:00 - 16:00 </li>
        <li>Rabu: 08:00 - 16:00 &nbsp;</li>
        <li>Kamis: 08:00 - 16:00</li>
        <li>Jumat: 08:00 - 16:30 </li>
      </ul>
    </div>
    <div class="cardd">
      <div class="cardd-header">
        <i class="fas fa-book"></i>
        <h2>Peraturan Perpustakaan</h2>
      </div>
      <ul style="list-style: disc;">
        <li>Tidak boleh membawa makanan dan minuman.</li>
        <li>Tidak boleh menggunakan celana pendek.</li>
        <li>Tidak boleh berbicara dengan nada keras.</li>
        <li>Tidak boleh berbicara dengan nada keras.</li>
        <li>Tidak boleh berbicara dengan nada keras.</li>
        <li>Tidak boleh berbicara dengan nada keras.</li>
        <li>Tidak boleh berbicara dengan nada keras.</li>
        
      </ul>
    </div>
    <div class="cardd">
        <div class="cardd-header">
          <i class="fas fa-tags"></i>
          <h2>Jenis Buku</h2>
        </div>
        <div class="cardd-content">
          <ul class="left-column" style="list-style: disc;">
            <li>Hukum Pidana</li>
            <li>Hukum Agraria</li>
            <li>Hukum Perdata</li>
            <li>Hukum Dagang</li>
            <li>Hukum Lingkungan</li>
            <li>Hukum Lingkungan</li>
          </ul>
          <ul class="right-column" style="list-style: disc;">
            <li>Hukum Lingkungan</li>
            <li>Hukum Lingkungan</li>
            <li>Hukum Lingkungan</li>
            <li>Hukum Lingkungan</li>
            <li>Hukum Lingkungan</li>
            <li>Hukum Lingkungan</li>
          </ul>
        </div>
      </div>
      
  </div>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </section>
    <section>
        <section class="section" style="margin-bottom: 100px;">
            <h2 style="text-align: center; margin-bottom: 70px;">Tentang kami</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-slider">
                            <div class="slider-container">
                                <img src="{{ asset('images/Per1.jpg') }}" class="animated-image" alt="tentang kami">
                                {{-- <img src="{{ asset('images/Per2.jpg') }}" class="animated-image" alt="tentang kami">
                                <img src="{{ asset('images/Per3.jpg') }}" class="animated-image" alt="tentang kami"> --}}
                                <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding: 40px; background-color: #f9f9f9; border-radius: 0px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <p style="font-size: 1rem; color: #555; line-height: 1.6; margin-bottom: 15px;">
                            <strong style="font-size: 1.2rem; color: #333;">Perpustakaan Kementerian Hukum dan Hak Asasi Manusia Kalimantan Selatan</strong>
                            <br><br>
                            Perpustakaan Kementerian Hukum dan HAM Kalimantan Selatan hadir untuk mendukung literasi hukum dan HAM melalui koleksi bahan pustaka berkualitas dan layanan yang mudah diakses.
                        </p>
                    
                        <div style="margin-bottom: 15px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 10px;">Visi</h3>
                            <p style="font-size: 1rem; color: #555;">Menjadi pusat informasi hukum dan HAM terpercaya di Kalimantan Selatan.</p>
                        </div>
                    
                        <div>
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 10px;">Misi</h3>
                            <ul style="list-style: none; padding-left: 0; font-size: 1rem; color: #555; line-height: 1.6;">
                                <li style="margin-bottom: 10px;">
                                    <span style="color: #007BFF; font-weight: bold;">&#10003;</span> Menyediakan koleksi literatur hukum, HAM, dan bidang terkait lainnya.
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <span style="color: #007BFF; font-weight: bold;">&#10003;</span> Memberikan layanan perpustakaan berbasis teknologi untuk kemudahan akses informasi.
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <span style="color: #007BFF; font-weight: bold;">&#10003;</span> Mendukung pembelajaran, penelitian, dan peningkatan literasi hukum bagi masyarakat.
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    
            
                    
                </div>
            </div>
        </section>
 
    

        <div class="centered-content">
            <h1 style="text-align: center; margin:50px 0 50px 0; color:#0056b3">Tambah Pengunjung</h1>
        
            <!-- Success Alert Popup -->
            <div class="alert alert-success success-alert">
                Pengunjung berhasil ditambahkan!
            </div>
        
            <!-- Form input -->
            <form id="pengunjungForm" style="margin-bottom: 100px">
                @csrf
                <input type="text" name="nama" id="nama" placeholder="Nama" class="form-input" required>
                <input type="text" name="asal_daerah" id="asal_daerah" placeholder="Asal Daerah" class="form-input" required>
                <button type="button" onclick="submitForm()" class="submit-btn">Tambah Pengunjung</button>
            </form>
        </div>
        <script>
            function scrollToSection() {
                const targetSection = document.querySelector('.centered-content');
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
            </script>
        <script>
            function updateKeranjangBubble() {
                fetch("{{ route('keranjang.jumlah') }}")
                    .then(response => response.json())
                    .then(data => {
                        const bubble = document.getElementById('bubble-notif');
                        if (data.jumlah > 0) {
                            bubble.style.display = 'inline-block';
                            bubble.textContent = data.jumlah;
                        } else {
                            bubble.style.display = 'none';
                        }
                    })
                    .catch(error => console.error('Error fetching keranjang count:', error));
            }
        
            // Panggil fungsi saat halaman dimuat
            document.addEventListener('DOMContentLoaded', updateKeranjangBubble);
        
            // Panggil fungsi saat tombol Tambah Buku diklik
            document.querySelectorAll('button[type="submit"]').forEach(button => {
                button.addEventListener('click', () => {
                    setTimeout(updateKeranjangBubble, 100); // Beri jeda untuk memastikan data diperbarui
                });
            });
        </script>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function updatePendingNotif() {
                $.ajax({
                    url: '/notif-pending',
                    method: 'GET',
                    success: function(response) {
                        const pendingCount = response.pendingCount;
                        const notifBubble = $('#notif-bubble');
        
                        if (pendingCount > 0) {
                            notifBubble.text(pendingCount).show();
                        } else {
                            notifBubble.hide();
                        }
                    },
                    error: function() {
                        console.error('Failed to fetch notification count.');
                    }
                });
            }
        
            // Call function on page load
            $(document).ready(function() {
                updatePendingNotif();
        
                // Optionally, refresh notifications every 30 seconds
                setInterval(updatePendingNotif, 30000);
            });
        </script>
        <script>
            function submitForm() {
    $.ajax({
        url: "{{ route('dashboard.store') }}",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            nama: $("#nama").val(),
            asal_daerah: $("#asal_daerah").val(),
        },
        success: function(response) {
            console.log(response); // Tambahkan ini untuk melihat respons di konsol
            // Show success alert
            $('.success-alert').fadeIn().delay(2000).fadeOut();
            // Clear input fields
            $("#nama").val('');
            $("#asal_daerah").val('');
        },
        error: function(xhr) {
            console.error(xhr.responseText); // Tampilkan kesalahan di konsol
        }
    });
}

        </script>

    
    
    <!-- Include Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show'); 
                    observer.unobserve(entry.target); 
                }
            });
        }, options);

        const paragraphs = document.querySelectorAll('.fade-in');
        paragraphs.forEach(p => {
            observer.observe(p);
        });
    </script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const sliderContainer = document.querySelector('.slider-container');
    let currentIndex = 0;
    const images = sliderContainer.querySelectorAll('img');
    const totalImages = images.length;

    setInterval(function() {
        currentIndex++;
        if (currentIndex >= totalImages) {
            currentIndex = 0; // Reset ke gambar pertama
        }
        const offset = -currentIndex * 400; // Gambar bergerak ke kiri (300px adalah lebar gambar)
        sliderContainer.style.transform = `translateX(${offset}px)`;
    }, 3000); // Ganti gambar setiap 3 detik
});


</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <footer style="background-color: #333333; color: #ffffff; padding: 40px 0; font-family: 'Arial', sans-serif;">
        <div class="container">
            <div class="text-center" style="margin-bottom: 20px;">
                <h4 style="font-size: 24px; color: #0056b3; font-weight: bold;">Laman Resmi Kantor Wilayah</h4>
                <p style="font-size: 18px; color: #ffffff;">Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia</p>
                <p style="font-size: 18px; color: #ffffff;">Provinsi Kalimantan Selatan</p>
            </div>
            <div class="text-center">
                <p style="font-size: 16px; color: #999999;">Copyright © 2024 Pusat Data dan Teknologi Informasi</p>
                <div style="margin-top: 20px;">
                    <a href="#" style="color: #ffffff; margin: 0 10px; text-decoration: none; font-size: 20px;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: #ffffff; margin: 0 10px; text-decoration: none; font-size: 20px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: #ffffff; margin: 0 10px; text-decoration: none; font-size: 20px;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>

