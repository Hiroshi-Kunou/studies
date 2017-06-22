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

mysql_free_result($result);
mysqli_close($link);

?>
</p>

<?php include('foot.php');?>
