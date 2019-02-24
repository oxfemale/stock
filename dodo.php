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

     $url = 'https://dodopizza.ru/moscow/bonusactions';
     $file = curl_get_contents($url);
     $doc = phpQuery::newDocument($file);
     foreach($doc->find('.bonus-actions__section-row .bonus-actions__banner .bonus-actions__images') as $it){
       $it = pq($it);
       array_push($img,$it->attr('src') ); 
       array_push($p_link,$url);
       array_push($p_group,'DODO');
       $price_bf[] = null;
       $price_af = null;
       $start[] = null;
       $end[] = null;
     }
    foreach($doc->find('.bonus-actions__section-row .bonus-actions__banner') as $it){
      $it = pq($it);
      array_push($name,$it->find('h2')); 
      array_push($p_desc,$it->find('.bonus-actions__desc p')); 
      
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



     


?>