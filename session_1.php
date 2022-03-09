<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if(!isset($_SESSION['visited'])){
      echo '初回アクセス';

      $_SESSION['visited'] = 1;
      $_SESSION['date'] = date('c');
    } else {
      $visited = $_SESSION['visited'];
      $visited++;
      $_SESSION['visited'] = $visited;

      echo $_SESSION['visited'] . '目のアクセス<br>';

      if(isset($_SESSION['date'])){
        echo '前回訪問:' . $_SESSION['date'];
        $_SESSION['date'] = date('c');
      }
    }

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
  ?>
</body>
</html>