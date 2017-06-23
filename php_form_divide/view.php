<?php include('head.php');?>

<?php

$con = mysqli_connect('localhost', 'root', 'root');
if (!$con) {
  exit('<p class="failed">データベースに接続できませんでした</p>');
}

$result = mysqli_select_db($con, 'db_nenpyo');
if (!$result) {
  exit('<p class="failed">データベースを選択できませんでした。</p>');
}

$result = mysqli_query($con, 'SET NAMES utf8');
if (!$result) {
  exit('<p class="failed">文字コードを指定できませんでした。</p>');
}

$year  = $_REQUEST['year'];
$event = $_REQUEST['event'];

$result = mysqli_query($con, "INSERT INTO nenpyo (year, event) VALUES('$year', '$event')");
if (!$result) {
  exit('<p class="failed">データを登録できませんでした。</p>');
}

$con = mysqli_close($con);
if (!$con) {
  exit('<p class="failed">データベースとの接続を閉じられませんでした。</p>');
}

?>
<p class="success">登録が完了しました。</p>
<a href="index.php" class="btn __back">戻る</a>

<?php include('foot.php');?>
