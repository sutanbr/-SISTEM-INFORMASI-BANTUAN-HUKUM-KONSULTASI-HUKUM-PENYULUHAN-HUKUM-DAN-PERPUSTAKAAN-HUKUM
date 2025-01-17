<div class="wrapper">
    <!-- Include Header -->
    @include('templateadmin.header')

    <!-- Include Sidebar -->
    @include('templateadmin.sidebar')

    <!-- Content Wrapper -->
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-blue text-white">
                    <h3 class="card-title">Daftar Buku</h3>
                    <div class="card-tools">
                        <a href="{{ asset('admin/tambah') }}" class="btn btn-success btn-sm">Tambah Buku</a>
                    </div>
                </div>
                
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>Kategori Buku</th>
                                <th>Kode Identitas</th>
                                <th>Stok</th>
                                <th>EDIT</th>
                                <th>HAPUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bukuList as $buku)
                                <tr>
                                    <td>{{ $buku->kode_buku }}</td>
                                    <td>{{ $buku->judul }}</td>
                                    <td>{{ $buku->jenis_buku }}</td>
                                    <td>{{ $buku->kode }}</td>
                                    <td>{{ $buku->stok }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm edit-btn" data-toggle="modal" data-target="#editModal" data-id="{{ $buku->kode_buku }}" data-judul="{{ $buku->judul }}" data-jenis="{{ $buku->jenis_buku }}" data-stok="{{ $buku->stok }}">Edit</button>
                                        
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#confirmDeleteModal" data-id="{{ $buku->kode_buku }}">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Manual Pagination -->
                    <div class="pagination justify-content-center">
                        @if ($bukuList->currentPage() > 1)
                            <a href="{{ $bukuList->previousPageUrl() }}" class="page-link">&laquo; Previous</a>
                        @endif

                        @for ($i = 1; $i <= $bukuList->lastPage(); $i++)
                            <a href="{{ $bukuList->url($i) }}" class="page-link {{ $i == $bukuList->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                        @endfor

                        @if ($bukuList->hasMorePages())
                            <a href="{{ $bukuList->nextPageUrl() }}" class="page-link">Next &raquo;</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content-wrapper -->

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="editModalLabel">Edit Buku</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Buku</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" required>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded shadow-lg">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus buku ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form id="deleteForm" action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Set form action for edit modal
        $('.edit-btn').on('click', function() {
            const id = $(this).data('id');
            $('#editForm').attr('action', '/buku/' + id);
            $('#judul').val($(this).data('judul'));
            $('#jenis').val($(this).data('jenis'));
            $('#stok').val($(this).data('stok'));
        });

        // Set form action for delete modal
        $('.delete-btn').on('click', function() {
            const id = $(this).data('id');
            $('#deleteForm').attr('action', '/buku/' + id); 
        });
    });
</script>
