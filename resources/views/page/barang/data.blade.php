@extends('include.template')
@section('judul','Data Barang')

@section('isi')
@include('sweetalert::alert')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data</h3>

		  @if (count($errors) > 0)
		  <div class="alert alert-danger">
			  <h4>Data Tidak Sesuai</h4>
			  <ul>
				  @foreach ($errors->all() as $error)
					  <li>{{ $error }}</li>
				  @endforeach
			  </ul>
		  </div>
	  @endif
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
			<div class="card">
				<div class="card-header">
						
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
						Add
					</button>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
				  <table id="example1" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th width="10px">No</th>
					  <th>Nama Barang</th>
					  <th>Harga Satuan</th>
					  <th>Stok Barang</th>
					  <th>Satuan</th>
					  {{-- <th>Acion</th> --}}
					</tr>
					</thead>
					<tbody>
						@foreach ($br as $i => $item)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$item->nama_barang}}</td>
								<td>{{currency_IR($item->harga_satuan)}}</td>
								<td>{{$item->jumlah_stok}}</td>
								<td>{{$item->satuan}}</td>
							</tr>
						@endforeach
					</tbody>
				  </table>
				</div>
				<!-- /.card-body -->
			</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
	  @include('page.barang.add')
    </section>
    <!-- /.content -->
  </div>
  @section('js')
<script src="{{asset('assets/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets/')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('assets/')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('assets/')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{asset('assets/')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
	$(function () {
	  $("#example1").DataTable({
		"responsive": true, "lengthChange": false, "autoWidth": false,
		"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
	  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	  $('#example1').DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
	  });
	});
	$(function () {
	bsCustomFileInput.init();
	});
  </script>
@stop
@stop