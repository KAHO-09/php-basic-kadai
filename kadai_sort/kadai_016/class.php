<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // クラスの定義
        class Food{
            // プロパティ定義
            public $name;
            public $price;
            // priceプロパティの値を出力するshow_priceメソッド
            public function set_price(string $price){
                $this->price = $price;
            }
            public function show_price(){
                echo $this->price;
            }

            // コンストラクタの定義
            public function __construct(string $name,int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }
        // インスタンス化する
        $food = new Food('potate',250);
        print_r($food);
        echo '<br>';
        ?>
        <?php
        // クラスの定義
        class Animal{
            // プロパティ定義
            public $name;
            public $height;
            public $weight;
            // heightプロパティの値を出力する「show_height」メソッド
            public function set_height(int $height){
                $this->height = $height;
            }
            public function show_height(){
                echo $this->height;
            }
            // コンストラクタの定義
            public function __construct(string $name,int $height,int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        $animal = new Animal('dog',60,5000);
        print_r($animal);
        echo '<br>';
        // メソッドにアクセスして実行する
        $food->show_price();
        echo '<br>';
        $animal->show_height();
        ?>
    </p>
</body>
</html>