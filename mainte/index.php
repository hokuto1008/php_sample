<?php
require_once './db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 1';
// $stmt = $pdo->query($sql);
// $result = $stmt->fetchAll();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

// ユーザー入力あり prepare, bind, execute -> sqlインジェクション対策
// transaction
$pdo->beginTransaction();
try {
  $sql = 'select * from contacts where id = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue('id', 1, PDO::PARAM_INT);
  $stmt->execute();

  $pdo->commit();  
} catch (PDOException $e) {
  $pdo->rollBack();
}

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';