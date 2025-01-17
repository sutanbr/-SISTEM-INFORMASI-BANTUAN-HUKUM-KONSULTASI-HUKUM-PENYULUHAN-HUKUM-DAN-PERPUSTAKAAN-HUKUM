@extends('layout.headers')
@section('konten')
<style>
    /* Styling untuk container utama */
    .card-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        margin-top: -400px; /* Mengangkat card ke tengah gambar */
        margin-bottom: 400px;
        z-index: 10; /* Agar card tidak tertutup gambar */
    }
  
    /* Styling untuk card container */
    .card-container {
        display: flex;
        justify-content: center;
        align-items: stretch; /* Menyamakan tinggi semua card */
        gap: 10px; /* Jarak antar card */
        margin-top: 20px;
        flex-wrap: wrap; /* Agar responsif jika layar sempit */
    }
  
    /* Styling untuk masing-masing card */
    .card {
        flex: 1; /* Membuat semua card memiliki lebar yang sama */
        max-width: 250px; /* Atur lebar maksimum card */
        min-height: 150px; /* Menentukan tinggi minimum */
        background: white;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 20px;
        text-align: center;
        position: relative;
        transition: transform 0.3s, box-shadow 0.3s; /* Transisi untuk efek hover */
        display:block;
        margin-bottom:200px;
    }
  
    /* Styling untuk ikon pada card */
    .card-icon {
        font-size: 2rem;
        margin-bottom: 10px;
        color: #007bff;
        transition: transform 0.5s ease-in-out;
    }
  
    /* Styling untuk ribbon */
    .ribbon {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #ff3366;
        color: white;
        padding: 5px 10px;
        font-weight: bold;
        border-radius: 5px;
        transform: rotate(-45deg);
    }
  
    /* Styling untuk judul card */
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: #242424;
    }


    /* Styling untuk teks dalam card */
    .card p {
        font-size: 0.9rem;
        color: #555;
        line-height: 1.5;
    }
  
    /* Highlight card on hover */
    .card:hover {
        transform: translateY(-5px); /* Mengangkat card sedikit */
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Menambah bayangan saat hover */
        background-color: #3d90e2; /* Mengubah warna latar belakang saat hover */
    }
    .card-link {
    text-decoration: none; /* Menghapus garis bawah */
    color: inherit; /* Mengambil warna teks dari elemen induk */
}
.blue-rectangle {
            background-color: #465c74; /* Warna biru */
            height: 200px; /* Tinggi */
            width: 100%; /* Lebar memenuhi layar */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            text-decoration: none; 
        }

        .blue-rectangle h1 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .blue-rectangle .btn {
            margin-top: 10px;
        }
        .card p {
        font-size: 14px;
        text-align: center;
        opacity: 0.8;
    }

    .click-here {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #1751bd;
        color: white;
        border-radius: 25px;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s ease;
        text-decoration: none;

    }

    .click-here:hover {
        background-color: #7cb1f7;
    }
    .animate-icon:hover {
        transform: rotate(360deg);
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
        text-transform: uppercase;
    }
    .custom-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .custom-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        color: white;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .customs-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        color: white;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
  </style>
