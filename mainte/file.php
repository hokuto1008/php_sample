<?php

// --- ファイル名型 --- 

// ファイル全て読み込み
// $contactFile = '.contact.dat';
// $fileContents = file_get_contents($contactFile);

// ファイルに書き込み（全て消して上書き）
// file_put_contents($contactFile, 'テストです');

// ファイルに書き込み（追記）
// $addText = "\n" . "テストです";
// file_put_contents($contactFile, $addText, FILE_APPEND);

// csv読み込み
// $allData = file($contactFile);
// foreach($allData as $lineData){
//   $line = explode(',', $lineData);
//   echo $line[0] . '<br>';
//   echo $line[1] . '<br>';
//   echo $line[2] . '<br>';
// }


// --- ストリーム型（1行ごと） ---
// $contactFile = '.contact.dat';

// $contents = fopen($contactFile, 'a+');
// $addText = "\n" . '1行追記';
// fwrite($contents, $addText);
// fclose($contents);