<?php

// インターフェイス
interface ProductInterface {
  // 強制するメソッド（中身は空にする）
  public function getProduct();
}

// インターフェイス
interface NewsInterface {
  // 強制するメソッド（中身は空にする）
  public function getNews();
}

// 複数のinterfaceを設定可能
class Product implements ProductInterface, NewsInterface {
  private $product = [];

  function __construct($product)
  {
    $this->product = $product;
  }

  // 強制されたメソッド
  public function getProduct()
  {
    echo $this->product;
  }

  // 強制されたメソッド
  public function getNews()
  {
    echo 'ニュース';
  }

  public function addProduct($item)
  {
    $this->product .= $item;
  }
}

$instance = new Product('テスト');