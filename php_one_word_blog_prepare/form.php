<?php include('head.php');?>

<?php
$dbName = 'one_word_blog'
$tblName = 'one_word_blog_content';
$link = mysqli_connect("localhost",root,root);
mysqli_select_db($link, $dbName);
mysqli_set_charset($link, 'utf8');
// mysqli_query($link, $sql);
// mysqli_close($link);

// $title = $_REQUEST['title'];
// $content = $_REQUEST['content'];


if(isset($_POST['submit'])){
  $_POST['title'] = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
  $_POST['content'] = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
  date_default_timezone_set('Asia/Tokyo');
  $date = date('Y.m.d H:i');

  $sql = "INSERT INTO {$tblName} (date, title, content) VALUES(?,?)";
  $stmt = mysqli_prepare($link, $sql);
  mysqli_stmt_bind_param($stmt, 'ss', $_POST['date'], $_POST['title'], $_POST['content']);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

?>

<form action="" class="fm" method="post">
  <label>Title</label>
  <br>
  <input type="text" name="title">
  <br>
  <label>Event</label>
  <br>
  <input type="text" name="content" class="input__content">
  <br>
  <input type="submit" value="submit" class="btn">
</form>

<?php include('foot.php');?>
