<?php

include('head.php');

$dbName = 'one_word_blog';
$tblName = 'one_word_blog_content';
$link = mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');

$cont = "contenttttt2";

$sql = "INSERT INTO {$tblName} (date, title, content) VALUES (?,?,?)";
$stmt =
mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, 'sss', $cont, $cont, $cont);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

include('foot.php');

?>
