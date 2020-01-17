<?php
 require("insert.php");
 /* 1 row
$sql = "SELECT * FROM topic where id = 13";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];
*/
//all rows
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $escape_title = htmlspecialchars($row['title']);
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">.{$escape_title}</a></li>";
  //echo $row['description'];
}


?>
