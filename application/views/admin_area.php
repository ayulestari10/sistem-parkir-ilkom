<style type="text/css">
	a{list-style: none;}
	table{margin-top: 5%;}
</style>

<div class="container">

	<div style="margin-bottom: 10%; text-align: center;">
		<h1><strong>Input Data Mahasiswa</strong></h1>
	</div>

	<div class="add">

		<?php
			$msg = $this->session->flashdata('msg');
			if(isset($msg)){
				echo $msg;
			}

			$username = $this->session->userdata('username');
			if (isset($username)) {
			     echo form_open_multipart('Admin/add_mhs/');
			} else {
			     redirect('login/Admin');
			}
		?>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" required />
				</div>
				<div class="form-group">
					<label for="nim">NIM</label>
					<input type="text" class="form-control" name="nim" required />
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
					<label for="tgl_daftar">Tanggal Daftar <span style="color: red;">(dd-mm-yyy)</span></label>
					<input type="text" class="form-control" name="tgl_daftar"></input>
				</div> -->
				<div class="form-group">
		          <label for="lokasi">Lokasi</label><br/>
		          <select name="lokasi" class="form-control">
		          		<option value="Indralaya">Indralaya</option>
		          		<option value="Bukit">Bukit</option>
		          </select>
		        </div>
		        <div class="form-group">
		          <label for="angkatan">Angkatan</label><br/>
		          <select name="angkatan" class="form-control">
		          		<option value="2010">2010</option>
		          		<option value="2011">2011</option>
		          		<option value="2012">2012</option>
		          		<option value="2013">2013</option>
		          		<option value="2014">2014</option>
		          		<option value="2015">2015</option>
		          		<option value="2016">2016</option>
		          </select>
		        </div>
		        <div class="form-group">
		        	<label for="no_hp">No Hp</label>
		        	<input class="form-control" type="text" name="no_hp" required />
		        </div>
		        <div class="form-group">
					<label for="foto_kendaraan">Foto Kendaraan</label>
					<input type="file" name="userfile" required />
				</div>
				<div class="form-group">
					<label for="plat_kendaraan">Plat Kendaraan</label>
					<input type="text" class="form-control" name="plat_kendaraan" required />
				</div>
				<div class="form-group">
					<label for="tipe">Merk Kendaraan</label>
					<input type="text" class="form-control" name="tipe" required />
				</div>
				<div class="form-group">
					<label for="tahun_kendaraan">Tahun Kendaraan</label>
					<input type="text" class="form-control" name="tahun_kendaraan" required />
				</div>
				<div class="form-group">
					<label for="kode_stiker">Kode Stiker</label>
					<input type="text" class="form-control" name="kode_stiker" required />
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-1 col-md-offset-5" style="margin-top: 1%;">
				<input type="submit" value="Simpan" name="add_mhs" class="btn btn-success" />
			</div>
		</div>

		<?php echo form_close(); ?>
	</div>
</div>
