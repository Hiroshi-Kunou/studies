<?php include('head.php');?>

<?php

$dbName = 'one_word_blog';
$tblName = 'one_word_blog_content';

$sql = "SELECT * FROM {$tblName};";
$link = mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');
$result = mysqli_query($link, $sql);

echo '<table>';
while($row = mysqli_fetch_assoc($result)){
  echo "<tr><td> {$row['date']} </td>";
  echo "<td> {$row['content']} </td></tr>";
}
echo '</table>';

mysqli_free_result($result);
mysqli_close($link);

?>

<a href="form.php" class="btn __back">投稿</a><br>

<?php include('foot.php');?>
