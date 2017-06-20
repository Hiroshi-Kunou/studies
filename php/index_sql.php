<?php include('head.php');?>
<?php include('form.php');?>

<?php
try{
  $pdo = new PDO('mysql:host=localhost;dbname=study_sql;charset=utf8','root','root');
  print '<p class="success">PDO クラスによる接続成功</p>';
  $pdo = null;
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
} catch(PDOException $Exception) {
  die('<p class="failed">接続エラー</p><p>'.$Exception->getMessage().'</p>');
}

$sql="INSERT INTO member(last_name,first_name,age) VALUES(:last_name,:first_name,:age)"
$stmh->bindValue(':last_name',$_POST['last_name']);
$stmh->bindValue(':first_name',$_POST['first_name']);
$stmh->bindValue(':age',$_POST['age']);
$stmh->execute();


?>

<?php include('foot.php');?>
