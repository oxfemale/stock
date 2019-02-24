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

     $path = 'https://pizzasushiwok.ru';
     $url = 'https://pizzasushiwok.ru/promotions/';
     $file = curl_get_contents($url);
     $doc = phpQuery::newDocument($file);
    
     foreach($doc->find('.events-item.pointer') as $it){
         $path = 'https://pizzasushiwok.ru';
         $it = pq($it);
         $path .= (string)$it->find('img:eq(0)')->attr('src');
        
         array_push($img,$path);
         array_push($p_group,'PSW');
         array_push($p_desc,(string)$it->find('p:eq(0)'));
         $price_bf[] = null;
         $price_af[] = null;
         $start[] = null;
         $end[] = null;


        
     }
     foreach($doc->find('.events-item.pointer h2') as $it){
        $it = pq($it);
        array_push($name,(string)$it->find('a')->clone()->children()->remove()->end()->text());
        $path = 'https://pizzasushiwok.ru';
        $path .= (string)$it->find('a')->attr('href');
        array_push($p_link,$path);

     }
     foreach($doc->find('.events-item.pointer h3') as $it){
        $it = pq($it);
        array_push($name,(string)$it->find('a')->clone()->children()->remove()->end()->text());
        $path = 'https://pizzasushiwok.ru';
        $path .= (string)$it->find('a')->attr('href');
        array_push($p_link,$path);

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