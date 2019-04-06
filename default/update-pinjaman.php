<?php

include 'koneksi.php';



// menangkap data yang di kirim dari form
@$kode = $_POST['kode'];
@$no_antri = $_POST['no_antri'];
@$nama = $_POST['nama'];
@$tgl_pinjam = $_POST['tgl_pinjam'];
@$jumlah_pinjam = $_POST['jumlah_pinjam'];
@$telp = $_POST['telp'];
@$alamat = $_POST['alamat'];
@$status = $_POST['status'];
@$ket_pinjam = $_POST['ket_pinjam'];

// update data ke database
mysqli_query($connect,"update pinjaman set no_antri='$no_antri', nama='$nama', tgl_pinjam='$tgl_pinjam', jumlah_pinjam='$jumlah_pinjam', telp='$telp', alamat='$alamat', status='$status', ket_pinjam='$ket_pinjam' where kode='$kode'");

// mengalihkan halaman kembali ke index.php
header("location:input-tagihan.php");
