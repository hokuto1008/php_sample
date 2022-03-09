<?php
// if(isset($_COOKIE['PHPSESSID'])){
//   setcookie('PHPSESSID', '', time() - 1800, '/');
// }

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
    // セッションはブラウザを閉じることでも削除される

    echo 'セッションを破棄しました<br>';

    $_SESSION = [];

    session_destroy();

    echo 'セッション';
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    echo 'クッキー';
    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
  
  ?>
</body>
</html>