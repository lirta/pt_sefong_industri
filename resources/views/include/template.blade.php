<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('judul')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/')}}/dist/css/adminlte.min.css">
  {{-- alert --}}

  <link rel="stylesheet" href="{{asset('assets/')}}/plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="{{asset('assets/')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="{{asset('assets/')}}/plugins/sweetalert2/sweetalert2.min.css">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('include.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('include.side')

  <!-- Content Wrapper. Contains page content -->
  @if (session()->has('BerhasilSimpan'))
	<div class="toastsDefaultSucces">
		{{session('BerhasilSimpan')}}
	</div>
  @endif
  @yield('isi')
  <!-- /.content-wrapper -->

  @include('include.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('assets/')}}/dist/js/demo.js"></script> --}}

<!-- SweetAlert2 -->
<script src="{{asset('assets/')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
	@if($pesan = Session::get('LoginBerhasil'))
	swal({
	  type: 'success',
	  title: 'Login Berhasil',
	  timer: 2500,
	  showConfirmButton: false,
	});
	@elseif($pesan = Session::get('BerhasilSimpan'))
	swal({
	  type: 'success',
	  title: 'Berhasil Simpan Data',
	  timer: 2500,
	  showConfirmButton: false,
	});
	@elseif($pesan = Session::get('BerhasilEdit'))
	swal({
	  type: 'success',
	  title: 'Berhasil Merubah Data',
	  timer: 2500,
	  showConfirmButton: false,
	});
	@elseif($pesan = Session::get('BerhasilHapus'))
	swal({
	  type: 'success',
	  title: 'Berhasil Menghapus Data',
	  timer: 2500,
	  showConfirmButton: false,
	});
	@endif
  </script>
  <script>
	$(document).ready(function() {
	  $('.alertHapus').click(function(e) {
		e.preventDefault();
		var link = $(this).attr('href');
		swal({
			title: 'Anda akan menghapus data ini?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#6ce457',
			cancelButtonColor: '#dc3545',
			cancelButtonText: 'Batal',
			confirmButtonText: 'Ya, hapus data !',
			closeOnConfirm: false,
			closeOnCancel: false
		  },
		  function(isConfirm) {
			if (isConfirm) {
			  window.location = link
			} else {
			  swal("Batal hapus", "Data belum terhapus", "error");
			}
		  });
	  });
	});
  </script>
@yield('js')
</body>
</html>
