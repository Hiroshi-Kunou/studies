<?php include('head.php');?>

<!-- 一覧表示コード -->
<?php

$dbName = 'db_nenpyo';
$tblName = 'nenpyo';

$sql = "SELECT * FROM {$tblName};";
$link = mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');
$result = mysqli_query($link, $sql);

echo '<table>';
while($row = mysqli_fetch_assoc($result)){
  echo "<tr><td> {$row['id']} </td>";
  echo "<td> {$row['event']} </td>";
  echo "<td> {$row['year']} </td></tr>";
}
echo '</table>';

mysqli_free_result($result);
mysqli_close($link);

?>


<!-- データベース接続 -->
<?PHP
$dbName = 'db_nenpyo';
$tblName = 'nenpyo';
$link = mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');

if(isset($_post['submit'])){

  $_POST['event']=htmlspecialchars($_POST['event'],END_QUOTES,'utf-8');
  $_POST['year']=intval(mb_convert_kana($_POST['year'],'n','utf-8'));

  $sql="INSERT INTO {$tblName} (event, year) VALUES(?,?)";
  $stmt=mysqli_prepare($link,$sql);
  mysqli_stmt_bind_param($stmt,'si',$_POST['event'],$_POST['year']);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}
// mysqli_close($link);

?>


<form class="fm" method="post">
  <label>Year</label>
  <input type="text" name="year">年
  <br>
  <label>Event</label>
  <input type="text" name="event">
  <br>
  <input type="submit" value="submit">
</form>

<?php include('foot.php');?>
