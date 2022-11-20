<div class="modal fade" id="add">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Form Add Data Penjualan</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="{{route('addPj')}}" enctype="multipart/form-data" method="POST">
				@csrf
				<div class="card-body">

				

					<div class="form-group">
						<label for="nPes">No Pesanan</label>
						<input type="text" class="form-control @error('nPes') is-invalid @enderror" id="nPes" name="nPes" placeholder="No Penjualan" value="{{old('nPes')}}">
						@error('nPes')
								<div class="invalid-feedback">
									{{$message}}
								</div>
						@enderror
					</div>

				<div class="form-group">
					<label for="noN">No Nota Penjualan</label>
					<input type="text" class="form-control @error('noN') is-invalid @enderror" id="noN" name="noN" placeholder="No Nota Penjualan"  value="{{old('noN')}}">
					@error('noN')
							<div class="invalid-feedback">
								{{$message}}
							</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="tnp">Tanggal Nota Penjualan</label>
					<input type="date" class="form-control @error('tnp') is-invalid @enderror" id="tnp" name="tnp" required value="{{old('tnp')}}">
					@error('tnp')
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
					<label for="hj">Harga Jual</label>
					<input type="text" class="form-control @error('hj') is-invalid @enderror" id="hj" name="hj" placeholder="Harga Jual" required value="{{old('hj')}}">
					@error('hj')
							<div class="invalid-feedback">
								{{$message}}
							</div>
					@enderror
				</div>

				<div class="form-group">
					<label for="jml">Jumlah Penjualan</label>
					<input type="text" class="form-control @error('jml') is-invalid @enderror" id="jml" name="jml" placeholder="Jumlah Penjualan" required value="{{old('jml')}}">
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