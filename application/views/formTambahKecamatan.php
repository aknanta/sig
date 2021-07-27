<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Tambah Kecamatan</h1>
   
</div>

<div class="card" style="width: 70%; margin-bottom: 100px">
	<div class="card-body">

		<form method="POST" action="<?php echo base_url('dataKecamatan/tambahDataAksi') ?>">
			
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control">
			</div>

			<div class="form-group">
				<label>Latitude</label>
				<input type="text" name="latitude" class="form-control">
			</div>

			<div class="form-group">
				<label>Longitude</label>
				<input type="text" name="longitude" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
		
	</div>
</div>

</div>