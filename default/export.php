<?php 
//memanggil fungsi
include 'fungsi.php';

//koneksi ke database dan jalankan query
include 'koneksi.php';

//ambil query dari sql yang dikirim oleh form
$sql = isset($_POST['sql']) ? $_POST['sql'] : '';

// masukkan sql ke dalam query
$result = mysqli_query($connect, $sql);
!$result ? die(mysqli_error()) : '';

//pengaturan nama file
$namaFile = "Pinjaman.xls";
//pengaturan judul data
$judul = "Pinjaman";
//baris berapa header tabel di tulis
$tablehead = 2;
//baris berapa data mulai di tulis
$tablebody = 3;
//no urut data
$nourut = 1;

//penulisan header
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=" . $namaFile . "");
header("Content-Transfer-Encoding: binary ");


xlsBOF();

xlsWriteLabel(0, 0, $judul);

$kolomhead = 0;
xlsWriteLabel($tablehead, $kolomhead++, "NO URUT");
xlsWriteLabel($tablehead, $kolomhead++, "KODE");
xlsWriteLabel($tablehead, $kolomhead++, "NAMA");
xlsWriteLabel($tablehead, $kolomhead++, "SALES");
xlsWriteLabel($tablehead, $kolomhead++, "JAM MASUK");
xlsWriteLabel($tablehead, $kolomhead++, "JAM KELUAR");
xlsWriteLabel($tablehead, $kolomhead++, "KETERANGAN");
xlsWriteLabel($tablehead, $kolomhead++, "KETERANGAN1");

while ($data = mysqli_fetch_array($result)) {
    $kolombody = 0;

//gunakan xlsWriteNumber untuk penulisan nomor dan xlsWriteLabel untuk penulisan string
    xlsWriteNumber($tablebody, $kolombody++, $nourut);
    xlsWriteNumber($tablebody, $kolombody++, $data['kode']);
    xlsWriteLabel($tablebody, $kolombody++, $data['nama_cus']);
    xlsWriteLabel($tablebody, $kolombody++, $data['sales']);
    xlsWriteLabel($tablebody, $kolombody++, $data['jam_masuk']);
    xlsWriteLabel($tablebody, $kolombody++, $data['jam_keluar']);
    xlsWriteLabel($tablebody, $kolombody++, $data['keterangan']);
    xlsWriteLabel($tablebody, $kolombody++, $data['keterangan1']);

    $tablebody++;
    $nourut++;
}

xlsEOF();
exit();
