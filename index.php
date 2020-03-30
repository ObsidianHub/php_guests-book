<?php

header('Content-type: text/html; charset=utf-8');
error_reporting(-1);
require_once 'funcs.php';

if(!empty($_POST)){
  save_mess();
  header("Location: {$_SERVER['PHP_SELF']}");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guests Book</title>
</head>
<body>
  <form action="index.php" method="POST">
    <p>
      <label for="name">Имя: </label><br>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="text">Текст: </label><br>
      <textarea name="text" id="text"></textarea>
    </p>
    <button type="submit">Написать</button>
  </form>
</body>
</html>