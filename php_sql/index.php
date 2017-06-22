<?php include('head.php');?>




<p class="pt">

<?php
$table = 'member';
$sql_desc = "DESCRIBE {$table};";

$usr = 'root';
$pwd = 'root';
$dbName = 'study_sql';
$link = mysqli_connect('localhost', $usr, $pwd);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');
$result = mysqli_query($link, $sql_desc);

echo '<table>';
while($row = mysqli_fetch_assoc($result)){
  echo "<tr><td>{$row['Field']}</td>";
  echo "<td>{$row['Type']}</td></tr>";
}
echo '</table>';

//
// if(!$link)exit('<p class="failed">接続失敗</p>'.mysqli_connect_error());
// echo '<p class="success">接続成功</p>';
//
// echo '<p class="">データベース一覧</p>';
//
// $sql_show = 'SHOW DATABASES;';
// mysqli_set_charset($link,'utf8');
// $result = mysqli_query($link,$sql_show);
// if(!$result) die(mysqli_error($link));
// while($row = mysqli_fetch_assoc($result)){
//   echo '<li class="db__list">'.$row['Database'].'</li><br>';
// }
//

// echo '
// <form name="form1" class="form__name" action="" method="post">
//   <label>last name</label>
//   <input type="text" name="last_name">
//   <br>
//   <label>first name</label>
//   <input type="text" name="first_name">
//   <br>
//   <label>age</label>
//   <input type="text" name="age">
//   <br>
//   <input type="submit" value="submit">
// </form>
// ';


mysql_free_result($result);
mysqli_close($link);

?>
</p>

<?php include('foot.php');?>
