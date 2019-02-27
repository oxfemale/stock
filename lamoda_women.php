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

$url = 'https://www.lamoda.ru/c/4152/default-men/?labels=1748&sf=381&display_locations=outlet&sitelink=topmenuM&l=11&page=1';
$file = curl_get_contents($url);
$doc = phpQuery::newDocument($file);
$urls = array();
$full = array();


for($i = 1; $i<1000; $i++){
    $url = 'https://www.lamoda.ru/c/4153/default-women/?labels=1748&sf=381&display_locations=outlet&sitelink=topmenuW&l=12page&page=';
    $url .= (string)$i;
    
    $file = curl_get_contents($url);
    $doc = phpQuery::newDocument($file);
    if($doc->find(".products-list-item__link.link") == ''){
        break;
    }else{

foreach($doc->find(".products-list-item__link.link") as $it){
    $it = pq($it);
    $link = "https://www.lamoda.ru";
    $link .= (string)$it->attr('href');
    array_push($p_link,$link);
    array_push($img,(string)$it->find('.products-list-item__img')->attr('src'));
    array_push($price_bf,(string)$it->find('.price__old'));
    array_push($price_af,(string)$it->find('price__new'));
    $str = (string)$it->find('.products-list-item__brand')->clone()->children()->remove()->end()->text();
    $str .= (string)$it->find('.products-list-item__type');
    array_push($name,$str);
    $p_desc[] = null;
    $start[] = null;
    $end[] = null;
    array_push($p_group,'Lamoda_women');
    

        }

    }
    
   echo $i;
   echo '<br>';
}


print_r($p_link);

?>