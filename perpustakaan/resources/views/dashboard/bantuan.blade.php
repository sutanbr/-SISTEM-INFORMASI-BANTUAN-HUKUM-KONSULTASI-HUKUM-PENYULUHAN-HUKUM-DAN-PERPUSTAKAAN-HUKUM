@extends('layout.header')
@section('konten')
<div class="containers">
    <!-- Add the 'Kembali' Button -->
    <a href={{asset('home')}} class="btn btn-primary" style="margin: 40px 30px 0px 64px; background-color: #5c6bc0; border: none; padding: 8px 20px; border-radius: 30px; color: white; font-size: 0.9rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; display: inline-block; text-align: center;">
        Kembali
    </a>
<section style="margin: 100px 0; font-family: 'Montserrat', sans-serif;">
    <h2 style="text-align: center; color: #2b66ac; font-size: 2rem; font-weight: 600; margin-bottom: 40px;">BANTUAN</h2>

    <div class="accordion" id="accordionExample" style="max-width: 800px; margin: 0 auto;">
        <!-- First Question -->
        <div class="accordion-item" style="border-radius: 10px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #fff;">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: #5c6bc0; color: white; border: none; font-weight: bold; font-size: 1.1rem; border-radius: 10px; padding: 12px 20px;">
                    Bagaimana cara login?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color: #f8f8f8; padding: 20px; border-radius: 0 0 10px 10px;">
                    <ul style="line-height: 1.8;">
                        <li>Masuk ke halaman login</li>
                        <li>Isi Username dan Password</li>
                        <li>Jika belum punya akun, silakan klik daftar</li>
                        <li>Isi nama, alamat, tanggal lahir, dan password</li>
                        <li>Jika sudah, klik daftar dan akan diarahkan ke halaman login kembali</li>
                        <li>Isi nama dan password sesuai dengan akun yang didaftarkan</li>
                    </ul>
                </div>
            </div>
        </div>
        

        <!-- Second Question -->
        <div class="accordion-item" style="border-radius: 10px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #fff;">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #5c6bc0; color: white; border: none; font-weight: bold; font-size: 1.1rem; border-radius: 10px; padding: 12px 20px;">
                    Bagaimana cara meminjam buku?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color: #f8f8f8; padding: 20px; border-radius: 0 0 10px 10px;">
                    <ul style="line-height: 1.8;">
                        <li>Pastikan anda telah Login terlebih dahulu</li>
                        <li>Kemudian masuk ke halaman Koleksi</li>
                        <li>Pilih Kategori buku yang ingin anda cari</li>
                        <li>Cari buku yang ingin anda pinjam, klik buku</li>
                        <li>Jika stok buku ada, klik pinjam</li>
                        <li>Konfirmasi peminjaman</li>
                        <li>Tunjukkan barcode pada pengawas perpustakaan</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Third Question -->
        <div class="accordion-item" style="border-radius: 10px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #fff;">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: #5c6bc0; color: white; border: none; font-weight: bold; font-size: 1.1rem; border-radius: 10px; padding: 12px 20px;">
                    Bagaimana cara mengembalikan buku?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color: #f8f8f8; padding: 20px; border-radius: 0 0 10px 10px;">
                    <ul style="line-height: 1.8;">
                        <li>Pastikan anda telah login terlebih dahulu</li>
                        <li>Masuk ke halaman Pengembalian Buku</li>
                        <li>Pilih buku yang ingin anda kembalikan</li>
                        <li>Klik "Kembalikan" dan konfirmasi pengembalian</li>
                        <li>Tunjukkan bukti pengembalian kepada pengawas perpustakaan</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item" style="border-radius: 10px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #fff;">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: #5c6bc0; color: white; border: none; font-weight: bold; font-size: 1.1rem; border-radius: 10px; padding: 12px 20px;">
                    Bagaimana jika saya lupa password saya?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color: #f8f8f8; padding: 20px; border-radius: 0 0 10px 10px;">
                    <ul style="line-height: 1.8;">
                        <li>Saat anda berada di halaman home, klik login</li>
                        <li>setelah masuk halaman login, anda dapat melihat forgot password? click here</li>
                        <li>Pilih click here untuk mengganti password anda</li>
                        <li>masukkan email yang hendak diganti password</li>
                        <li>masukkan password baru dan konfirmasi password baru</li>
                        <li>jika sudah benar, silahkan klik reset password</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item" style="border-radius: 10px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #fff;">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive" style="background-color: #5c6bc0; color: white; border: none; font-weight: bold; font-size: 1.1rem; border-radius: 10px; padding: 12px 20px;">
                    Bagaimana jika saya lupa email dan password saya?
                </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-color: #f8f8f8; padding: 20px; border-radius: 0 0 10px 10px;">
                    <ul style="line-height: 1.8;">
                        <li>jika anda lupa email dan password login anda silahkan melapor ke admin perpus yang berletak di kemenkumham kalsel</li>
                        <li>Atau anda dapat menghubungi nomor disamping 08123456789</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection