<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>練習</h2>
<?php
    $math = [
    "數學" => [ "小明" => 87, "阿美" => 76, "小莉" => 90 ],
];
    foreach($math as $subject => $student) {
        echo $subject . ": <br>";
    
        foreach ($student as $name => $score){
        echo $name . ":" . $score . "分 <br>";
    }
    echo "<br>";
    }
?>
</body>
</html>