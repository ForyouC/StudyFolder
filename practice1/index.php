<?php require("select.php");

$article = array(
  'title'=>'Welcome',
  'description'=>'HelloWorld'
);
$update_link = '';
$delete_link = '';
if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title'=>htmlspecialchars($row['title']),
    'description'=>htmlspecialchars($row['description']));
  $update_link ='<a href="update.php?id='.$_GET['id'].'">update</a>';
  $delete_link='
    <form action="process_delete.php" method="post">
      <input type="hidden" name="id" value="'.$_GET['id'].'">
      <input type="submit" value="delete">
    </form>
  ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Web</title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?=$list?>
  </ol>
  <a href="create.php">create</a>
  <?=$update_link?>
  <?=$delete_link?>
  <h2><?=$article['title']?></h2>
  <?=$article['description']?>
</body>
</html>
