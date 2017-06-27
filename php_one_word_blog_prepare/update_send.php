<?php

include('head.php');
include('config.php');

$sql = "UPDATE {$tblName} SET date=?, title=?, content=? WHERE id=?";
$stmt =
mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, 'sssi', $date, $_POST['title'], $_POST['content'], $_POST['id']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

include('foot.php');

?>
