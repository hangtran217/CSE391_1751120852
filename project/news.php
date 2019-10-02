<?php
$url='http://ntt.edu.vn/web/'; // tạo biến url cần lấy
 
$lines_array=file($url); // dùng hàm file() lấy dữ liệu theo url
 
$lines_string=implode('',$lines_array); // chuyển dữ liệu lấy được kiểu mảng thành một biến string
 
echo $lines_string; // hiển thị dữ liệu
?>
<?php
$url='https://vnexpress.net/rss/so-hoa.rss';
$lines_array=file($url);
$lines_string=implode('',$lines_array);
 
 
$xml = simplexml_load_string($lines_string);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} 
else
{
    foreach ($xml->xpath('//channel/item') as $items)
    {       
        echo "<a target='_blank' href='" . $items->link . "'>" .  $items->title . "</a><br/>";
        echo $items->description . "<br/><br/>";
    }
}
?>