<section>
     {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
     <script>
        var botmanWidget = {
            aboutText: 'memulai pembicaraan mulailah dengan mengetikkan Hi',
            introMessage: "Selamat Datang Di Konsultasi Hukum & erpustakaan"
        };
    </script>
    <div id="sp-top-bar" style="background-color: #004a72; padding: 10px 0; color: white;">
        <div class="container">
            <div class="container-inner">
                <div class="row align-items-center">
                    <!-- Social Icons Section -->
                    <div id="sp-top1" class="col-lg-6 d-flex justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="sp-column">
                            <ul class="social-icons d-flex list-unstyled m-0">
                                <li class="social-icon-facebook me-3">
                                    <a target="_blank" rel="noopener noreferrer" href="https://facebook.com/kemenkumhamkalsel" aria-label="Facebook">
                                        <span class="fab fa-facebook fa-lg"></span>
                                    </a>
                                </li>
                                <li class="social-icon-twitter me-3">
                                    <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/kumham_kalsel" aria-label="Twitter">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" style="width: 15px; position: relative; top: -1px;">
                                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon-youtube me-3">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/@kemenkumhamkalsel" aria-label="Youtube">
                                        <span class="fab fa-youtube fa-lg"></span>
                                    </a>
                                </li>
                                <li class="social-icon-instagram me-3">
                                    <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/kemenkumhamkalsel/" aria-label="Instagram">
                                        <span class="fab fa-instagram fa-lg"></span>
                                    </a>
                                </li>
                                <li class="social-icon-whatsapp">
                                    <a target="_blank" rel="noopener noreferrer" href="https://wa.me/6285176918808?text=Hi" aria-label="Whatsapp">
                                        <span class="fab fa-whatsapp fa-lg"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Contact Info Section -->
                    <div id="sp-top2" class="col-lg-6 d-flex justify-content-center justify-content-lg-end">
                        <div class="sp-column text-center text-lg-end">
                            <ul class="sp-contact-info list-unstyled d-flex m-0">
                                <li class="sp-contact-phone me-3 d-flex align-items-center">
                                    <span class="fas fa-phone me-2"></span> 
                                    <a href="tel:05113302790" style="color: white;">05113302790</a>
                                </li>
                                <li class="sp-contact-mobile me-3 d-flex align-items-center">
                                    <span class="fas fa-mobile-alt me-2"></span> 
                                    <a href="tel:085176918808" style="color: white;">085176918808</a>
                                </li>
                                <li class="sp-contact-email me-3 d-flex align-items-center">
                                    <span class="far fa-envelope me-2"></span> 
                                    <a href="mailto:kanwilkalsel@kemenkumham.go.id" style="color: white;">kanwilkalsel@kemenkumham.go.id</a>
                                </li>
                                <!-- Pastikan elemen waktu juga menggunakan d-flex dan align-items-center -->
                                <li class="sp-contact-time d-flex align-items-center">
                                    <span class="far fa-clock me-2"></span> 
                                    Senin s.d Jumat - 08.00 s.d 16.30
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Link to Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Custom CSS for Hover Effects and Spacing -->
    <style>
        .sp-contact-info li {
    display: flex;
    align-items: center;
}

.sp-contact-info li span {
    margin-right: 5px;  /* Memberikan jarak antara ikon dan teks */
}

.sp-contact-info li a {
    color: white;
    text-decoration: none;
}

.sp-contact-info li a:hover {
    color: #ffcc00;
}

        #sp-top-bar {
            border-bottom: 2px solid #003b5c;
        }
    
        .social-icons li a {
            transition: transform 0.2s ease, color 0.2s ease;
        }
    
        .social-icons li a:hover {
            transform: scale(1.1);
            color: #ffcc00;
        }
    
        .sp-contact-info li a {
            transition: color 0.2s ease;
        }
    
        .sp-contact-info li a:hover {
            color: #ffcc00;
        }
    
        .sp-contact-info li {
            font-size: 14px;
        }
    
        .sp-contact-info li span {
            font-size: 18px;
        }
    
        .sp-contact-info {
            gap: 10px;
        }
        
    </style>
    
<div class="">
    <!-- Main Header Section with Image on Left and Text on Right -->
    <div class="d-flex align-items-center header-container">
        <!-- Background Image Section -->
        <div class="header-image">
            <img src="{{asset('images/kemenkumhambaru.jpg')}}" alt="Background Image" class="img-fluid">
        </div>
        
        <!-- Header Text Section -->
        <div class="header-section text-center" style="margin-top: -400px; margin-left: -10px;"> <!-- Mengurangi margin negatif kiri -->
            <h2 style="margin-bottom: 10px; color:#004a72; font-weight: bold;">KEMENTERIAN HUKUM</h2> <!-- Mengatur ukuran teks -->
            <h2 style="margin-bottom: 10px;">KALIMANTAN SELATAN</h2> <!-- Mengatur ukuran teks -->
            <div class="text-secondary text-left mt-3" style="font-size: 16px; line-height: 1.8;"> <!-- Mengatur ukuran font dan spasi baris -->
                <p><strong>VISI</strong></p>
                <p>"Kementerian Hukum dan Hak Asasi Manusia yang Andal, Profesional, Inovatif, dan Berintegritas dalam pelayanan kepada Presiden dan Wakil Presiden untuk Mewujudkan Visi dan Misi Presiden: Indonesia Maju yang Berdaulat, Mandiri, dan Berkepribadian Berlandaskan Gotong Royong."</p>
                <p><strong>MISI</strong></p>
                <ul style="list-style-type: disc; padding-left: 20px;"> <!-- Membuat misi dalam bentuk daftar -->
                    <li>Membentuk Peraturan Perundang-Undangan yang Berkualitas dan Melindungi Kepentingan Nasional.</li>
                    <li>Menyelenggarakan Pelayanan Publik di Bidang Hukum yang Berkualitas.</li>
                    <li>Mendukung Penegakan Hukum di Bidang Kekayaan Intelektual, Keimigrasian, Administrasi Hukum Umum, dan Pemasyarakatan yang Bebas Dari Korupsi, Bermartabat, dan Terpercaya.</li>
                    <li>Melaksanakan Penghormatan, Perlindungan, dan Pemenuhan Hak Asasi Manusia yang Berkelanjutan.</li>
                    <li>Melaksanakan Peningkatan Kesadaran Hukum Masyarakat.</li>
                    <li>Ikut Serta Menjaga Stabilitas Keamanan Melalui Peran Keimigrasian dan Pemasyarakatan.</li>
                    <li>Melaksanakan Tata Laksana Pemerintahan yang Baik Melalui Reformasi Birokrasi dan Kelembagaan.</li>
                </ul>
            </div>
        </div>
        
        
    </div>
