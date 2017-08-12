<?php

include('head.php');
include('config.php');

foreach($pdo->query('select * from one_word_blog_light order by id desc')as $row){
  echo '<hr>';
  echo '<div class="article__content">';
  echo $row['content']."<br>";
  echo '<a href="update.php">編集</a>';
  echo '</div>';
}



include('foot.php');

?>
