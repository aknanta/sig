<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sistem Informasi Geografis</h1>
    </div>
<div id="map" style="height: 700px"></div>

<script>

var map = L.map('map').setView([-7.575459535925393, 110.82284600750245], 16);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
	}).addTo(map);

<?php foreach($marker as $m) :?>
var marker = L.marker([<?= $m->latitude ?>, <?= $m->longitude ?>]).addTo(map)
		.bindPopup("Nama: <b><?= $m->nama ?></b> <br> Alamat: <?= $m->alamat ?>").openPopup();
		<?php endforeach; ?>
</script>