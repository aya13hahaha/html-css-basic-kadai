<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $order = [true, false];
        $arrays = $num;

        function sort_2way($array, $order)
        {
          $nums = [15, 4, 18, 23, 10];

          if ($order) {
             echo "昇順にソートします。<br>";
             sort($nums);
          } else {
             echo "降順にソートします。<br>";
             rsort($nums);
          }

          // 配列の要素を逆順に表示
          $count = count($nums);
          for ($i = $count - 1; $i >= 0; $i--) {
             echo $nums[$i] . '<br>';
        }
        }

        sort_2way($arrays, $order);
        ?>
    </p>
</body>

</html>