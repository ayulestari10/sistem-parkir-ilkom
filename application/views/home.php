<center>
	<h3><strong>Daftar Parkir Kendaraan Mahasiswa</strong></h3>
	<h4><strong>Fakultas Ilmu Komputer Universitas Sriwijaya</strong></h4>	
</center>
<div class="container">
	<div class="row" style="margin-bottom: 5%;">
		
	</div>
	<div class="row">
		<?= form_open('home/data') ?>
			<strong>Angkatan >> </strong>
			<div class="btn-group">
				<a href="<?= base_url('home/data/2011') ?>" class="btn btn-info">2011</a>
				<a href="<?= base_url('home/data/2012') ?>" class="btn btn-info">2012</a>
				<a href="<?= base_url('home/data/2013') ?>" class="btn btn-info">2013</a>
				<a href="<?= base_url('home/data/2014') ?>" class="btn btn-info">2014</a>
				<a href="<?= base_url('home/data/2015') ?>" class="btn btn-info">2015</a>
				<a href="<?= base_url('home/data/2016') ?>" class="btn btn-info">2016</a>
			</div>
			<br/>
			<br/>
			<strong>Jurusan >> </strong>
			<div class="btn-group">
				<a href="<?= base_url('home/data/jurusan/Teknik%20Informatika') ?>" class="btn btn-info">Teknik Informatika</a>
				<a href="<?= base_url('home/data/jurusan/Sistem%20Komputer') ?>" class="btn btn-info">Sistem Komputer</a>
				<a href="<?= base_url('home/data/jurusan/Sistem%20Informasi') ?>" class="btn btn-info">Sistem Informasi</a>
				<a href="<?= base_url('home/data/jurusan/D3') ?>" class="btn btn-info">D3</a>
			</div>
		<?= form_close() ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th style="width: 150px;">Foto</th>
					<th>Nama</th>
					<th>NIM</th>
					<th style="width: 100px;">Jurusan</th>
					<th>Angkatan</th>
					<th style="width: 100px;">No.Pol Kendaraan</th>
					<th>Foto Kendaraan</th>
					<th>Kampus</th>
				</tr>
			</thead>
			<tbody>
				<?php if (isset($dt)): ?>
					<?php foreach ($dt as $row): ?>
						<?php if ($row->keterangan != 'Pengajuan'): ?>
						<tr>
							<td><img src="https://akademik.unsri.ac.id/images/foto_mhs/<?= $row->angkatan ?>/<?= $row->nim ?>.jpg" width="100" height="150" alt="foto"></td>
							<td><?= $row->nama ?></td>
							<td><?= $row->nim ?></td>
							<td><?= $row->jurusan ?></td>
							<td><?= $row->angkatan ?></td>
							<td><?= $row->plat_kendaraan ?></td>
							<td>
								<img src="<?= base_url('kendaraan/'.$row->nim.'.png') ?>" width="150" height="150">
							</td>
							<td><?= $row->lokasi ?></td>
						</tr>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>