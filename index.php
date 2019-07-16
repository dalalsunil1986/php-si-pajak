
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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

  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/jquery.dataTables.min.css">
  <link href="./assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<?php 
    //Memuat class utama
    session_start();
    require_once("./app/library.php");
    require_once("./app/base/MasterModel.php");
    require_once("./app/FormGenerator.php");

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

<?php require_once("./view/layouts/scripts.php"); ?>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