</div>

    <!-- Card Section -->
    <div class="card-section">
        <div class="card-container">
            <!-- Card 1 -->
            <div class="card customs-card" data-bs-toggle="modal" data-bs-target="#modalBantuanHukum">
                <div class="card-icon animate-icon">🤝</div>
                <h4 class="card-title">Bantuan Hukum</h4>
                <p>"Memberikan layanan hukum secara gratis kepada masyarakat yang kurang mampu, guna memastikan setiap individu memperoleh akses keadilan tanpa terkendala biaya."</p>
            </div>
            <!-- Card 2 -->
          
            <div class="card custom-card">
                <a href="{{asset('home')}}" class="card-link">
                    <div class="ribbon">NEW</div>
                    <div class="card-icon animate-icon">📚</div>
                    <h4 class="card-title">Perpustakaan</h4>
                    <p>"Tempat sempurna untuk menemukan buku favorit Anda. Klik di sini untuk menjelajahi lebih banyak pilihan menarik!"</p>
                    <span class="click-here">Klik Disini</span>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="card customs-card" data-bs-toggle="modal" data-bs-target="#modalPenyuluhanHukum">
                <div class="card-icon animate-icon">⚖</div>
                <h4 class="card-title">Penyuluhan Hukum</h4>
                <p>"Memberikan edukasi hukum dari desa hingga kota besar, memastikan setiap lapisan masyarakat memahami hak dan kewajibannya".</p>
            </div>
            
            
            <div class="card customs-card" data-bs-toggle="modal" data-bs-target="#modalKonsultasiHukum">
                <div class="card-icon animate-icon">🗨</div>
                <h4 class="card-title">Konsultasi Hukum</h4>
                <p>"Menyediakan layanan konsultasi hukum yang mudah diakses, memberikan solusi hukum dari desa hingga kota besar untuk masyarakat."</p>
            </div>
            
                <a href="https://jdih-kalsel.kemenkumham.go.id/" target="_blank" style="text-decoration: none;">
                    <div class="card customs-card">
                        <div class="card-icon animate-icon">🌐</div>
                        <h4 class="card-title" style="font-size: 20px">JDIH Kemenkumham Kalsel</h4>
                        <p>"JDIH adalah platform terintegrasi untuk pengelolaan dokumen hukum yang menyediakan layanan informasi hukum secara lengkap, akurat, mudah, dan cepat."</p>
                    </div>
                </a>
                
                
                
    </div>
    
