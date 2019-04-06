<?php 
include 'koneksi.php';
session_start();    


$aksi = $_POST['aksi1'];
if ($aksi == "simpan1") {
    @$kode = $_POST['kode'];
    @$no_antri = $_POST['no_antri'];
    @$nama = $_POST['nama'];
    @$tgl_pinjam = $_POST['tgl_pinjam'];
    @$jumlah_pinjam = $_POST['jumlah_pinjam'];
    @$telp = $_POST['telp'];
    @$alamat = $_POST['alamat'];
    @$status = $_POST['status'];
    @$ket_pinjam = $_POST['ket_pinjam'];


    $sql_id = "select max(kode) as kode from pinjaman WHERE kode like '%PN%'";
    $hasil_id = mysqli_query($connect, $sql_id);
    if (mysqli_num_rows($hasil_id) > 0) {
        $row = mysqli_fetch_array($hasil_id);
        $idmax = $row['kode'];
        $id_urut = (int)substr($idmax, 2, 4);
        $id_urut++;
        // sprintf = menambahkan (+)
        $kode = "PN" . sprintf("%04s", $id_urut);
    } else {
        $kode = "PN0001";
    }


    //TIMEZONE
    date_default_timezone_set("Asia/Jakarta");
    $date = date("Y-m-d");

    // NOMOR URUT ORDER
    $query1 = mysqli_query($connect, "SELECT max(no_antri) as maxKode FROM pinjaman");
    $data = mysqli_fetch_array($query1);
    $no_antri = $data['maxKode'];
    $noUrut = (int)substr($no_antri, 9, 3);
    $noUrut++;
    $char = "SO";
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $no_antri = $char . $tahun . $bulan . sprintf("%03s", $noUrut);

   $query = "INSERT INTO pinjaman(kode, no_antri, nama, tgl_pinjam, jumlah_pinjam, telp, alamat, status, ket_pinjam) VALUES ('$kode','$no_antri','$nama','$tgl_pinjam','$jumlah_pinjam','$telp','$alamat','$status','$ket_pinjam')";
    $hsl = mysqli_query($connect, $query);
header("location:input-tagihan.php");

}
?> 