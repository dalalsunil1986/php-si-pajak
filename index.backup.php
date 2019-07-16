<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/jquery.dataTables.min.css">

    <title>
        Sistem Informasi Pajak - 
        <?php 
            if(isset($_GET['page'])) { 
                echo $_GET['page']; 
            } else { 
                echo "Selamat datang!"; 
            }   
        ?>
    </title>
  </head>
  <body>
    <?php 
      //Memuat class utama
      session_start();
      require_once("./app/library.php");      
      require_once("./app/base/MasterModel.php");      

      //Memuat model
      require_once("./model/admin.php");
      require_once("./model/kasun.php");
      require_once("./model/pajak.php");
      require_once("./model/penduduk.php");
      require_once("./model/wilayah.php");

      //Memuat controller
      require_once('./controller/LoginController.php');
      require_once('./controller/AdminMasterController.php');
    ?>

    <?php require("./app/routes.php"); ?>    
      
  </body>
</html>