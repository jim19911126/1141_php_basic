<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩選號練習</title>
</head>
<body>
    <h1>威力彩選號</h1>
<?php

// 建立空陣列
$numbers = [];

while (count($numbers) < 6){
    $num = rand(1,38);
    // 產生1到38的亂數

    // 檢查是否已經存在這個號碼
    if (!in_array($num,$numbers)) {
        $numbers[] = $num;
        // 若沒有重複就加入陣列
    }
}

// 輸出結果
echo "威力彩號碼: ";
foreach ($numbers as $n) {
    echo $n . " ";
}

?>
</body>
</html>