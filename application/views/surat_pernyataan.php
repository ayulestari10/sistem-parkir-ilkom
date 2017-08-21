<html>
	<style type="text/css">
		.signature {
			margin-left: 50%;
		}

		.kop {
			padding: 0 auto;
		}

		.title {
			font-size: 20px;
		}
	</style>
	<div class="kop">
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="title"><b><u>SURAT PERNYATAAN</u></b></span><br>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="title"><b><u>PARKIR KENDARAAN DI LINGKUNGAN FASILKOM UNSRI</u></b></span>
	</div>
	<p>Saya yang bertanda tangan di bawah ini:</p>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?= $data->nim ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?= $data->nama ?></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><?= $data->jurusan ?></td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td>:</td>
			<td><?= $data->angkatan ?></td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td><?= $data->no_hp ?></td>
		</tr>
	</table>
	<p>Menyatakan bahwa BENAR saya mengajukan untuk mendapatkan stiker parkir untuk kendaraan saya sebagai berikut:</p>
	<table>
		<tr>
			<td>No. Polisi</td>
			<td>:</td>
			<td><?= $data->plat_kendaraan ?></td>
		</tr>
		<tr>
			<td>Jenis/tipe kendaraan</td>
			<td>:</td>
			<td><?= $data->tipe ?></td>
		</tr>
		<tr>
			<td>Tahun kendaraan</td>
			<td>:</td>
			<td><?= $data->tahun_kendaraan ?></td>
		</tr>
	</table>
	<p>Sehubungan dengan itu saya berjanji untuk mentaati semua ketentuan parkir yang ada. Apabila saya melakukan pelanggaran, saya siap diberikan sanksi sesuai ketentuan yang berlaku.</p>
	<div class="signature">
		<?php
			date_default_timezone_set("Asia/Jakarta");  
			$tanggal 	= date("d");
			$bulan 		= date("m");
			$tahun 		= date("Y");
			$str_bulan 	= array(
				'01' => 'Januari',
				'02' => 'Februari',
				'03' => 'Maret',
				'04' => 'April',
				'05' => 'Mei',
				'06' => 'Juni',
				'07' => 'Juli',
				'08' => 'Agustus',
				'09' => 'September',
				'10' => 'Oktober',
				'11' => 'November',
				'12' => 'Desember'
			);
		?>
		<br>
		<br>

		<p>
			Palembang, <?= $tanggal . ' ' . $str_bulan[$bulan] . ' ' . $tahun ?>
			<br>
			Yang menyatakan, 
		</p>
		<br>
		<div style="background-color: rgba(20,20,20,0.1); width: 80px; height: 40px; color: grey;">
			Materai 6000
		</div>
		<br>

		<div style="margin-right: 50%;">
			<p align="middle">
				<b><u><?= $data->nama ?></u></b>
				<br>
				NIM. <?= $data->nim ?>
			</p>
		</div>
		<p></p>
	</div>
	<div>
		<i>*lampirkan: Fotocopy STNK, Fotocopy KPM, Fotocopy SIM.</i>
	</div>
</html>