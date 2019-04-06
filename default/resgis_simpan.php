<?php 
include 'koneksi.php';
session_start();

$aksi = $_POST['aksi'];
if ($aksi == "simpan") {
    @$id_user = $_POST['id_user'];
    @$email = $_POST['email'];
    @$nama_user = $_POST['nama_user'];
    @$username = $_POST['username'];
    @$password= $_POST['password'];
    @$bagian = $_POST['bagian'];

    $sql_id = "select max(id_user) as id_user from karyawan WHERE id_user like '%KR%'";
    $hasil_id = mysqli_query($connect, $sql_id);
    if (mysqli_num_rows($hasil_id) > 0) {
        $row = mysqli_fetch_array($hasil_id);
        $idmax = $row['id_user'];
        $id_urut = (int)substr($idmax, 2, 4);
        $id_urut++;
        // sprintf = menambahkan (+)
        $id_user = "KR" . sprintf("%04s", $id_urut);
    } else {
        $id_user = "KR0001";
    }

    $query = "INSERT INTO karyawan(id_user, email, nama_user, username, password, bagian) VALUES ('$id_user','$email','$nama_user','$username','$password','$bagian')";
    $hsl = mysqli_query($connect, $query);
    if ($hsl) {
        header("location:index.php");
    }

}
?>