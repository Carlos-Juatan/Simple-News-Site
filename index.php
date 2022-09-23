<!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width= device-width, initial-scale=1.0"> -->

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    <title>News Site Development</title>
  </head>
  <body>

    <?php include "php/structure/header.php"; ?> <!-- include the header structure -->
    
    <?php
      if(isset($_GET['url'])){
        include "php/pages/".$_GET['url'].".php";
      }else{
        include "php/pages/home.php";
      }
    ?>

    <?php include "php/structure/footer.php"; ?> <!-- include the footer structure -->
    
  </body>
</html>