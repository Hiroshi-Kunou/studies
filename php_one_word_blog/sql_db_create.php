<?php include('head.php');?>
<p class="pt">

<!-- データベース作成 -->
<?php

// $dbName = 'one_word_blog';
// $sql = "CREATE DATABASE {$dbName};";
// $link = mysqli_connect("localhost",root,root);
// mysqli_set_charset($link, 'utf8');
// mysqli_query($link, $sql);
// mysqli_close($link);

?>

<!-- テーブルの作成 -->
<?php

// $dbName = 'one_word_blog';
// $tblName = 'one_word_blog_content';
//
// $sql = "CREATE TABLE {$tblName} (";
// $sql .= 'id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,';
// $sql .= 'event VARCHAR(30), year INT) DEFAULT CHARSET=utf8';
//
// $link = @mysqli_connect("localhost",root,root);
// mysqli_select_db($link, $dbName);
// mysqli_set_charset($link, 'utf8');
// mysqli_query($link, $sql);
// mysqli_close($link);

?>

<?php

// $event='コロンブス新大陸発見';
// $year=1492;
// $tblName='nenpyo';
//
// $sql ="INSERT INTO {$tblName} (event, year) VALUES (";
// $sql .="'{$event}', {$year} );";
//
// $link = mysqli_connect("localhost",root,root);
// mysqli_select_db($link, $dbName);
// mysqli_set_charset($link, 'utf8');
// mysqli_query($link, $sql);
// mysqli_close($link);

?>

<?php

// $dbName = 'db_nenpyo';
// $tblName = 'nenpyo';
//
// $sql = "SELECT * FROM {$tblName};";
// $link = mysqli_connect("localhost",root,root);
// mysqli_select_db($link, $dbName);
// mysqli_set_charset($link, 'utf8');
// $result = mysqli_query($link, $sql);
//
// echo '<table>';
// while($row = mysqli_fetch_assoc($result)){
//   echo "<tr><td> {$row['id']} </td>";
//   echo "<td> {$row['event']} </td>";
//   echo "<td> {$row['year']} </td></tr>";
// }
// echo '</table>';
//
// mysqli_free_result($result);
// mysqli_close($link);

?>

</p>
<?php include('foot.php');?>
