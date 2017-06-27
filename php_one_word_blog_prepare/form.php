<?php include('head.php');?>

<form action="form_send.php" class="fm" method="post">
  <label>Title</label>
  <br>
  <input type="text" name="title">
  <br>
  <label>Event</label>
  <br>
  <input type="text" name="content" class="input__content">
  <br>
  <input type="submit" name="submit" value="投稿" class="btn">
</form>

<?php include('foot.php');?>
