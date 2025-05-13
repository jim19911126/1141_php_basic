<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串處理</title>
    <style>
        h1{
            text-align: center;
            font-size: 1.5em;
            color: blue;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
                }
    </style>
</head>
<body>
    <h1>字串處理</h1>
    <h2>字串取代</h2>
    <p>
        將”aaddw1123”改成”*********”
    </p>

    <?php
    $str="aaddw1123";
    
    $str=str_replace(str_split($str,1),"*",$str);
    
    echo $str;
    ?>
    
    <h2>字串分割</h2>
    <p>
        將”this,is,a,book”依”,”切割後成為陣列
    </p>

    <?php
    $str="this,is,a,book";
    $str=explode(",",$str);

    echo "<pre>";
    print_r($str);
    echo "</pre>";

    ?>

     <h2>字串取用</h2>
    <p>
        將” The reason why a great man is great is that he resolves to be a great man”只取前十字元成為” The reason…”
    </p>

    <?php
    $str="The reason why a great man is great is that he resolves to be a great man";
    $str=substr($str,0,10) . "...";

    echo $str;

    ?>

    <?php

    $str="The reason why a great man is great is that he resolves to be a great man";
    $count= substr_count($str,"great");

    echo "great 出現了 " . $count . " 次";

    ?>

    <h2>尋找字串與HTML、css整合應用</h2>
    <p>給定一個句子，將指定的關鍵字放大
“學會PHP網頁程式設計，薪水會加倍，工作會好找”
請將上句中的 “程式設計” 放大字型或變色.</p>

<?php
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keyword="薪水會加倍";

$style="font-size:5em;color:blue;";

$str=str_replace("$keyword", "<span style='$style'>$keyword</span>",$str);

echo $str;

?>

<hr>
<?php

$str="Gaga’s mixture of humor and earnestness is, if not outright mayhem, then energetically disruptive. Alongside the themes of fame and identity crisis is a rhapsody for a werewolf (“Last week, you left somebody dead, you’re so misunderstood”) and the possibility of turning an object of affection into a skin suit (that would be an era-defining look for sure). Gaga’s absurdist sensibilities have long been an underrated facet of her work—probably because she’s so good at delivering them with a straight face. The many ways she wields her voice—another Born This Way throwback—render these songs as one-act plays big on theatricality. She delivers the last bit of “Killah” with a pronounced Dracula quaver and approaches the verses of “Vanish Into You” with a self-consciously corny swagger (its chorus is augmented with backup vocals so high, they’re shrieky and surreal). She purrs like Debbie Harry and shouts like Courtney Love, and she isn’t afraid to get ugly. On “Blade of Grass,” a song about her engagement to Polansky, she sounds so frazzled you have to wonder what would have happened to her if love hadn’t intervened. Her full-throated sincerity sells her Grammy-winning, chart-topping Bruno Mars duet, “Die With a Smile,” a passionate sing-along that’s the best-case scenario for Gaga’s MOR tendencies. At MAYHEM’s resolution is love.";
echo $str;

$keyword="Gaga";
$keyword2="MAYHEM";
$style="font-size:3em;color:blue;";
$style2="font-size:5em;color:red;";
$str=str_replace("$keyword", "<span style='$style'>$keyword</span>",$str);
$str=str_replace("$keyword2", "<span style='$style2'>$keyword2</span>",$str);

echo"<hr>";
echo $str;

?>

<hr>
<?php
$str="SpaceX創辦人伊隆馬斯克（Elon Musk）近日重申人類應移居火星，作為對抗地球最終毀滅的保險政策。根據美國國家航空暨太空總署（NASA）與日本東邦大學的最新研究，地球上的生命可能會在約10億年後因太陽演化而面臨全面滅絕。<br>
根據外媒報導，這項研究發表於《自然地球科學》（Nature Geoscience），科學家利用超級電腦與氣候模型模擬太陽長期變化對地球環境的影響。他們進行超過40萬次模擬，發現隨著太陽亮度與溫度逐漸增加，地球將面臨氣候極端化與氧氣逐步消失的危機，最終導致有氧生命無法存活，僅剩下厭氧微生物得以苟延殘喘。<br>
研究指出，地球大氣中氧氣的穩定存在將於約10.8億年後崩潰，誤差範圍約為1.4億年。此後，地表氣候將變得極度不穩，海洋沸騰、生命系統瓦解，預示著地球生物圈的終結。<br>
馬斯克接受福斯新聞專訪時表示，「最終地球上的所有生命都將被太陽毀滅。這是推動我致力於火星殖民的原因之一。」他形容火星是「集體生命的壽險」，人類若想延續文明，必須成為「多行星物種」。太陽預計在約50億年後進入紅巨星階段，屆時太陽體積將大幅膨脹，可能吞噬水星、金星甚至地球，這一過程將徹底摧毀地球現有的物理結構與環境。<br>
面對長遠的宇宙命運，馬斯克提出希望未來20年內在火星建立可容納百萬人的自給自足城市。他強調：「如果火星必須依賴地球補給才能生存，那我們並未真正建立生命的保險機制。只有當火星可以獨立生存時，人類的未來才真正有保障。」<br>
美國政府也展現出對太空殖民的支持，川普總統任內曾批准對NASA的預算重組，將60億美元由國際太空站營運與研究計畫中轉移至載人太空任務，包括火星探索。<br>
SpaceX目前正全力推進星際飛船（Starship）計畫，該火箭系統為全球最強大，設計可重複使用，大幅降低發射成本。2025年初進行的兩次試射雖未完全成功，但展現出強勁的技術進展。馬斯克計畫最快於明年發射無人火星任務，並於四年內實現載人登陸。<br>";
echo $str;
$keywords=["馬斯克","火星","地球","火箭","NASA"];
$style=["font-size:1.1em;color:green;",
        "font-size:1em;color:red;",
        "font-size:1.2em;color:blue;",
        "font-size:1.3em;color:orange;",
        "font-size:1.4em;color:purple;"];
//在指定的關鍵字中加上url連結
$url=[];

foreach($keywords as $index => $keyword){
    $str=str_replace("$keyword","<span style='$style[$index]'>$keyword</span>",$str);
}        

echo "<hr>";
echo $str;
?>

</body>
</html>