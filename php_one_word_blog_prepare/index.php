<?php include('head.php');?>

<?php

$dbName = 'one_word_blog';
$tblName = 'one_word_blog_content';

$sql = "SELECT * FROM {$tblName};";
$link = mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');
$result = mysqli_query($link, $sql);

echo '<div>';
while($row = mysqli_fetch_assoc($result)){
  echo '<hr>';
  echo '<div class="article__wrapper">';
  echo '<div class="article__title">';
  echo "{$row['date']}";
  echo '</div>';
  echo '<div class="article__content">';
  echo "{$row['title']}";
  echo '</div>';
  echo '<div class="article__content">';
  echo "{$row['content']}";
  echo '</div>';
  echo '</div>';
}
echo '</div>';

mysqli_free_result($result);
mysqli_close($link);

?>

<?php include('foot.php');?>
