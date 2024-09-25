<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義
        class Food {
            // プロパティを定義
            private $name;
            private $price;
            // コンストラクタを定義
            
            public function __construct(string $name,int $price){
                $this->name = $name;
                $this->price = $price;
            }
            // メソッドを定義
            public function show_price() {
                echo $this->price;
            }

        }

        // クラスを定義
        class Animal {
            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義
            
            public function __construct(string $name,int $height,int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドの定義
            public function show_height() {
                echo $this->height;
            }
        }

        // インスタンス化する
        $food =new food('potato',250);
        $animal =new animal('dog',60,5000);


          // インスタンス$userの各プロパティの値を出力
          print_r($food);
          echo '<br>';
          print_r($animal);
          echo '<br>';

        //   値を出力 
          $food->show_price();
          echo '<br>';
          $animal->show_height();

          ?>
    </p>
    
</body>
</html>