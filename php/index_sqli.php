<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>study PHP</title>
  </head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet">

  <body>

<h1>php study</h1>

<!-- PHP -->

<!-- データベースに接続 -->
<?php
$mysql = new mysqli('localhost','root','root','study_sql');
if($mysqli->connect_error){
die('connect error:('.$mysql->connecr_errno.')'.$mysqli->connect_error);
}
print '<p class="success">接続成功</p>';
$mysql->close();
?>

<!-- PHP -->

  </body>
</html>
