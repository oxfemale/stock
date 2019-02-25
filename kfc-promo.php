<?php
ini_set('max_execution_time', 1000);

include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 

function curl_get_contents($url)
 {
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   $data = curl_exec($ch);
   curl_close($ch);
   return $data;
 }
$p_link = array();
$price_bf  = array();
$price_af = array();
$img = array();
$name = array();
$p_desc = array();
$start = array();
$end = array();
$p_group = array();


$url = "https://www.kfc.ru/promo";
$path = "https://www.kfc.ru";
$file = curl_get_contents($url);
$doc = phpQuery::newDocument($file);

foreach($doc->find('.col-12.col-sm-6.promo-list__item') as $it){
    $it = pq($it);
    $path = "https://www.kfc.ru";
    array_push($p_desc,(string)$it->find('.promo-list__description')->clone()->children()->remove()->end()->text());
    array_push($name,(string)$it->find('.promo-list__caption')->clone()->children()->remove()->end()->text());
    array_push($img,(string)$it->find('.app__grid__item-content')->attr('style'));
    $path .= (string)$it->attr('href');
    array_push($p_link,$path);
    array_push($p_group,"KFC-PROMO");
    $start[] = null;
    $end[] = null;
    $price_af[] = null;
    $price_bf[] = null;

    
}

for($i=0;$i<sizeof($img);$i++){
    $img[$i] = preg_replace('^background-image:url\(^','',$img[$i]);
    $img[$i] = preg_replace('^\)^','',$img[$i]);


}


print_r($price_bf);
echo '<br>';
print_r($price_af);
echo '<br>';
print_r($name);
echo '<br>';
print_r($p_desc);
echo '<br>';
print_r($img);
echo '<br>';
print_r($p_link);
echo '<br>';
print_r($p_group);
echo '<br>';
print_r($start);
echo '<br>';
print_r($end);
echo '<br>';

?>