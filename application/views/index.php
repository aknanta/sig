<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    
    <div class="card">
        <div class="card-body">
            <?= $this->session->flashdata('pesan'); ?>
            <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?= base_url('dataKecamatan/tambahData'); ?>"><i class="fas fa-plus"></i>Tambah Data</a>
            
            <table class="table table-striped table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Action</th>
                </tr>
                <?php $no=1; foreach($marker as $m) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $m->nama ?></td>
                        <td><?= $m->alamat ?></td>
                        <td><?= $m->latitude ?></td>
                        <td><?= $m->longitude ?></td>
                        <td>
				<center>
					<a class="btn btn-sm btn-primary" href="<?php echo base_url ('dataKecamatan/updateData/'.$m->id) ?>"><i class="fas fa-edit"></i></a>
					<a onclick="return confirm('Yakin Ingin Menghapus')" class="btn btn-sm btn-danger" href="<?php echo base_url ('dataKecamatan/deleteData/'.$m->id) ?>"><i class="fas fa-trash"></i></a>
				</center>
			</td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>

                    

</div>
</div>

            
