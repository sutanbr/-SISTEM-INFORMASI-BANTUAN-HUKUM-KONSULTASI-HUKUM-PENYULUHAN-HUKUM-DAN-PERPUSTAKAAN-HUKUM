<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/kumham.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
body {
    /* background-image: url('images/bg.png'); */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    font-family: 'poppins';
}
.text-putih {
    color: white; /* Ganti dengan warna yang Anda inginkan */
}

.header-section {
    /* margin-top: 50px; */
}
.container-fluid {
    padding: 0;
}

.header-container {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.header-image {
    width: 50%;
}

.header-section {
    width: 50%;
    padding-left: 20px; /* Adjust padding for space between image and text */
}
.header-section h1, .header-section p {
    text-align: center;
}

.header-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin: 0;
    padding: 0;
    vertical-align: top; /* Ensures image aligns to top of container */
}



.contact-section .card {
    background-color: #f8f9fa;
    border: none;
}


/* kontak */
.contact-section {
    background-color: #ffffff; /* Warna latar belakang */
    padding: 30px; /* Padding untuk section */
    border-radius: 10px; /* Sudut membulat */
    max-width: 1000px; /* Atur lebar maksimum section */
    margin: 0 auto; /* Pusatkan section di tengah halaman */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); Efek bayangan di setiap sisi
}

.contact-card {
    width: 15rem;
    background-color: white; /* Warna latar belakang kotak */
    /* border: 1px solid #ddd; Border */
    border-radius: 10px; /* Sudut membulat */
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); Efek bayangan */
    transition: transform 0.2s; /* Transisi saat hover */
}

.contact-card:hover {
    transform: scale(1.05); /* Efek zoom saat hover */
}
/* footer */
.footer-links a:hover {
    text-decoration: underline; /* Menambahkan garis bawah saat hover */
}

.social-icons a:hover {
    color: #007bff; /* Mengubah warna ikon sosial saat hover */
}
.section {
            padding: 60px 0;
        }
    </style>
</head>

<body>
    
@yield('konten')





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<footer class="bg-dark text-light mt-5 py-4">
    <div class="container text-center">
        <h5>Ikuti Kami</h5>
        <div class="social-icons mb-3">
            <a href="https://www.facebook.com/kemenkumhamkalsel/photos?_rdr" class="text-light mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/kumham_kalsel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-light mx-2"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/kemenkumhamkalsel/" class="text-light mx-2"><i class="fab fa-instagram"></i></a>
            <a href="https://id.linkedin.com/company/kementerian-hukum-dan-hak-asasi-manusia-republik-indonesia" class="text-light mx-2"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <hr class="bg-light">
        <div class="footer-links mb-3">
            <a href="#" class="text-light mx-2">Tentang Kami</a>
            <a href="#" class="text-light mx-2">Layanan</a>
            <a href="#" class="text-light mx-2">Kontak</a>
            <a href="#" class="text-light mx-2">Privasi</a>
        </div>
        <p class="mb-0">&copy; 2023 Kemenkumham. Semua Hak Dilindungi.</p>
    </div>
</footer>

</body>
</html>