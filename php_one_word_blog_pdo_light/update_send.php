<?php

include('head.php');
include('config.php');

$sql = $pdo -> prepare('update one_word_blog_light set content=? where id=?');

if($sql -> execute([htmlspecialchars($_REQUEST['content']), $_REQUEST['id']])){
  echo '更新成功';
} else {
  echo '更新失敗';
}

include('foot.php');

?>
