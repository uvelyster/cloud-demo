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
        <h1 class="display-4">해당 Web 서버의 IP는 <?php echo $serverip ?>  입니다. </h1>
        <p class="lead"> 현재 보이는 IP는 귀하 서버의 사설 IP 입니다. </p>
      </div>
    </div>
    <div class="container">
        
    <h2><p> Part2에서는 WEB <-> DB까지 연결하도록하겠습니다.</p></h2>
    <button type="button" class="btn btn-primary" onclick="location.href='create.php'" > 데이터 생성 </button>
  </div>

    

  </body>
</html>