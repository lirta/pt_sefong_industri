<div class="modal fade" id="add">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Form Add Data Pembelian</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="{{route('addP')}}" enctype="multipart/form-data" method="POST">
				@csrf
				<div class="card-body">

				<div class="form-group">
					<label for="noK">No Kontrak Pembelian</label>
					<select class="form-control select2 @error('noK') is-invalid @enderror" name="noK" id="noK">
						<option>--Pilih No Kontrak Pembelian--</option>
						@foreach ($kon as $item)
							<option value="{{$item->no_kontrak_pembelian}}">{{$item->no_kontrak_pembelian}}</option>
						@endforeach
					</select>
					@error('noK')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
				</div>

				<div class="form-group">
					<label for="noN">No Nota Pembelian</label>
					<input type="text" class="form-control @error('noN') is-invalid @enderror" id="noN" name="noN" placeholder="Nama" required value="{{old('noN')}}">
					@error('noN')
							<div class="invalid-feedback">
								{{$message}}
							</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="tnp">Tanggal Nota Pembelian</label>
					<input type="date" class="form-control @error('tnp') is-invalid @enderror" id="tnp" name="tnp" placeholder="Nama" required value="{{old('tnp')}}">
					@error('tnp')
							<div class="invalid-feedback">
								{{$message}}
							</div>
					@enderror
				</div>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	  </div>
	  <!-- /.modal-content -->
	</div>
</div>