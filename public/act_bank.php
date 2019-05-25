<center>
<?php
error_reporting(0);
require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\NaiveBayes;
use jokodm\Datamining\Dataset\Demo\BankMarketing;

$nama = $_POST['nama'];
$usia = $_POST['usia'];
$pekerjaan = $_POST['pekerjaan'];
$balance = $_POST['balance'];
$rumah = $_POST['rumah'];
$pinjaman = $_POST['pinjaman'];
$durasi = $_POST['durasi'];
$poutcome = $_POST['poutcome'];

$dataset = new BankMarketing();

$klasifikasi = new NaiveBayes();
$klasifikasi->train($dataset->getSamples(),$dataset->getTargets());


$pred = $klasifikasi->predict(['$pekerjaan',(int)$balance,'$rumah','$pinjaman',(int)$durasi,'$poutcome']);

if ($pred == "yes") {
	$hasil = "<font color=blue><b>Nasabah berpotensi </b> membuka deposito berjangka</font>";
} else {
	$hasil = "<font color=red><b>Nasabah tidak berpotensi </b> membuka deposito berjangka</font>";
}

echo "<table border='1'>
	<tr bgcolor='#00FF40' align='center'>
		<td><b>Attribute</b></td>
		<td><b>Value</b></td>
	</tr>
	<tr>
		<td>Nama:</td>
		<td>$nama</td>
	</tr>
	<tr>
		<td>Usia:</td>
		<td>$usia</td>
	</tr>
	<tr>
		<td>Pekerjaan:</td>
		<td>$pekerjaan</td>
	</tr>
	<tr>
		<td>Balance:</td>
		<td>$balance</td>
	</tr>
	<tr>
		<td>Kredit Rumah:</td>
		<td>$rumah</td>
	</tr>
	<tr>
		<td>Pinjaman (selain kredit rumah):</td>
		<td>$pinjaman</td>
	</tr>
	<tr>
		<td>Durasi:</td>
		<td>$durasi</td>
	</tr>
	<tr>
		<td>Campaign sebelumnya:</td>
		<td>$poutcome</td>
	</tr>
	<tr>
		<td colspan=2>$hasil</td>
	</tr>
</table><br>";

?>

<a href="index.php">Halaman Index</a>
</center>
