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
			<form action="{{route('addBr')}}" enctype="multipart/form-data" method="POST">
				@csrf
				<div class="card-body">

				<div class="form-group">
					<label for="br">Nama Barang</label>
					<input type="text" class="form-control @error('br') is-invalid @enderror" id="br" name="br" placeholder="Nama" required value="{{old('br')}}">
					@error('br')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
				</div>
				<div class="form-group">
					<label for="hr">Harga Satuan</label>
					<input type="text" class="form-control @error('hr') is-invalid @enderror" id="hr" name="hr" placeholder="Nama" value="{{old('hr')}}" required>
					@error('hr')
					<div class="invalid-feedback">
						{{$message}}
					</div>
				@enderror

				<div class="form-group">
					<label for="st">Satuan</label>
					<select class="form-control select2 @error('st') is-invalid @enderror" name="st" id="st">
						<option value="KG">KG</option>
						<option value="Satuan">Satuan</option>
					</select>
					@error('st')
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