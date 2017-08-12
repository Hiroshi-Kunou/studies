<?php

include('head.php');
include('config.php');

foreach ($pdo -> query('select * from one_word_blog_light order by id desc') as $row) {
  echo '<hr>';
  echo '<form action="update_send.php" class="fm" method="post">';
  echo '<input type="text" name="content" value="', $row['content'], '">';
  echo '<br>';
  echo '<input type="submit" value="更新">';
  echo '</form>';
}
include('foot.php');

?>
