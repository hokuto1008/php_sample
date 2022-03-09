<?php

function insertContact($request){
  require_once './db_connection.php';

  $params = [
    'id' => null,
    'your_name' => $request['your_name'],
    'email' => $request['email'],
    'url' => $request['url'],
    'gender' => $request['gender'],
    'age' => $request['age'],
    'contact' => $request['contact'],
    'created_at' => null,
  ];

  $count = 0;
  $columns = '';
  $values = '';

  foreach(array_keys($params) as $key){
    if($count > 0){
      $columns .= ',';
      $values .= ',';
    }
    $columns .= $key;
    $values .= ':' . $key;
    $count++;
  }

  $sql = 'insert into contacts ('. $columns .') values ('. $values .')';

  $pdo->beginTransaction();
  try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $pdo->commit();
  } catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    $pdo->rollBack();
  }
}