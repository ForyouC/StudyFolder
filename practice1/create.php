<?php require("select.php");

$article = array(
  'title'=>'Welcome',
  'description'=>'HelloWorld'
);
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
  <form action="process_create.php" method="POST">
    <p><input type="text" name="title" placeholder="title"></p>
    <p><textarea name="description" cols="30" rows="5" placeholder="description"></textarea></p>
    <p><input type="submit"></p>
  </form>
</body>
</html>
