<style type="text/css">
	a{list-style: none;}
	table{margin-top: 5%;}
	.box{
		width: 250px; height: 60px;
		background-color: rgba(0, 400, 0, 0.5);
		font-size: 18px; font-weight: bold; text-align: center;
		margin-bottom: 8%; margin-left: 3%; padding: 2%; margin-top: -20%;
	}
</style>

<div class="container">
	<?php  
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}

		$id_mhs = $this->uri->segment(3);
		if (isset($id_mhs)) {
		     echo form_open_multipart('Admin/edit_mhs/'.$id_mhs);
		} else {
		     echo form_open_multipart('Admin/edit_mhs/');
		}
	?>

	<div style="margin-bottom: 8%;">
		<h1><strong>Edit Data Mahasiswa</strong></h1>
	</div>

	<div class="add">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" value="<?= $dt->nama ?>"></input>
				</div>
				<div class="form-group">
					<label for="nim">NIM</label>
					<input type="text" class="form-control" name="nim" value="<?= $dt->nim ?>"></input>
				</div>
				<div class="form-group">
		          <label for="jurusan">Jurusan</label><br/>
		          <select name="jurusan" class="form-control">
		          		<option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
		                  <option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
		            	    <option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
		                  <option value="Teknisi Komputer Jaringan (TKJ) (D3)">Teknisi Komputer Jaringan (TKJ) (D3)</option>
		                  <option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
		                  <option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
		                  <option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
		                  <option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
		                  <option value="Komputerisasi Akuntansi (D3)">Komputerisasi Akuntansi (D3)</option>
		                    <option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
			              	<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
							<option value="Teknik Informatika (S2)">Teknik Informatika(S2)</option>
							<option value="Sistem Komputer Unggulan">Sistem Komputer Unggulan</option>
		          </select>
		        </div>
		        <!-- <div class="form-group">
					<label for="tgl_daftar">Tanggal Daftar</label>
					<input type="text" class="form-control" name="tgl_daftar" value="<?= $dt->tgl_daftar ?>"></input>
				</div> -->
				<div class="form-group">
		          <label for="lokasi">Kampus</label><br/>
		          <select name="lokasi" class="form-control">
	          		<?php if($dt->lokasi == 'Indralaya'): ?>
		          		<option>Indralaya</option>
		          		<option>Bukit</option>
	          		<?php else: ?>
	          			<option>Bukit</option>
	          			<option>Indralaya</option>
	          		<?php endif; ?>
		          </select>
		        </div>
		        <div class="form-group">
		          <label for="angkatan">Angkatan</label><br/>
		          <select name="angkatan" class="form-control">
	          		<?php if($dt->angkatan == '2016'): ?>
		          		<option value="2016">2016</option>
		          		<option value="2015">2015</option>
		          		<option value="2014">2014</option>
		          		<option value="2013">2013</option>
		          		<option value="2012">2012</option>
		          		<option value="2011">2011</option>
		          		<option value="2010">2010</option>
                <?php elseif($dt->angkatan == '2015'): ?>
		          		<option value="2015">2015</option>

                  		<option value="2016">2016</option>
		          		<option value="2014">2014</option>
		          		<option value="2013">2013</option>
		          		<option value="2012">2012</option>
		          		<option value="2011">2011</option>
		          		<option value="2010">2010</option>
                <?php elseif($dt->angkatan == '2014'): ?>
		          		<option value="2014">2014</option>

		          		<option value="2016">2016</option>
		          		<option value="2015">2015</option>
		          		<option value="2013">2013</option>
		          		<option value="2012">2012</option>
		          		<option value="2011">2011</option>
		          		<option value="2010">2010</option>
                <?php elseif($dt->angkatan == '2013'): ?>
		          		<option value="2013">2013</option>

              			<option value="2016">2016</option>
		          		<option value="2015">2015</option>
		          		<option value="2014">2014</option>
		          		<option value="2012">2012</option>
		          		<option value="2011">2011</option>
		          		<option value="2010">2010</option>
                <?php elseif($dt->angkatan == '2012'): ?>
		          		<option value="2012">2012</option>

                  		<option value="2016">2016</option>
		          		<option value="2015">2015</option>
		          		<option value="2014">2014</option>
		          		<option value="2013">2013</option>
		          		<option value="2011">2011</option>
		          		<option value="2010">2010</option>
                <?php elseif($dt->angkatan == '2011'): ?>
		          		<option value="2011">2011</option>

                  		<option value="2016">2016</option>
		          		<option value="2015">2015</option>
		          		<option value="2014">2014</option>
		          		<option value="2013">2013</option>
		          		<option value="2012">2012</option>
		          		<option value="2010">2010</option>
                <?php elseif($dt->angkatan == '2010'): ?>
		          		<option value="2010">2010</option>
                	
                  		<option value="2016">2016</option>
		          		<option value="2015">2015</option>
		          		<option value="2014">2014</option>
		          		<option value="2013">2013</option>
		          		<option value="2012">2012</option>
		          		<option value="2011">2011</option>
                <?php else: ?>
                  		<option value="2016">2016</option>
		          		<option value="2015">2015</option>
		          		<option value="2014">2014</option>
		          		<option value="2013">2013</option>
		          		<option value="2012">2012</option>
		          		<option value="2011">2011</option>
		          		<option value="2010">2010</option>
                <?php endif; ?>
		          </select>
		        </div>
		        <div class="form-group">
		        	<label for="no_hp">No Hp</label>
		        	<input class="form-control" type="text" name="no_hp" value="<?= $dt->no_hp ?>" />
		        </div>
				<div class="form-group">
					<label for="plat_kendaraan">Plat Kendaraan</label>
					<input type="text" class="form-control" name="plat_kendaraan" value="<?= $dt->plat_kendaraan ?>"></input>
				</div>
				<div class="form-group">
					<label for="tipe">Merk Kendaraan</label>
					<input type="text" class="form-control" name="tipe" value="<?= $dt->tipe ?>"></input>
				</div>
				<div class="form-group">
					<label for="tahun_kendaraan">Tahun Kendaraan</label>
					<input type="text" class="form-control" name="tahun_kendaraan" value="<?= $dt->tahun_kendaraan ?>"></input>
				</div>
				<div class="form-group">
					<label for="kode_stiker">Kode Stiker</label>
					<input type="text" class="form-control" name="kode_stiker" value="<?= $dt->kode_stiker ?>"></input>
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<select class="form-control" name="keterangan">
						<?php if ($dt->keterangan == 'Peringatan 1'): ?>
							<option value="Peringatan 1">Peringatan 1</option>
							<option value="Peringatan 2">Peringatan 2</option>
							<option value="Blacklist">Blacklist</option>
							<option value="Aktif">Aktif</option>
							<option value="Pengajuan">Pengajuan</option>
						<?php elseif ($dt->keterangan == 'Peringatan 2'): ?>
							<option value="Peringatan 2">Peringatan 2</option>
							<option value="Peringatan 1">Peringatan 1</option>
							<option value="Blacklist">Blacklist</option>
							<option value="Aktif">Aktif</option>
							<option value="Pengajuan">Pengajuan</option>
						<?php elseif ($dt->keterangan == 'Blacklist'): ?>
							<option value="Blacklist">Blacklist</option>
							<option value="Peringatan 1">Peringatan 1</option>
							<option value="Peringatan 2">Peringatan 2</option>
							<option value="Aktif">Aktif</option>
							<option value="Pengajuan">Pengajuan</option>
						<?php elseif ($dt->keterangan == 'Aktif'): ?>
							<option value="Aktif">Aktif</option>
							<option value="Peringatan 1">Peringatan 1</option>
							<option value="Peringatan 12">Peringatan 2</option>
							<option value="Blacklist">Blacklist</option>
							<option value="Pengajuan">Pengajuan</option>
						<?php elseif ($dt->keterangan == 'Pengajuan'): ?>
							<option value="Pengajuan">Pengajuan</option>
							<option value="Blacklist">Blacklist</option>
							<option value="Peringatan 1">Peringatan 1</option>
							<option value="Peringatan 2">Peringatan 2</option>
							<option value="Aktif">Aktif</option>
						<?php else: ?>
							<option></option>
							<option value="Peringatan 1">Peringatan 1</option>
							<option value="Peringatan 2">Peringatan 2</option>
							<option value="Blacklist">Blacklist</option>
							<option value="Aktif">Aktif</option>
							<option value="Pengajuan">Pengajuan</option>
						<?php endif; ?>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-1 col-md-offset-5" style="margin-top: 1%;">
				<input type="submit" value="Simpan" name="edit_mhs" class="btn btn-success"></input>
			</div>
		</div>

		<?php echo form_close(); ?>
	</div>
</div>