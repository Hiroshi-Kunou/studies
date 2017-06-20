<?php include('head.php');?>

<?php
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";
$db_name = "study_sql";
$db_type = "mysql";
$dns = "$db_type:host = $db_host; dbname = $db_name; charset = utf8";

try {
  $pdo = new PDO($dsn, $db_user, $db_pass);
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  print '<p class="success">接続成功</p>';
  $pdo -> beginTransaction();
  $sql = "INSERT INTO member (last_name, first_name, age) VALUES (:last_name, :first_name, :age)";
  $stmh -> bindValue(':last_name', $_POST['last_name'], PDO::PARAM_STR);
  $stmh -> bindValue(':first_name', $_POST['first_name'], PDO::PARAM_STR);
  $stmh -> bindValue(':age', $_POST['age'], PDO::PARAM_INT);
  $stmh -> execute();
  $pdo -> commit();
  print '<p class="success">データを'.$stmh->rowCount().'件挿入しました</p>';
} catch(PDOException $Exception) {
  $pdo -> rollBack();
  print '<p class="failed">接続エラー</p><p>'.$Exception->getMessage().'</p>';
}

?>

<?php include('foot.php');?>
