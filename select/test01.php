<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>成績判斷</h2>
    <?php

$score="90";

if(!is_numeric($score)){
    echo "錯誤：成績必須是數字！";
    exit;
}

if ($score < 0 || $score > 100) {
    echo "錯誤：成績必須在 0 到 100 之間！";
    exit;
}

echo "您的成績是 ".$score." 分";
echo "<br>";
echo "判定結果為 "; 

if($score>=60){
    echo "<span style= 'color:green'>及格</span>";
}else{
    echo "<span style= 'color:red'>不及格</span>";
}
echo "<br>";

?>

<h2>成績等級判斷</h2>
<?php
if ($score >= 90) {
    $level = "A";
} else if ($score >= 80) {
   $level = "B";
} else if ($score >= 70) {
   $level = "C";
} else if ($score >= 60) {
   $level = "D";
} else {
   $level = "E";
}
echo "您的成績等級是：<strong>$level</strong><br>";
?>

<h2>評語</h2>

<?php
switch($level){
    case "A":
        echo "表現得很好要保持唷";
    break;
    case "B":
        echo "還有努力空間";
    break;
    case "C":
        echo "要再加油一點";
    break;
    case "D":
        echo "必須要更多練習喔!";
    break;
    case "E":
        echo "要不要退訓?";
    break;
}

?>

</body>
</html>