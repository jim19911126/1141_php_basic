<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上日曆</title>
    <style>
        h1{
            text-align:center;
            color:blue;
        }
        table{
            min-width:60%;
            border-collapse:collapse;
            margin:0 auto;
        }
        td{
            border:1px solid blue;
            text-align:center;
            padding:5px 10px;
        }
        .today{
            background-color:yellow;
            font-weight:bold;
        }
        .other-month{
            background-color:gray;
            color:#aaa;
        }
        .holiday{
            background-color:pink;
            color:white;
        }
        tr:not(tr:nth-child(1)) td:hover{
            background-color:lightblue;
            cursor:pointer;
            font-size:16px;
            font-weight:bold;
        }
        .pass-date{
            /* background-color:lightgray; */
            color:#aaa;
        }
    </style>
</head>
<body>
 <h1>線上日曆</h1>  

 <?php
$today = date("Y-m-d");
$firstDay = date("Y-m-01");
$firstDayWeek = date("w", strtotime($firstDay));
$theDaysOfMonth=date("t", strtotime($firstDay));

?>
<h2 style='text-align:center;'><?=date("Y 年 m 月"); ?></h2>
 <table>
     <tr>
         <td>日</td>
         <td>一</td>
         <td>二</td>
         <td>三</td>
         <td>四</td>
         <td>五</td>
         <td>六</td>
     </tr>
<?php
for($i=0;$i<6;$i++){
    echo "<tr>";
    
    for($j=0;$j<7;$j++){
        $day=$j+($i*7)-$firstDayWeek;
        $timestamp = strtotime(" $day days", strtotime($firstDay));
        $date=date("Y-m-d", $timestamp);
        $class="";

        if(date("N",$timestamp)>5){
            $class=$class . " holiday";
        }

        if($today==$date){
            
            $class=$class . " today";
        }else if(date("m",$timestamp)!=date("m",strtotime($firstDay))){

            $class=$class ." other-month";
        }

        if($timestamp<strtotime($today)){
            $class=$class . " pass-date";
        }
        echo "<td class='$class' data-date='$date'>";
            echo date("d",$timestamp);
        echo "</td>";
    }

    echo "</tr>";

}


?>
</table>

</body>
</html>