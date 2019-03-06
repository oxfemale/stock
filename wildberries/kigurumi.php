<?php
ini_set('max_execution_time', 1000);

include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 
require 'parce.php';
require 'print.php';


function curl_get_contents($url)
 {
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_PROXY, "165.227.35.172"); //your proxy url
// curl_setopt($ch, CURLOPT_PROXYPORT, "8080"); // your proxy port number
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
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

$url = "https://www.wildberries.ru/catalog/muzhchinam/odezhda/kigurumi?pagesize=100&sort=sale&page=";

$file = curl_get_contents($url);
$doc = phpQuery::newDocument($file);


parce_it(2,$url,'wildberries-kigurumi','kigurumi',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category);
print_all($p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category);

           
            

?>