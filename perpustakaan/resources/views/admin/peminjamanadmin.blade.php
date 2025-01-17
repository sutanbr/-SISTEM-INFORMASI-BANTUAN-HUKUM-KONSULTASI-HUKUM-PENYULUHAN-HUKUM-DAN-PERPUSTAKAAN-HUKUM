<div class="wrapper">
    <!-- Include Header -->
    @include('templateadmin.header')

    <!-- Include Sidebar -->
    @include('templateadmin.sidebar')

    <!-- Content Wrapper -->
    <body class="hold-transition sidebar-mini dark-mode">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="margin-right: 10px;">DAFTAR BUKU</h3>
                        <form action="{{ route('admin.peminjaman') }}" method="GET" class="form-inline">
                            <!-- Input Search -->
                            <div class="input-group input-group-sm">
                                <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                           
                            <div class="ml-2">
                                <select name="order" class="form-control" onchange="this.form.submit()">
                                    <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Terlama</option>
                                    <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Paling Baru</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                                            @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Judul Buku</th>
                                <th>Kategori</th>
                                <th>kode identitas</th>
                                <th>Tanggal Pinjam</th>
                                <th>Status Pinjam</th>
                                <th>Kode Barcode</th>
                                <th>EDIT</th>
                                <th>HAPUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $item)
    <tr>
        <td>{{ $loop ->iteration }}</td>
        <td>{{ $item->user->name }}</td>
        <td>{{ $item->user->email }}</td>
        <td>{{ $item->buku->judul }}</td>
        <td>{{ $item->buku->jenis_buku }}</td>
        <td>{{ $item->buku->kode }}</td>
        <td>{{ $item->tanggal_pinjam }}</td>
        <td>{{ $item->status_pinjam }}</td>
        <td>{{ $item->kode_buku }}</td>
    
        <td>
            <a href="#" data-toggle="modal" data-target="#barcodeModal{{ $item->id_peminjaman }}">
                <button class="btn btn-warning edit-btn" data-toggle="modal" data-target="#editModal" 
                    data-id="{{ $item->id_peminjaman }}" 
                    data-kode_buku="{{ $item->kode_buku }}" 
                    data-tanggal_pinjam="{{ $item->tanggal_pinjam }}" 
                    data-kode_barcode="{{ $item->buku->kode_buku }}" 
                    data-status_pinjam="{{ $item->status_pinjam }}">
                Edit
            </button>
        </td>
            </a>
        </td>
        <td>
            <button class="btn btn-danger delete-btn" data-toggle="modal" data-target="#confirmDeleteModal" 
                    data-id="{{ $item->id_peminjaman }}">
                Hapus
            </button>
        </td>
            
        
    </tr>
@endforeach
                        </tbody>
                    </table>
                     <!-- Manual Pagination -->
                     <div class="pagination">
                        <!-- Previous Page -->
                        @if ($peminjaman->currentPage() > 1)
                            <a href="{{ $peminjaman->previousPageUrl() }}">&laquo; Previous</a>
                        @endif

                        <!-- Page Numbers -->
                        @for ($i = 1; $i <= $peminjaman->lastPage(); $i++)
                            <a href="{{ $peminjaman->url($i) }}" class="{{ $i == $peminjaman->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                        @endfor

                        <!-- Next Page -->
                        @if ($peminjaman->hasMorePages())
                            <a href="{{ $peminjaman->nextPageUrl() }}">Next &raquo;</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
                    
                            
                            <!-- Modal Konfirmasi Hapus -->
                            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content" style="background-color: #fff;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus Peminjaman ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <form id="deleteForm" action="" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Peminjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" method="POST" action="">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" class="form-control" id="kode_buku" name="kode_buku" required readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="datetime-local" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ $item->tanggal_pinjam }}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="kode_barcode">Kode Barcode</label>
                        <input type="text" class="form-control" id="kode_barcode" name="kode_barcode" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="status_pinjam">Status Pinjam</label>
                        <select class="form-control" id="status_pinjam" name="status_pinjam" required>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Returned">Returned</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus peminjaman ini?
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

<script>
    $(document).ready(function() {
        // Atur action pada form edit
        $('.edit-btn').on('click', function() {
            const id = $(this).data('id');
            $('#editForm').attr('action', '/peminjaman/' + id);
            $('#kode_buku').val($(this).data('kode_buku'));
            $('#tanggal_pinjam').val($(this).data('tanggal_pinjam'));
            $('#kode_barcode').val($(this).data('kode_barcode'));
            $('#status_pinjam').val($(this).data('status_pinjam'));
        });

        // Atur action pada form hapus di dalam modal konfirmasi
        $('.delete-btn').on('click', function() {
            const id = $(this).data('id');
            $('#deleteForm').attr('action', '/peminjaman/' + id); // sesuaikan dengan route Anda
        });
    });
</script>

