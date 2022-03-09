<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>php7.2-apache</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php
    // 文字列の長さ
    echo strlen('あいうえお'); // 15(日本語1文字で3byte使用)
    echo mb_strlen('あいうえお'); //5

    echo '<br>-----------------<br>';

    // 文字列の置換
    $str = '文字列を置換';
    echo str_replace('置換', 'ちかん', $str);

    echo '<br>-----------------<br>';

    // 指定文字列で分割
    $str2 = '指定文字列で、分割します';
    $str2_exp = explode('、', $str2);

    echo $str2_exp[0]; // 指定文字列で
    echo '<br>';
    echo $str2_exp[1]; // 分割します

    echo '<br>-----------------<br>';

    // 正規表現
    // 参考 https://eng-entrance.com/php-regularex
    $str3 = '特定の文字列を検索する';
    echo preg_match('/文字列/', $str3); // 1 ※preg_match はUTF-8のみ対応

    echo '<br>-----------------<br>';

    // 指定文字列から文字列を取得する
    echo substr('abcde', 2); // cde
    echo '<br>';
    echo mb_substr('あいう', 2); // う

  ?>
</body>

</html>