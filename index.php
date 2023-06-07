<?php

$ip = $_SERVER['REMOTE_ADDR'];
$serverip= $_SERVER['SERVER_ADDR'];
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">WebServer IP is <?php echo $serverip ?> </h1>
      </div>
    </div>
    <div class="container">
        
    <h2><p> Connect to Database </p></h2>
    <button type="button" class="btn btn-primary" onclick="location.href='create.php'" > Insert Data </button>
  </div>

    

  </body>
</html>
