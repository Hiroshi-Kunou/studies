<?php

include('head.php');

$dbName = 'one_word_blog';
$link =
mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');

$sql = "INSERT INTO one_word_blog_light (content) VALUES (?)";
$stmt =
mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, 's', $_POST['content']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

include('foot.php');

?>
