<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN | </title>

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- AdminLTE Dark Mode CSS -->
<link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte-dark-mode.css') }}">
<link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.css')}}">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>




 <style>
   body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.content-wrapper {
    flex: 1;
}

.main-footer {
    position: relative;
    bottom: 0;
    width: 80%;
    background-color: #C8C8C8; /* Or your desired footer color */
}


.custom-card {
    max-width: 600px; /* Atur lebar maksimum sesuai kebutuhan */
    margin: 20px auto; /* Center card dan beri jarak atas dan bawah */
    padding: 20px; /* Tambahkan padding untuk isi card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek visual */
    background-color: white; /* Tambahkan warna latar belakang putih */
}

/* Styling pagination */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination a {
    padding: 8px 16px;
    margin: 0 5px;
    background-color: #f1f1f1;
    text-decoration: none;
    color: #007bff;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.pagination a:hover {
    background-color: #ddd;
}

.pagination a.active {
    background-color: #007bff;
    color: white;
}

.pagination a:disabled {
    color: gray;
}


</style>
        </style>
        <script src="https://cdn.lordicon.com/lordicon.js"></script>
  </head>

  @yield('header1')

  

  <script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>

  {{-- <div class="card-footer">
    by kelompok 6
  </div>
</div>
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>CUAN</b> 
</div>
<strong>DELIVERY whatsapp 0899999999  <a href="googlemaps.com">      jl.KAYU TANGI.no.66</a>.</strong> TOKO OFFLINE BUKA DARI JAM 08:00-17:00.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables & Plugins -->
<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>

<!-- Page specific script -->
<script>
$(function () {
$("#example1").DataTable({
"responsive": true, "lengthChange": false, "autoWidth": false,
"buttons": [""]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false,
"responsive": true,
});
});
</script>
</body>
</html>   --}}