</div>
    <!-- Modal Bantuan Hukum -->
    <div class="modal fade" id="modalBantuanHukum" tabindex="-1" aria-labelledby="modalBantuanHukumLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBantuanHukumLabel">Bantuan Hukum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama:</strong> Ramadan Sananta</p>
                    <p><strong>Nomor Telepon:</strong> <a href="https://wa.me/6289680510618?text=Halo,%20saya%20butuh%20Penyuluhan%20hukum"> 6289680510618</p></a>
                    <p><strong>Alamat:</strong> Jl. Manggis No. 123, Kotabaru</p>
                    <p><strong>Email:</strong> Ramadahanasananta@email.com</p>
                    <p><strong>Deskripsi Tambahan:</strong> Layanan ini memberikan bantuan hukum bagi masyarakat yang membutuhkan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Penyuluhan Hukum -->
    <div class="modal fade" id="modalPenyuluhanHukum" tabindex="-1" aria-labelledby="modalPenyuluhanHukumLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPenyuluhanHukumLabel">Penyuluhan Hukum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama:</strong> NAMA 123</p>
                    <p><strong>Nomor Telepon:</strong> <a href="https://wa.me/6289680510618?text=Halo,%20saya%20butuh%20Penyuluhan%20hukum"> 6289680510618</p></a>
                    <p><strong>Alamat:</strong> Jl. Contoh No. 456, Kota</p>
                    <p><strong>Email:</strong> contoh@email.com</p>
                    <p><strong>Deskripsi Tambahan:</strong> Edukasi hukum ini disediakan untuk masyarakat dari berbagai kalangan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konsultasi Hukum -->
    <div class="modal fade" id="modalKonsultasiHukum" tabindex="-1" aria-labelledby="modalKonsultasiHukumLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKonsultasiHukumLabel">Konsultasi Hukum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama:</strong> NAMA 123</p>
                    <p><strong>Nomor Telepon:</strong><a href="https://wa.me/6289680510618?text=Halo,%20saya%20butuh%20Penyuluhan%20hukum"> 6289680510618</p></a>
                    <p><strong>Alamat:</strong> Jl. Contoh No. 789, Kota</p>
                    <p><strong>Email:</strong> contoh@email.com</p>
                    <p><strong>Deskripsi Tambahan:</strong> Layanan konsultasi hukum untuk membantu menyelesaikan permasalahan hukum Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-top: -400px; margin-bottom: 50px;">
</section>

<section style="margin-bottom: 50px;">
    <div class="map-section text-center">
        <h2 class="mb-4" style="font-size: 2.5rem; color: #333;">Lokasi Kami</h2>
        <div style="width: 100%; height: 400px; margin: 0 auto;">
            <!-- Replace this iframe source with your Google Maps embed code -->
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.2504040613344!2d114.58641497398999!3d-3.2880201410884604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4230e90cea157%3A0xddf3627c358e1af9!2sKementrian%20Hukum%20Dan%20Hak%20Asasi%20Manusia%20RI!5e0!3m2!1sid!2sid!4v1735868193327!5m2!1sid!2sid" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
<section>
    <!-- Contact Section -->
    <div class="contact-section mt-5" style="margin-bottom:50px;">
        <h2 class="text-center mb-4" style="font-size: 2.5rem; color: #333;">Kontak Kami</h2>
        <div class="d-flex justify-content-center flex-wrap mt-4">
            <div class="contact-card mx-3 text-center p-4">
                <i class="fas fa-phone-alt fa-3x text-primary mb-3"></i>
                <h5 style="color: #333;">Telepon</h5>
                <p class="contact-info">+62 123-456-7890</p>
            </div>
            <div class="contact-card mx-3 text-center p-4" style="background-color: #295C7A; color: white;">
                <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                <h5>Alamat</h5>
                <p class="contact-info">Jl. Pelayanan No.1, Banjarmasin</p>
            </div>
            <div class="contact-card mx-3 text-center p-4">
                <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                <h5 style="color: #333;">Email</h5>
                <p class="contact-info">kemenkumhamkalsel@gmail.com</p>
            </div>
        </div>
    </div>
    {{-- BOTMAN --}}
    <script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>

    <script>
        function triggerBotmanWidget(context) {
            window.botmanChatWidget.sayHi(); // Memulai widget Botman
            setTimeout(() => {
                window.botmanChatWidget.sendMessage(Saya membutuhkan bantuan mengenai ${context}.);
            }, 500); // Kirim pesan konteks ke widget setelah 500ms
        }
    </script>
</section>
<section>
    <div class="container my-5">
        <footer class="text-center text-white" style="background-color: #ffffff;">
          <!-- Grid container -->
          <div class="container p-4">
            <!-- Section: Iframe -->
            <section class="">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                  <div class="ratio ratio-16x9">
                    <iframe
                      class="shadow-1-strong rounded"
                      src="https://www.youtube.com/embed/nYLtbpUq54k"
                      title="YouTube video"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>
              </div>
            </section>
            <!-- Section: Iframe -->
          </div>
        </footer>
      </div>
      
        <!-- Grid container -->
        <!-- Copyright -->
      </footer>
        
      </div>
      <!-- End of .container -->
</section>
@endsection