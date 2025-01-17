<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 20px;
        }
        input[type="text"] {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            width: 250px;
            margin-right: 10px;
            font-size: 14px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        table th {
            background-color: #f8f9fa;
            color: #333;
            padding: 12px;
            font-size: 14px;
        }
        table td {
            padding: 12px;
            font-size: 14px;
            text-align: center;
        }
        .btn-sm {
            font-size: 12px;
            padding: 5px 10px;
        }
        .btn-warning {
            background-color: #ff9800;
            border-color: #ff9800;
        }
        .btn-warning:hover {
            background-color: #e68900;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .modal-content {
            border-radius: 8px;
        }
        .modal-header, .modal-footer {
            background-color: #f8f9fa;
        }
        .modal-title {
            color: #333;
        }
        .modal-body input {
            border-radius: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            width: 100%;
        }
        .modal-footer .btn-secondary {
            background-color: #6c757d;
        }
        .modal-footer .btn-secondary:hover {
            background-color: #5a6268;
        }
        .modal-footer .btn-primary {
            background-color: #007bff;
        }
        .modal-footer .btn-primary:hover {
            background-color: #0056b3;
        }
        #deleteConfirmPopup .modal-content {
            background-color: #f8f9fa;
        }
        #deleteConfirmPopup .modal-header {
            background-color: #e9ecef;
        }
        .modal-body .form-group input {
    width: 100%; /* Membuat inputan memanjang ke kanan */
    padding: 10px; /* Memberikan padding untuk kenyamanan input */
    border-radius: 5px; /* Menjaga border-radius */
    border: 1px solid #ddd; /* Menjaga border */
}

    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Data User</h1>

        <!-- Form Pencarian -->
        <form action="{{ route('admin.superadmin') }}" method="GET">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari ...">
            <button type="submit">Cari</button>
        </form>
        <a href="{{asset('home')}}" class="nav-link">
            <button class="btn btn-danger">Home</button>
        </a>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Tabel Data -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role ID</th>
                    <th>NIK</th>
                    <th>PASSWORD</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_id }}</td>
                        <td>{{ $user->nik }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn" data-id="{{ $user->id }}">Edit</button>
                        </td>
                        <td>
                            <form action="{{ route('admin.destroys', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm delete-btn">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Tidak ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $users->links() }}
    </div>

    <!-- Modal untuk Edit -->
    <!-- Modal untuk Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" method="POST" action="">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" name="id" id="userId">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="role_id">Role ID</label>
                        <input type="number" class="form-control" name="role_id" id="role_id" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" name="nik" id="nik" readonly>
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                        <p>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    
                </div> --}}
            </form>
        </div>
    </div>
</div>

    <!-- Modal Pop-up Konfirmasi Hapus -->
    <div id="deleteConfirmPopup" class="modal" tabindex="-1" role="dialog" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Iya, Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan JS Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Event listener untuk tombol edit
            $('.edit-btn').on('click', function () {
                const id = $(this).data('id');
                $.get(`/admin/edit/${id}`, function (data) {
                    $('#userId').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#role_id').val(data.role_id);
                    $('#nik').val(data.nik);
                    $('#password').val('');
                    $('#editForm').attr('action', `/admin/updates/${id}`);
                    $('#editModal').modal('show');
                });
            });
        });

        let deleteUrl = '';  // Menyimpan URL untuk penghapusan
    
        // Saat tombol Hapus diklik
        $('.delete-btn').on('click', function (event) {
            event.preventDefault(); // Mencegah penghapusan langsung
            deleteUrl = $(this).closest('form').attr('action'); // Ambil action dari form Hapus
            $('#deleteConfirmPopup').modal('show'); // Tampilkan modal konfirmasi
        });
    
        // Saat tombol "Iya, Hapus" diklik
        $('#confirmDeleteBtn').on('click', function () {
            // Kirim permintaan penghapusan menggunakan AJAX
            $.ajax({
                url: deleteUrl,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}', // Pastikan CSRF token sudah ada
                },
                success: function(response) {
                    // Setelah penghapusan berhasil, tutup modal dan refresh halaman
                    $('#deleteConfirmPopup').modal('hide');
                    window.location.href = '{{ route('admin.superadmin') }}'; // Redirect ke halaman yang sesuai
                },
                error: function(error) {
                    alert('Terjadi kesalahan, coba lagi!');
                    $('#deleteConfirmPopup').modal('hide');
                }
            });
        });
    </script>
</body>
</html>
