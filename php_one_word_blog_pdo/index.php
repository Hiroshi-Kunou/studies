<?php

include('head.php');
include('config.php');

echo '<div>';
foreach($pdo->query('select * from one_word_blog_content order by id desc')as $row){
  echo '<hr>';
  echo '<div class="article__wrapper">';
  echo '<div class="article__title">';
  echo $row['title'];
  echo '</div>';
  echo '<div class="article__content">';
  echo $row['content'];
  echo '</div>';
  echo '<div class="article__date">';
  echo $row['date'];
  echo '</div>';
  // echo '<form action="update.php" class="fm" method="post">';
  // echo '<input type="submit" name="';
  // echo $row['id'];
  // echo '" value="編集" class="btn">';
  // echo '</form>';
  echo '<a href="update.php?id=';
  echo $row['id'];
  echo '">編集</a>';
  echo '</div>';
}
echo '</div>';



include('foot.php');

?>
