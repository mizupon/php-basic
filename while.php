<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数$numに0～4までのランダムな整数を代入する
         $num = mt_rand(0, 4);

         $i = 1;
 
         // 変数$numの最初の値を出力する（確認用）
         echo "最初の値は{$num}です。<br>";
 
         // 変数$numの値が0以外である間、変数$numの値を出力し続ける
         while ($num !== 0) {
             // 変数$numに0～4までのランダムな整数を代入する
             $num = mt_rand(0, 4);
 
             // 次の条件式で比較される、変数$numの現在の値を出力する
             echo "現在の値は{$num}です。<br>";

             if ($i === 5) {
                echo '5回目なので繰り返し処理を強制終了します。';
                break;
             }
         

        $i++;
        }
         ?>
     </p>
     <p>
        <?php
        $sum = 0;

        while ($sum < 20) {
            $num = mt_rand(1,10);

            echo "{$num}が出ました。<br>";

            if ($num % 2 === 0) {
                echo '偶数なので加算しません。<br>';
                continue;
            }

            $sum += $num;

            echo "現在の合計は{$num}です。<br>";
        }
        ?>
    </p>
 </body>
 
 </html>