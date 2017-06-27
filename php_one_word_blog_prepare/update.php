<?php

include('head.php');
include('config.php');

$sql = "SELECT * FROM {$tblName} ORDER BY id DESC;";
$stmt =
mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $_POST['title'], $_POST['content']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
$result = mysqli_query($link, $sql);

echo '<form action="update_send.php" class="fm" method="update">';
while($row = mysqli_fetch_assoc($result)){
  echo '<input type="text" name="title" value="';
  echo "{$row['title']}";
  echo '">';
  echo '<input type="text" name="content" value="';
  echo "{$row['content']}";
  echo '">';
}
echo '</form>';
echo '<a href="update.php" class="btn__post">編集</a>';

include('foot.php');

?>
