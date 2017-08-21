<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div style="margin-bottom: 5%;">
				<h1><strong>List Mahasiswa</strong></h1>
			</div>

			<div style="margin-top: 10px; margin-bottom: 10px;">
				<a href="<?= base_url('Admin') ?>"> <strong><< Kembali</strong></a>
				<!-- <div class="pull-right">
				<div>
					<form action="<?= base_url('Admin/cari') ?>" method="POST">
					<div>
						<input type="text" name="cari" />
						<button type="submit" class="btn-info glyphicon glyphicon-search">
					</form>
				</div></div> -->
			</div>

			<div style="font-size: 0.8em;">
				<table class="table table-bordered">
					<tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Angkatan</th>
						<th>Lokasi</th>
						<th>Tanggal Daftar</th>
						<th>No. Pol</th>
						<th>Merk Kendaraan</th>
						<th>Kode Stiker</th>
						<th>Keterangan</th>
						<th colspan="2">Aksi</th>
						
					</tr>
					<?php $i = 0; ?>
					<?php foreach($dt as $row): ?>
						<tr>
							<td><?= ++$i ?></td>
							<td><?= $row->nim ?></td>
							<td><?= $row->nama ?></td>
							<td><?= $row->jurusan ?></td>
							<td><?= $row->angkatan ?></td>
							<td><?= $row->lokasi ?></td>
							<td><?= $row->tgl_daftar ?></td>
							<td><?= $row->plat_kendaraan ?></td>
							<td><?= $row->tipe ?></td>
							<td><?= $row->kode_stiker ?></td>
							<td><?php
							if ($row->keterangan == 'Aktif'): ?>
								<a class="btn btn-success btn-mini btn-sm" href="<?= base_url('admin/verifikasi/'.$row->id_mhs) ?>"><i class="glyphicon glyphicon-check"></i> Terverifikasi</a>
							<?php else: ?> 
									<a class="btn btn-warning btn-mini btn-sm" href="<?= base_url('admin/verifikasi/'.$row->id_mhs) ?>"><i class="glyphicon glyphicon-remove"></i> Tidak Terverifikasi</a>
								<?php endif; ?></td>
							<td>
								<a href="<?= base_url('Admin/edit_mhs/'.$row->id_mhs) ?>"><button class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i> Edit</button></a>
							</td>
							<td>
								<?= form_open('Admin/delete_mhs/'.$row->id_mhs, array('id' => 'HAPUS')) ?>
								<!-- <a href="<?= base_url('Admin/delete_mhs/'.$row->id_mhs) ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button></a> -->
								<button onclick="hapus(); return false;" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
								<?= form_close() ?>
							</td>
							<!-- <td>
								<?php if ($row->status == 'not verified'): ?>
									<a class="btn btn-warning" href="<?= base_url('admin/verifikasi/'.$row->id_mhs) ?>"><i class="glyphicon glyphicon-remove"></i> Tidak Terverifikasi</a>
								<?php else: ?>
									<a class="btn btn-success" href="<?= base_url('admin/verifikasi/'.$row->id_mhs) ?>"><i class="glyphicon glyphicon-ok"></i> Terverifikasi</a>
								<?php endif; ?>
							</td> -->
						</tr>
					<?php endforeach; ?>
				</table>
				<script type="text/javascript">
					function hapus()
					{
						var hapus = confirm("Apakah anda yakin ingin menghapus data ini?");
						if (hapus)
						{
							document.getElementById("HAPUS").submit();
						}
					}
				</script>
			</div>
		</div>
	</div>
</div>