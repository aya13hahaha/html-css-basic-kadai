<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>
<body>
    <p>
       <?php
       $vegetable = [             // 連想配列を日本語キーで作成
           '名前' => '玉ねぎ', 
           '値段' => 200,
           '産地' => '北海道'
       ];

       foreach ($vegetable as $key => $value) {
           echo "{$key}: {$value}. <br>";  // 連想配列の内容を表示
       }
       ?>
   </p>
</body>
</html>