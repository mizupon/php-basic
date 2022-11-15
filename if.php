<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         echo 45 + 18;

         echo '<br>';

         var_dump(45 > 18);
         ?>
     </p>
     <p>
        <?php
        var_dump('5' == 5);

        echo '<br>';

        var_dump('5' === 5);
        ?>
    </p>
    <p>
        <?php
        $num = mt_rand(0,4);

        echo $num;

        echo '<br>';

        if ($num === 4) {
            echo '大当たりです';
        }
        ?>
    </p>
    <p>
        <?php
        $num = mt_rand(0,4);

        echo $num;

        echo '<br>';

        if ($num === 4) {
            echo '大当たりです';
        } elseif ($num === 3) {
            echo '当たりです';
        } else {
            echo 'はずれです';
        }
        ?>
    </p>
    <p>
        <?php
        $num = 20;

        if ($num > 10 && $num < 30) {
            echo '変数$numは10より大きく、30より小さいです';
        } else {
            echo '条件が成り立ちませんでした';
        }

        echo '<br>';

        $num = 10;

        if ($num === 10 || $num === 30) {
            echo '変数$numは10又は30です';
        } else {
            echo '条件が成り立ちませんでした';
        }
        ?>
        </P>
 </body>
 
 </html>