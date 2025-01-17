<!-- Include Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<div class="wrapper">
    <!-- Include Header -->
    @include('templateadmin.header')

    <!-- Include Sidebar -->
    @include('templateadmin.sidebar')

    <!-- Content Wrapper -->
    <body class="hold-transition sidebar-mini dark-mode">
        <section class="content">
            <div class="container-fluid">
                <div class="card shadow-lg rounded">
                    <div class="card-header">
                        <h3 class="card-title" style="font-family: 'Poppins', sans-serif;">Daftar Pengunjung</h3>
                        <div class="card-tools">
                            <!-- Button to trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tambahPengunjungModal">
                                <i class="fas fa-user-plus"></i> Tambah Pengunjung
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered" style="font-family: 'Poppins', sans-serif;">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Asal Daerah</th>
                                    <th>Tanggal Kunjungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengunjungs as $pengunjung)
                                    <tr>
                                        <td>{{ $pengunjung->nama }}</td>
                                        <td>{{ $pengunjung->asal_daerah }}</td>
                                        <td>{{ $pengunjung->tanggal_kunjungan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Manual Pagination -->
                        <div class="pagination justify-content-center">
                            <!-- Previous Page -->
                            @if ($pengunjungs->currentPage() > 1)
                                <a href="{{ $pengunjungs->previousPageUrl() }}" class="page-link">&laquo; Previous</a>
                            @endif

                            <!-- Page Numbers -->
                            @for ($i = 1; $i <= $pengunjungs->lastPage(); $i++)
                                <a href="{{ $pengunjungs->url($i) }}" class="page-link {{ $i == $pengunjungs->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                            @endfor

                            <!-- Next Page -->
                            @if ($pengunjungs->hasMorePages())
                                <a href="{{ $pengunjungs->nextPageUrl() }}" class="page-link">Next &raquo;</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Tambah Pengunjung -->
            <div class="modal fade" id="tambahPengunjungModal" tabindex="-1" role="dialog" aria-labelledby="tambahPengunjungModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahPengunjungModalLabel" style="font-family: 'Poppins', sans-serif;">Tambah Pengunjung</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('storePengunjung') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" placeholder="Nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="asal_daerah">Asal Daerah</label>
                                    <input type="text" name="asal_daerah" id="asal_daerah" placeholder="Asal Daerah" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Tambah Pengunjung</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</div>

<!-- CSS for Pagination and Button Styling -->
<style>
    /* Pagination Styling */
    .pagination .page-link {
        border-radius: 50px;
        padding: 10px 15px;
        margin: 0 5px;
        background-color: #f1f1f1;
        color: #333;
        transition: background-color 0.3s;
    }

    .pagination .page-link:hover {
        background-color: #007bff;
        color: white;
    }

    .pagination .page-link.active {
        background-color: #007bff;
        color: white;
    }

    /* Modal Styling */
    .modal-content {
   
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
        background-color: #007bff;
        color: white;
        border-radius: 8px 8px 0 0;
    }

    .btn-primary {
        border-radius: 50px;
    }

    .card {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f1f1f1;

    }

    .card-title {
        font-family: 'Poppins', sans-serif;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<script>
    // Optional JavaScript for form validation and other dynamic behaviors
    function submitForm() {
        const nama = document.getElementById('nama').value;
        const asal_daerah = document.getElementById('asal_daerah').value;

        if (nama && asal_daerah) {
            // Process form submission via AJAX or standard POST
            alert('Pengunjung berhasil ditambahkan!');
            $('#tambahPengunjungModal').modal('hide');
        } else {
            alert('Mohon isi semua kolom.');
        }
    }
</script>

