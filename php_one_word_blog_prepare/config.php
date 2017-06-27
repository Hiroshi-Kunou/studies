<?php

$dbName = 'one_word_blog';
$tblName = 'one_word_blog_content';
$sql = "SELECT * FROM {$tblName} ORDER BY id DESC;";
$link =
mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');
$result =
mysqli_query($link, $sql);

?>
