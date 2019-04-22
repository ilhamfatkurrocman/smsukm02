<html>

<body>

    <?php

    /************************ YOUR DATABASE CONNECTION START HERE   ****************************/
    error_reporting(0);
    ini_set('memory_limit', '1024M');
    session_start();
    //@$idpeg=$_SESSION['ID_PEG1'];
    include("koneksi.php");
    //define ("DB_HOST", "localhost"); // set database host
    //define ("DB_USER", "root"); // set database user
    //define ("DB_PASS",""); // set database password
    //define ("DB_NAME","library12"); // set database name

    $link = mysqli_connect("localhost", "root", "", "sms_gammu") or die("Couldn't make connection.");
    //$db = mysqli_select_db(DB_NAME, $link) or die("Couldn't select database");

    $databasetable = "tagihan";

    /************************ YOUR DATABASE CONNECTION END HERE  ****************************/


    set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
    include 'PHPExcel/IOFactory.php';
    date_default_timezone_set('Asia/Jakarta');

    // This is the file path to be uploaded.
    $file_type = array('xlsx', 'XLSX');

    if (isset($_POST['submit'])) {
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        $file_name = $_FILES['upload_file']['name'];
        $file_size = $_FILES['upload_file']['size'];
        $eror = null;
        //cari extensi file dengan menggunakan fungsi explode
        $explode = explode('.', $file_name);
        $extensi = $explode[count($explode) - 1];
        $file_ext = substr($file_name, strripos($file_name, '.'));
        $folder = './importDataTagihan/';
        //echo $file_name;
        move_uploaded_file($_FILES['upload_file']['tmp_name'], "importDataTagihan/" . $_FILES['upload_file']['name']);
        //$excel=$_FILES['upload_file']['name'];
        $inputFileName = "importDataTagihan/" . $_FILES['upload_file']['name'];
        //echo $inputFileName;
        try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

        //record kolom
        for ($i = 2; $i <= $arrayCount; $i++) { // i = menunjukkan baris
            $no_accountx = trim($allDataInSheet[$i]["A"]); //mulai dari 2 karena 1 header
            $namax = trim($allDataInSheet[$i]["B"]); //kolom ke 2 
            $tgl_akadx = trim($allDataInSheet[$i]["C"]);
            $kreditx = trim($allDataInSheet[$i]["D"]); //mulai dari 2 karena 1 header
            $tgl_jtx = trim($allDataInSheet[$i]["E"]); //kolom ke 2 
            $ang01x = trim($allDataInSheet[$i]["F"]);
            $byr_pokokx = trim($allDataInSheet[$i]["G"]); //mulai dari 2 karena 1 header
            $tagjasax = trim($allDataInSheet[$i]["H"]);
            $telpx = trim($allDataInSheet[$i]["I"]);
            // $tot_angsuranx = trim($allDataInSheet[$i]["J"]);
            // $tot_tagihanx = trim($allDataInSheet[$i]["K"]);

            // $hasilx = $kreditx / $byr_pokokx;
            // $hasil2x = $byr_pokokx + $byr_bungax;

       

            $insertTable = mysqli_query($connect, "REPLACE into tagihan (no_account, nama, tgl_akad, kredit, tgl_jt, ang01, byr_pokok, tagjasa, telp) values('" . $no_accountx . "', '" . $namax . "','" . $tgl_akadx . "','" . $kreditx . "','" . $tgl_jtx . "','" . $ang01x . "','" . $byr_pokokx . "','" . $tagjasax . "','" . $telpx . "');");

            //$msg = 'Record has been added. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
            echo ("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=dasboard.php\">");

            //$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
        }
        //echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
    } else {
        echo "ERROR";
    }

    ?>
</body>

</html> 