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


for($j=1;$j<30;$j++){
$url = "https://vandrouki.ru/page/";
$url .= (string)$j;
$url .= '/';
$file = curl_get_contents($url);
$doc = phpQuery::newDocument($file);
$doc->find('#primary .post-thumb a img');
 foreach($doc->find('#primary .post-thumb ') as $it){
    $it = pq($it);
    array_push($img,$it->find('a img')->attr('src') );
    array_push($name,$it->find('a')->attr('title') );
    array_push($p_link,$it->find('a')->attr('href') );
    array_push($p_group,"Vandrouki");
    $end[] = null;
    $price_bf[]  = null;
	$price_af[] = null;

 }
 foreach($doc->find('#primary .entry-content ') as $it){
    $it = pq($it);
    array_push($p_desc,(string)$it->find('p:first'));
 }

 foreach($doc->find('#primary .entry-meta-header') as $it){
    $it = pq($it);
    array_push($start,(string)$it->find('span'));
 }
 
 for($i = 0;$i<sizeof($name);$i++){
    $name[$i] = preg_replace('^Посмотреть:^','',$name[$i]);
 }
 for($i = 0;$i<sizeof($p_desc);$i++){
    $p_desc[$i] = preg_replace('^Читать далее...^','',$p_desc[$i]);
 }

   for($i = 0;$i<sizeof($name);$i++){
       echo $img[$i];
       echo '<br>';
       echo $name[$i];
       echo '<br>';
       echo $p_link[$i];
       echo '<br>';
       echo $p_desc[$i];
       echo '<br>';
       echo $start[$i];
       echo '<br>';
       echo $end[$i];
       echo '<br>';
       echo $price_bf[$i];
       echo '<br>';
       echo $price_af[$i];
       echo '<br>';
       echo $p_group[$i];
       echo '<br>';
  }
}

//$it = pq($doc);
//echo $doc;




?>