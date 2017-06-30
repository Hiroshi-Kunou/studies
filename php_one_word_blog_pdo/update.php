<?php

include('head.php');
include('config.php');

// foreach ($pdo -> query('select * from one_word_blog_content order by id desc') as $row) {
$sql = $pdo -> query('select * from one_word_blog_content where id=?');
  echo '<hr>';
  echo '<form action="update_send.php" class="fm" method="post">';
  echo '<input type="hidden" name="id" value="', $row['id'] ,'">';
  echo '<input type="text" name="title" value="', $row['title'] , '">';
  echo '<br>';
  echo '<input type="text" name="content" value="', $row['content'], '">';
  echo '<br>';
  echo '<input type="submit" value="更新">';
  echo '<br>';
  echo '</form>';
// }
include('foot.php');

?>
