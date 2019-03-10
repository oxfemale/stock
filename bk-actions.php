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
$p_brand = array();
$p_category = array();
$gender = array();



$url = "https://burgerking.ru/actions";
$path = "https://burgerking.ru/";
$file = curl_get_contents($url);
$doc = phpQuery::newDocument($file);

foreach($doc->find('.container-fluid.hero .carouselItem') as $it){
    $it = pq($it);
    //echo $it;
    //echo $it->find('.big-img')->attr('src');
    array_push($img, (string)$it->find('.big-img')->attr('src'));
    if((string)$it->find('.bk-btn.bk-btn-orange')->attr('href')!=""){
        array_push($p_link, (string)$it->find('.bk-btn.bk-btn-orange')->attr('href'));
    }
    else{
        array_push($p_link,$url);
    }
    //array_push($p_link, (string)$it->find('.bk-btn.bk-btn-orange')->attr('href'));
    // array_push($p_link,$url);
    array_push($p_group,"BK-ACTIONS");
    $p_brand[] = null;
    $p_category[] = null;
    $gender[] = null;
    $price_bf[]  = null;
    $price_af[] = null;
    $name[] = null;
    $p_desc[] = null;
    $start[] = null;
    $end[] = null;

}
 print_r($img);
 echo '<br>';
 print_r($p_link);
 echo '<br>';

?>
