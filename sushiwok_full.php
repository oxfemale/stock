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

$url = 'https://sushiwok.ru/msk/menu/rolly/?is_action=true';
$path = "https://sushiwok.ru";
$file = curl_get_contents($url);
$doc = phpQuery::newDocument($file);
$urls = array();
$full = array();
$action_str = "?is_action=true";

foreach($doc->find('.sticky-menu__inner a') as $it){
    $it = pq($it);
    array_push($urls,(string)$it->attr('href'));
}

for($j = 0;$j<sizeof($urls);$j++){
    $path = 'https://sushiwok.ru';
    $path .= $urls[$j];
    $path .= $action_str;
    array_push($full,$path);
    // echo $path;
    // echo '<br>';
}
 unset($full[1]);
 unset($full[9]);
 unset($full[10]);
foreach($full as $ch){
    $file = curl_get_contents($ch);
    $doc = phpQuery::newDocument($file);
foreach($doc->find('.lazyImage.card__image') as $it){
    $it = pq($it);
    $path = "https://sushiwok.ru";
    $path .= (string)$it->attr('src');
   
    array_push($img,$path);
    //echo $it;
    array_push($name,(string)$it->attr('title'));
}
foreach($doc->find('.card__more-content') as $it){
    $it = pq($it);
    array_push($p_desc,(string)$it ->find('span:eq(1)')->clone()->children()->remove()->end()->text());

}
foreach($doc->find('.card__price__current--is-action') as $it){
    $it = pq($it);
    
    array_push($price_af,(string)$it->find('span:eq:0')->clone()->children()->remove()->end()->text());

}
    
for($i = 0;$i<sizeof($price_af);$i++){
    //echo $price_af[$i];
    //echo '<br>';
    $price_bf[] = null;
    $start[] = null;
    $end[] = null;
    array_push($p_link,$url);
    array_push($p_group,"sushiwok");

}

}

for($i = 0;$i<sizeof($img);$i++){
    echo $img[$i];
     echo '<br>';
      echo $p_group[$i];
      echo '<br>';
     echo $p_desc[$i];
     echo '<br>';
     echo $p_link[$i];
     echo '<br>';
     echo $name[$i];
     echo '<br>';
     echo $start[$i];
     echo '<br>';
     echo $end[$i];
     echo '<br>';
       echo $price_bf[$i];
       echo '<br>';
       echo $price_af[$i];
       echo '<br>';

 }

 ?>