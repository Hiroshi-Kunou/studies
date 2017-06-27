<?php

include('head.php');

$dbName = 'one_word_blog';
$tblName = 'one_word_blog_content';
$link =
mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');

date_default_timezone_set('Asia/Tokyo');
$date = date('Y.m.d H:i');

$sql = "INSERT INTO {$tblName} (date, title, content) VALUES (?,?,?)";
$stmt =
mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, 'sss', $date, $_POST['title'], $_POST['content']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

include('foot.php');

?>
