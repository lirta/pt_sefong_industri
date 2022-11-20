<div class="modal fade" id="add">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Form Add Master Barang</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="{{route('addkon')}}" enctype="multipart/form-data" method="POST">
				@csrf
				<div class="card-body">

				<div class="form-group">
					<label for="kontrak">No Kontrak Pembelian</label>
					<input type="text" class="form-control @error('kontrak') is-invalid @enderror" id="kontrak" name="kontrak" placeholder="Nama" required value="{{old('kontrak')}}">
					@error('kontrak')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
				</div>

				<div class="form-group">
					<label for="tglK">Tanggal Kontrak</label>
					<input type="date" class="form-control @error('tglK') is-invalid @enderror" id="tglK" name="tglK" placeholder="Nama" required value="{{old('tglK')}}">
					@error('tglK')
							<div class="invalid-feedback">
								{{$message}}
							</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="tglP">Tanggal Pembelian</label>
					<input type="date" class="form-control @error('tglP') is-invalid @enderror" id="tglP" name="tglP" placeholder="Nama" required value="{{old('tglP')}}">
					@error('tglP')
							<div class="invalid-feedback">
								{{$message}}
							</div>
					@enderror
				</div>


				<div class="form-group">
					<label for="br">Barang</label>
					<select class="form-control select2 @error('br') is-invalid @enderror" name="br" id="br">
						<option>--Pilih Barang--</option>
						@foreach ($br as $item)
							<option value="{{$item->id}}">{{$item->nama_barang}}</option>
						@endforeach
					</select>
					@error('br')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
				</div>

				<div class="form-group">
					<label for="jml">Jumlah Pembelian</label>
					<input type="text" class="form-control @error('jml') is-invalid @enderror" id="jml" name="jml" placeholder="Jumlah Pembelian" value="{{old('jml')}}" required>
					@error('jml')
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