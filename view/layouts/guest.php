<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

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