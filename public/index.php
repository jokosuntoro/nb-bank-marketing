<!DOCTYPE html>
<html>
<head>
	<title>:: Sistem Cerdas Bank Marketing ::</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h4 class="text-success text-center">
			Sistem Cerdas Bank Marketing
		</h4>
		<h5 class="text-success text-center">
			Knowledge based Application Using Naive Bayes Algorithm
		</h5>
		<form class="form-horizontal" method="POST" action="act_bank.php">
			<fieldset>
			<legend></legend>
			<div class="form-row">
			<div class="form-group col-md-8">
				<label class="col-form-label">Nama Lengkap</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
			</div>
			<div class="form-group col-md-4">
				<label class="col-form-label">Usia</label>
					<input type="number" name="usia" class="form-control" placeholder="Usia">
			</div>
			</div>
			
			<div class="form-row">
			<div class="form-group col-md-6">
				<label>Pekerjaan</label>
				<div>
					<select name="pekerjaan" class="form-control">
						<option value='++'>Jenis Pekerjaan</option>
						<option value='admin'>Admin</option>
						<option value='pengangguran'>Belum Bekerja</option>
						<option value='buruh'>Buruh</option>
						<option value='enterpreneur'>Enterpreneur</option>
						<option value='management'>Tim Management</option>
						<option value='pelajar'>Pelajar/Mahasiswa</option>
						<option value='pelayan'>Pelayan Restoran</option>
						<option value='pembantu'>Pembantu Rumah Tangga</option>
						<option value='pensiunan'>Pensiunan</option>
						<option value='teknisi'>Teknisi</option>
						<option value='unknown'>Unknown</option>
						<option value='wiraswasta'>Wiraswasta</option>
					</select>
				</div>
			</div>
			
			<div class="form-group col-md-6">
				<label>Balance</label>
					<input type="number" name="balance" class="form-control" placeholder="Jumlah uang tabung di bank (Euro)">
			</div>
			</div>
			
			<div class="form-row">
			<div class="form-group col-md-6">
				<label>Kredit Rumah</label>
				<div>
					<select name="rumah" class="form-control">
						<option value='++'>Apakah mempunyai kredit rumah?</option>
						<option value='ya'>Ya</option>
						<option value='tidak'>Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group col-md-6">
				<label>Pinjaman (selain kredit rumah)</label>
				<div>
					<select name="pinjaman" class="form-control">
						<option value='++'>Apakah mempunyai pinjaman lain?</option>
						<option value='ya'>Ya</option>
						<option value='tidak'>Tidak</option>
					</select>
				</div>
			</div>
			</div>
			
			<div class="form-row">
			<div class="form-group col-md-6">
				<label>Durasi</label>
					<input type="number" name="durasi" class="form-control" placeholder="Durasi waktu lama panggilan">
			</div>
			<div class="form-group col-md-6">
				<label>Campaigns Sebelum</label>
				<div>
					<select name="poutcome" class="form-control">
						<option value='++'>Hasil campaign sebelumnya</option>
						<option value='sukses'>Sukses</option>
						<option value='gagal'>Gagal</option>
						<option value='lainnya'>Lain-lain</option>
						<option value='unknown'>Unknown</option>
					</select>
				</div>
			</div>
			</div>
			
			<div class="form-group">
					<button type="submit" class="btn btn-success btn-md">Proses</button>
					<button type="reset" class="btn btn-danger btn-md">Reset</button>
			</div>
			</fieldset>
		</form>
		<i>
		Created by Joko Suntoro <br>
		Algoritme: Naive Bayes
		</i>
	</div>
</body>
</html>	
