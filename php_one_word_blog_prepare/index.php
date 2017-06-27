<?php

include('head.php');
include('config.php');

echo '<div>';
while($row = mysqli_fetch_assoc($result)){
  echo '<hr>';
  echo '<div class="article__wrapper">';
  echo '<div class="article__title">';
  echo "{$row['title']}";
  echo '</div>';
  echo '<div class="article__content">';
  echo "{$row['content']}";
  echo '</div>';
  echo '<div class="article__date">';
  echo "{$row['date']}";
  echo '</div>';
  echo '<div class="article__date">';
  echo '<input type="radio" name="id" value="'.$row['id'].'">';
  echo '<a href="update.php" class="btn__post">編集</a>';
  echo '</div>';
  echo '</div>';
}
echo '</div>';

mysqli_free_result($result);
mysqli_close($link);

include('foot.php');

?>
