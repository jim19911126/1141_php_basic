<!DOCTYPE html>
<?php
header("refresh:1");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期/時間</title>
</head>
<body>
    <h1>日期/時間</h1>
    <h2>基本函數使用</h2>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo "台北 ";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    date_default_timezone_set("America/New_York");
    echo "紐約 ";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    ?>

    <h2>計算兩個日期之間的天數</h2>
    <?php
    $date1="2025-05-01";
    $date2="2025-05-31";
    echo "日期1: $date1<br>";
    echo "日期2: $date2<br>";

    $date1_timestamp = strtotime($date1);
    $date2_timestamp = strtotime($date2);
    $diff=$date2_timestamp - $date1_timestamp;
    $days=($diff/(60*60*24));

    echo "兩個日期相差 $days 天<br>";

    ?>
</body>
</html>