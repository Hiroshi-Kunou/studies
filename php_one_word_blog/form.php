<?php include('head.php');?>

<?php
date_default_timezone_set('Asia/Tokyo');
echo date('Y.m.d H:i');
?>

<form action="view.php" class="fm" method="post">
  <label>Title</label>
  <input type="text" name="date">
  <br>
  <label>Event</label>
  <input type="text" name="content" class="input__content">
  <br>
  <input type="submit" value="submit" class="btn">
</form>

<?php include('foot.php');?>
