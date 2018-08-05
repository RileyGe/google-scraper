<?php
// ini_set ( 'max_execution_time', 0);
// include 'GoogleScraper.class.php';
// $obj=new GoogleScraper();
// Pass your keyword and proxy ip here.
$keyword = '圣杯';
$page = 1;
$pageSize = 20;
$data=file_get_contents('http://www.google.com/search?q='.$keyword.'+site%3Abihu.com&safe=off&ie=utf8&num='.$pageSize.'&start='.($page*$pageSize-$pageSize));
echo $data;
preg_match_all('@<div\s*class="g">\s*<h3\s*class="r">\s*<a[^<>]*href="[^<>]*?q=(https://[a-zA-Z.]*bihu.com/[^<>]*)&amp;sa[^<>]*>(.*)</a>\s*</h3>[\s\S]*<span\s*class="st">([\s\S]*)</span>@isU', $data, $matches);
for ($j = 0; $j < count($matches[1]); $j++) {
    echo $matches[1][$j];
    echo "</br>";
}
for ($j = 0; $j < count($matches[2]); $j++) {
    echo $matches[2][$j];
    echo "</br>";
}
echo "</br>";
echo "</br>";
echo "</br>";
for ($j = 0; $j < count($matches[3]); $j++) {
    echo $matches[3][$j];
    echo "</br>";
}
// $arr=$obj->getUrlList(urlencode('car'),1);
// foreach($arr as $key=>$value){
//     echo $value;
// }

?>
