<!DOCTYPE>
<html>
  <head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width= device-width, initial-scale=1.0"> -->

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    <title>News Site Development</title>
  </head>
  <body>

    <div id="header">Games</div> <!-- End of header div -->

    <div id="menu">
      <ul> <!-- <ul> is used to create lists -->
        <li><a href="home"    >HOME    </a></li> <!-- <li> serves as a line in lists -->
        <li><a href="tunning" >RUNNING </a></li>
        <li><a href="games"   >GAMES   </a></li>
        <li><a href="cycling" >CYCLING </a></li>
        <li><a href="football">FOOTBALL</a></li>
        <li><a href="contact" >CONTACT </a></li>
      </ul>
    </div> <!-- End of menu div -->

    <?php
      echo $_GET['url'];
    ?>

    <div id="footer">
      All rights reserved.
    </div> <!-- End of 'div name' div -->
  </body>
</html>