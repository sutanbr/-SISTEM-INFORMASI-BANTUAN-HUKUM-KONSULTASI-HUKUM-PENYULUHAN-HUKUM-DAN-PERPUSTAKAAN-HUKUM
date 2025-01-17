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
    <!-- Tambahkan jQuery -->



    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            background-color: #2B66AC;
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
        .jam-item{
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

    </style>
   <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>


</head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    


<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <span class="perpu" style="font-family: 'Poppins'">PUSHAM</span>
            <span class="kumham"></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="container">
                        <div class="row">
                            <div> 
                                <div  style="background-color: #2b66ac;">
                                    <a href="{{ asset('admin/dashboard') }}" class="btn" style="background-color: #007bff; color: black; border: 1px solid black; font-family: 'Poppins'; border-radius: 20px; padding: 5px 10px;">Keranjang Buku
                                    </a>
                                </div>
                            </div>
                        </div>
                </li>
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}" style="font-family: 'Poppins'">Home</a>
                </li>
                <li class="nav-item {{ Request::is('koleksi') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ asset('dashboard/koleksilogin') }}" style="font-family: 'Poppins'">Koleksi Buku</a>
                </li>
                <li class="nav-item {{ Request::is('bantuan') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ asset('dashboard/bantuan') }}" style="font-family: 'Poppins'">bantuan</a>
                </li>
                <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ asset('dashboard/profile') }}" style="font-family: 'Poppins'">profile</a>
                </li>
            </ul>
        </div>
    </nav>
    <section style="margin:100px 0 -100px 100px"> 
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color:#5C5B8F;" class="text-container">"Perpustakaan adalah rumah bagi pikiran </h1>
                        <h1 style="color:#2B66AC;" class="text-container">yang lapar akan ilmu </h1>
                            <h1 style="color:#5E5BFB" class="text-container">dan jiwa yang haus akan inspirasi"</h1>
                    <p style="position: relative; right:60px" class="text-container">Di Kementerian Hukum dan HAM, tersimpan ribuan buku yang siap memperkaya pengetahuan dan mendalami wawasan 
                        hukum serta hak asasi manusia. Setiap halaman adalah kunci untuk membuka pintu ilmu dan pemahaman yang lebih luas.</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/lanternbg1.png') }}" class="animated-image" alt="Responsive image" style="position:relative; left:300px; bottom:50px ">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <img src="{{ asset('images/lanternbg1.png') }}" class="animated-image " alt="Responsive image" style="position: relative; bottom:150px; left:100px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    </section>

    <section class="section" >
        <h2 style="text-align: center; margin-left: 100px; font-weight: bold;" style="margin-bottom: -100px;"> Buku Terlaris</h2>

        <div class="book-container">
            <a href="{{ url('/buku/hukum1') }}" class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352) AKTIF</p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352) </p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352) </p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352) </p> 
            </a>
            <a href="{{ asset('#') }}" class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352) </p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352) </p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352) </p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352)</p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352)</p> 
            </a>
            <a href="{{ asset('#') }}"class="book-item">
                <img src="{{ asset('images/hukum3.jpeg') }}" alt="KUHP Book">
                <p style="font-family: 'Poppins'">KUHP </p>
                <p>(3252352)</p> 
            </a>
        </div>
    </section>
    <section>
        <div class="container" style="margin-bottom: 100px;">
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
    <section class="section" style="margin-top: 200px">
        <h2 style="text-align: center;"><i class="fas fa-clock"></i> INFORMASI PERPUSTAKAAN</h2>
        <div class="jam-container">
            <div class="jam-item">
                <h5 style="text-align: center;" class="fade-in">Waktu Operasional</h5>
                <p style="text-align: center;" class="fade-in"><strong>Senin</strong> 08:00am-16:00pm</p>
                <p style="text-align: center;" class="fade-in"><strong>Selasa</strong> 08:00am-16:00pm</p>
                <p style="text-align: center;" class="fade-in"><strong>Rabu</strong> 08:00am-16:00pm  </p>
                <p style="text-align: center;" class="fade-in"><strong>Kamis</strong> 08:00am-16:00pm  </p>
                <p style="text-align: center;" class="fade-in"><strong>Jum'at</strong> 08:00am-16:30pm</p>
            </div>
            <div class="jam-item">
                <h5 style="text-align: center;" class="fade-in">Peraturan Perpustakaan</h5>
                <p class="fade-in">1. Tidak boleh membawa makanan dan minuman <p>
                <p class="fade-in">2. Tidak boleh menggunakan celana pendek <p>
                <p class="fade-in">3. Tidak boleh berbicara dengan nada keras <p>
                {{-- <p class="fade-in">4. Letakkan buku dimeja setelah dibaca, tidak boleh meletakkannya sendiri <p>
                <p class="fade-in">5. Jangan  membawa hewan peliharaan <p> --}}
            </div>
            <div class="jam-item">
                <h5 style="text-align: center;" class="fade-in">Jenis Buku</h5>
                    <p style="text-align: center;" class="fade-in">Hukum Pidana<p>
                    <p style="text-align: center;" class="fade-in">Hukum Agraria <p>
                    <p style="text-align: center;" class="fade-in">Hukum Perdata <p>
                    <p style="text-align: center;" class="fade-in">Hukum Dagang <p>   
                    <p style="text-align: center;" class="fade-in">Hukum Lingkungan <p>   
            </div>
        </div>
    </section>
    <section>
        <section class="section" style="margin-bottom: 100px;">
            <h2 style="text-align: center; margin-bottom: 30px;">Tentang kami</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('images/lanternbg1.png') }}" class="animated-image" alt="tentang kami" >
                    </div>
                    <div class="col-md-6">
                        <p class="fade-in">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet velit id quam ornare dapibus. Praesent et eros vel erat vehicula sagittis sed sit amet lorem. Nullam venenatis ligula eget lorem dictum, non tristique justo aliquet. Suspendisse potenti. Curabitur ac erat consequat, finibus est non, hendrerit libero. Aliquam non ligula a nunc tempor tristique. Curabitur id neque dui. Nulla facilisi. Proin viverra gravida purus, a vulputate lorem ultricies at. In placerat sit amet leo nec molestie. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas dapibus magna nec augue suscipit, nec eleifend orci laoreet.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <section style="height: 300px;  background-color: #2B66AC; color: white; text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 150px">
                <h2>PUSHAM, Layanan Perpustakaan Digital</h2>
                <p>Nikmati kemudahan peminjaman buku, terlengkap dalam satu aplikasi. Coba Sekarang!</p>
                <a href=""><button style="padding: 10px 20px; background-color: #33ccff; border: none; border-radius: 5px; color: white; font-size: 16px; cursor: pointer;">Info Lebih Lanjut</button></a>
            </section>
        </section>

    </section>
    <div class="benefits-section" style="margin-bottom: 200px;">
        <h2>AYO BERGABUNG DENGAN <span class="highlight-green">PERPUSTAKAAN</span><span class="highlight-blue">&nbsp;PUSHAM</span></h2>
        <p>Keuntungan Menjadi Anggota Perpustakaan</p>
        
        <div class="benefit-container">
            <div class="benefit-item">
                <img src="{{ asset('images/book.png') }}" style="width: 70%; height: auto;" alt="Akses Koleksi">
                <p>Akses ke berbagai koleksi menarik yang bisa dipinjam</p>
            </div>
            <div class="benefit-item">
                <img src="{{ asset('images/komunitas1.png') }}" style="width: 70%; height: auto;" alt="Bergabung dengan Komunitas">
                <p>Bergabung dengan ribuan komunitas pengguna aktif</p>
            </div>
            <div class="benefit-item">
                <img src="{{ asset('images/notif.png') }}" style="width: 70%; height: auto;" alt="Informasi Menarik">
                <p>Dapatkan berbagai informasi menarik</p>
            </div>
            <div class="benefit-item">
                <img src="{{ asset('images/recs.png') }}" style="width: 70%; height: auto;" alt="Kegiatan Menarik">
                <p>Rekomendasi buku berdasarkan jumlah peminjam buku dan pembaca buku</p>
            </div>
        </div>
    </div>
    

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

    <footer style="background-color: #0A1958; color: white; padding: 40px 0;">
        <div class="container">
            <div class="row">
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
    
                <div class="col-md-4">
                    <h5 style="font-weight: bold; color: #FFFFFF; margin-bottom: 20px;">UNIT UTAMA</h5>
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
    
                <div class="col-md-4">
                    <h5 style="font-weight: bold; color: #FFFFFF; margin-bottom: 20px;">PROFIL KANTOR WILAYAH</h5>
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

