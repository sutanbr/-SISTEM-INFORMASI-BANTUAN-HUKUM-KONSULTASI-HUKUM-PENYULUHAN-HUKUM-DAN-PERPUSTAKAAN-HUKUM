<div class="wrapper">
    <!-- Include Header -->
    @include('templateadmin.header')

    <!-- Include Sidebar -->
    @include('templateadmin.sidebar')

    <!-- Content Wrapper -->
    <body class="hold-transition sidebar-mini dark-mode">
        <section class="content" style="margin-bottom:100px">
            <div class="container-fluid">
                <div class="card" style="margin-bottom: 100px;">
                    <div class="card-header">
                        <h3 class="card-title">Tambah BUKU</h3>
                        <div class="card-tools">
                            {{-- <a href="{{ asset('admin/tambah') }}" class="btn btn-primary">Tambah Buku</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                            <!-- Form Tambah Buku -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="kode_buku">Kode Buku</label>
                                    <input type="number" name="kode_buku" id="kode_buku" class="form-control" required min="0" step="1">
                                </div>
                                

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_buku">Kategori Buku</label>
                                    <select name="jenis_buku" id="jenis_buku" class="form-control" required>
                                        <option value="" disabled selected>Pilih Kategori Buku</option>
                                        <option value="hukum pidana">Hukum Pidana</option>
                                        <option value="hukum internasional">Hukum Internasional</option>
                                        <option value="pajak">Pajak</option>
                                        <option value="anak">Anak</option>
                                        <option value="islam">Islam</option>
                                        <option value="bisnis">Bisnis</option>
                                        <option value="perbankan">Perbankan</option>
                                        <option value="ekonomi">Ekonomi</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="kode">kode identitas buku</label>
                                    <input type="text" name="kode" id="kode" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" id="stok" class="form-control" required min="0">
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Upload Gambar Buku(tidak boleh lebih dari 2mb)</label>
                                    <input type="file" name="gambar" id="gambar" class="form-control-file" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambah Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Include Footer -->
   
</div>