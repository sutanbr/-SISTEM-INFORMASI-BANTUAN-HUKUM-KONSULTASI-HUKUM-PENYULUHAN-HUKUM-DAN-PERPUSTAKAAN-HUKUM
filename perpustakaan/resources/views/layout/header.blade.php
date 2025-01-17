
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS stylesheets like Bootstrap, FontAwesome, etc. -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/kumham.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        
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
/* Atur gambar */
.book-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
    gap: 10px;
    padding: 50px;
}
/* .profile-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
    gap: 10px; 
    padding: 50px;
} */
        .jam-container {
            display: flex;
            justify-content: space-around;
            padding: 100px;
        }

     
        .book-item {
            background-color: #d1dce5;
            padding: 30px;
            border-radius: 10px;
            width: 200px;
            text-align: center;
            margin: 0;
        }
            /* .profile-item {
                background-color: #d1dce5;
                padding: 30px;
                border-radius: 10px;
                width: 200px;
                text-align: center;
                margin: 0;
            } */
        .jam-item {
            background-color: #d1dce5; 
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: left;
        }
        
        .book-item img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    transition: transform 0.3s ease;
}
/* .profile-item img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    transition: transform 0.3s ease; 
} */



.book-item img:hover {
    transform: scale(1.1); 
}
/* .profile-item img:hover {
    transform: scale(1.1);
} */

      
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


@keyframes fall {
    0% {
        transform: translateY(-100%);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.falling-card {
    animation: fall 1s ease-in-out forwards; 
}
.nav-item.active .nav-link {
    color: blue; 
    text-decoration: underline; 
}
.modal {
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 300px; 
    text-align: center;
}

button {
    margin: 5px;
}
.containerpr {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
}

.cardpr {
    width: 200px;
    height: 300px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    font-family: sans-serif;
    background-size: cover;
    background-position: center;
    position: relative; 
    cursor: pointer; 
    transition: transform 0.8s ease; 
}
.bio {
    position: absolute; 
    bottom: 10px; 
    left: 10px; 
    color: rgba(0, 0, 0, 0.7); 
    padding: 5px; 
    border-radius: 5px; 
    text-align: center;
    z-index: 10;
    opacity: 0;
    transition: opacity 0.8s ease; 
    visibility: hidden; 
}

.bio.visible {
    opacity: 1; 
    visibility: visible; 
}


.bio-title {
    font-weight: bold;
    margin: 0;
    font-size: 1.1em;
    color: rgba(0, 0, 0, 1); 
}

/* Tampilkan informasi bio */
.bio span {
    font-weight: bold; 
    display: block;
    margin-top: 170px;
    font-size: 0.9em; 
    color: white;
}




.cardpr:hover .bio {
    display: block; 
}

.cardpr:hover {
  filter: grayscale(100%);
  transform: scale(1.05);
}
.tooltip {
        position: absolute;
        display: none;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px;
        border-radius: 5px;
        z-index: 10;
        opacity: 1; 
        transition: opacity 0.7s ease; 
    }

    .tooltip.show {
        display: block;
        opacity: 1; 
    }

.data-cardpr {
    display: none; 
    width: 300px;
    height: 300px;
    margin-left: 10px; 
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: white;
    padding: 20px;
    transition: transform 0.5s ease; 
    position: absolute; 
    left: 220px; 
    transform: translateX(100%); 
}

.data-cardpr.show {
    display: block; 
    transform: translateX(0); 
} */

/* INI BAGIAN BANTUAN*/
.faq-container {
    width: 50%;
    margin: 20px auto;
    padding: 15px;
    border: 10px solid;
    border-radius: 8px;
    background-color: #c05858;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    padding: 10px 0;
}

.faq-question h3 {
    margin: 0;
    font-size: 18px;
    color: #0056b3;
    margin-left: 100px;
}

.faq-arrow {
    transition: transform 0.3s ease;
    color: black;
}

.faq-arrow.rotate {
    transform: rotate(180deg);
}

.faq-answer {
    display: none;
    transition-delay: 2s;
    margin-top: 10px;
    margin-left: 100px;
}

.faq-answer p {
    font-size: 16px;
    color: #333;
}
/* style untuk file koleksi */
#filterButtons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .filter-btn {
            padding: 10px 20px;
            border: none;
            margin: 5px;
            cursor: pointer;
            border-radius: 20px;
            font-size: 16px;
            background-color: #f2f2f2;
            transition: background-color 0.8s;
        }

        .filter-btn.active {
            background-color: #007bff;
            color: white;
        }

        .filter-btn:hover {
            background-color: #007bff;
            color: white;
        }

        .gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* jarak antar item */
    justify-content: center; /* untuk mengatur item di tengah */
}

.gallery-item {
    text-align: center; /* agar teks berada di tengah di bawah gambar */
    width: 220px; /* pastikan lebar item gallery lebih besar dari gambar */
}


.gallery img {
    width: 200px; /* Sesuaikan ukuran ini sesuai kebutuhan */
    height: 200px; /* Tentukan tinggi untuk konsistensi */
    object-fit: contain; /* Gambar tidak akan terpotong dan akan mempertahankan rasio aspek */
    border-radius: 5px; /* Jika ingin sudut yang lebih halus */
    background-color: white; /* Warna latar belakang jika gambar lebih kecil dari area */
}




        .gallery-item p {
            font-size: 14px;
            margin-top: 5px;
        }
        /* keranjang stylish */
        .keranjang-container {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .keranjang-container img {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }
        .keranjang-info {
            display: flex;
            align-items: center;
        }
        .keranjang-title {
            margin-left: 15px;
        }
        .stock-info {
            display: flex;
            align-items: center;
        }
        .stock-info span {
            margin: 0 10px;
        }
        .stock-info button {
            background: none;
            border: 1px solid #000;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .borrow-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .modal-backdrop {
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1040;
}

.modal {
    z-index: 1050;
}

        .s-modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0;
}

.s-modal-dialog {
    width: 80%;
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.s-modal-content {
    padding: 20px;
}

.s-modal-header {
    padding: 20px;
    border-bottom: 1px solid #ddd;
}

.s-modal-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.s-close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
}

.s-modal-body {
    padding: 1px;
}

.s-modal-body img {
    width: 100%;
    height: auto;
}

.pagination .page-item.disabled {
    display: none;
}
        
    </style>
</head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <div style="display: flex; align-items: center;">
            <img class="perpu" src={{ asset('images/logo-buku.png') }} style="width: 100px; height: auto; margin-right: 10px;">
            <span style="font-family: 'Poppins'; font-size: 18px; color: #ffffff; font-weight: bold;">PERPUSTAKAAN HUKUM</span>
        </div>
        <span class="kumham" style="color: #ffa500;"></span>
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}" style="display: flex; align-items: center;">
                    <i class="fas fa-home" style="margin-right: 8px;"></i> Home
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
@yield('konten')

<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://davidshimjs.github.io/qrcodejs/qrcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- javascript untuk file profile --}}
<script>
const cards = document.querySelectorAll('.cardpr');

cards.forEach(card => {
    const bio = card.querySelector('.bio');
    const bioContent = card.querySelector('span');

    card.addEventListener('mouseenter', () => {
        bioContent.textContent = bioContent.getAttribute('data-bio'); 
        bio.classList.add('visible');
    });

    card.addEventListener('mouseleave', () => {
        bio.classList.remove('visible'); 
        setTimeout(() => {
            if (!bio.classList.contains('visible')) {
                bio.style.visibility = 'hidden'; 
            }
        }, 1000);
    });
});

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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    document.querySelectorAll('.faq-question').forEach(function (question) {
        question.addEventListener('click', function () {
         
            var answer = this.nextElementSibling;
            var arrow = this.querySelector('.faq-arrow');
            
       
            if (answer.style.display === "none" || answer.style.display === "") {
                answer.style.display = "block";
                arrow.classList.add('rotate');
            } else {
                answer.style.display = "none";
                arrow.classList.remove('rotate');
            }
        });
    });
</script> --}}

{{-- javascript untuk file KOLEKSI --}}
<script>
    function filterGallery(category) {
        var items = document.getElementsByClassName('gallery-item');
        var searchInput = document.getElementById('searchInput').value.toLowerCase(); // Get search input
        for (var i = 0; i < items.length; i++) {
            items[i].style.display = 'none';
        }
        for (var i = 0; i < items.length; i++) {
            var itemText = items[i].innerText.toLowerCase();
            if ((items[i].classList.contains(category) || category === 'semua') && itemText.includes(searchInput)) {
                items[i].style.display = 'block';
            }
        }
    }
    document.getElementById('filterSelect').addEventListener('change', function() {
        var selectedCategory = this.value; 
        filterGallery(selectedCategory);
    });

    document.getElementById('searchInput').addEventListener('input', function() {
        var selectedCategory = document.getElementById('filterSelect').value; 
        filterGallery(selectedCategory); 
    });
    window.onload = function() {
        var selectElement = document.getElementById('filterSelect');
        filterGallery('semua'); 
    }
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

