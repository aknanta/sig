<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Tambah Kecamatan</h1>
   
</div>

<div class="card" style="width: 70%; margin-bottom: 100px">
	<div class="card-body">
    <?php foreach ($marker as $m) : ?>
		<form method="POST" action="<?php echo base_url('dataKecamatan/updateDataAksi') ?>">
			
			<div class="form-group">
				<label>Nama</label>
                <input type="hidden" name="id" class="form-control" value="<?= $m->id ?>">
				<input type="text" name="nama" class="form-control" value="<?= $m->nama ?>">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?= $m->alamat ?>">
			</div>

			<div class="form-group">
				<label>Latitude</label>
				<input type="text" name="latitude" class="form-control" value="<?= $m->latitude ?>">
			</div>

			<div class="form-group">
				<label>Longitude</label>
				<input type="text" name="longitude" class="form-control" value="<?= $m->longitude ?>">
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>
		<?php endforeach; ?>
	</div>
</div>

</div>