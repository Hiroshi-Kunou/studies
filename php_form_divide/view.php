<?php include('head.php');?>

<?php

$con = mysqli_connect('localhost', 'root', 'root');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysqli_select_db($con, 'db_nenpyo');
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysqli_query($con, 'SET NAMES utf8');
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$year   = $_REQUEST['year'];
$event = $_REQUEST['event'];

$result = mysqli_query($con, "INSERT INTO nenpyo (year, event) VALUES('$year', '$event')");
if (!$result) {
  exit('データを登録できませんでした。');
}

$con = mysqli_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>

<?php include('foot.php');?>

$sql="INSERT INTO {$tblName} (event, year) VALUES(?,?)";
