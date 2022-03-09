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
    // 連想配列の入れ子
    $array_member1 = [
      '1組' => [
        '本田' => [
          'height' => 170,
          'hobby' => 'サッカー'
        ],
        '香川' => [
          'height' => 175,
          'hobby' => 'サッカー'
        ],
      ],
      '2組' => [
        '長友' => [
          'height' => 165,
          'hobby' => 'サッカー'
        ],
        '乾' => [
          'height' => 168,
          'hobby' => 'サッカー'
        ],
      ],  
    ];

    echo $array_member1['1組']['香川']['height'];

    echo '<br>-------------------------<br>';

    // foreach
    $array_member2 = [
      'name' => '本田',
      'height' => 170,
      'hobby' => 'サッカー'
    ];

    foreach($array_member2 as $member){
      echo $member;
    }

    echo '<br><br>';

    foreach($array_member2 as $key => $value){
      echo $key . 'は' . $value . 'です' . '<br>';
    }

    echo '<br>-------------------------<br>';

    // foreach 多段
    $array_member3 = [
      '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
      ],
      '香川' => [
        'height' => 175,
        'hobby' => 'サッカー'
      ],
    ];

    foreach($array_member3 as $member){
      foreach($member as $detail){
        echo $detail;
      }
    }

    echo '<br><br>';

    foreach($array_member3 as $key => $value){
      echo $key;
      foreach($value as $detail){
        echo $detail;
      }
    }

    // 配列の関数
    // 参考 http://html2php.starrypages.net/php/array-funcs
    
  ?>
</body>

</html>