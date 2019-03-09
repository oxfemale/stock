<?php
ini_set('max_execution_time', 1000);

include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 
require 'parceL.php';
require 'C:\Apache24\htdocs\www\parcers\proxy-check\wildberries\print.php';


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
$gender = array();

$url = "https://www.lamoda.ru/c/517/clothes-muzhskie-bryuki/?labels=1748&display_locations=all&page=";




parce_it(3,$url,'lamoda-bruki','bruki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
//print_all($p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/479/clothes-muzhskaya-verkhnyaya-odezhda/?labels=1748&sf=381&display_locations=outlet$page=";
parce_it(3,$url,'lamoda-topi','topi',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
//print_all($p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
$url = "https://www.lamoda.ru/c/497/clothes-muzhskoy-trikotazh/?labels=1748&sf=381&display_locations=outlet$page=";
parce_it(3,$url,'lamoda-tolstovki','tolstovki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/513/clothes-muzhskie-d-insy/?labels=1748&sf=381&display_locations=outlet$page=";
parce_it(3,$url,'lamoda-jeens','jeens',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/3039/clothes-topyi-muzhskie/?labels=1748&sf=381&display_locations=outlet$page=";
parce_it(2,$url,'lamoda-mayki','mayki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/523/clothes-muzhskoe-nizhneye-belyo/?labels=1748&sf=381&display_locations=outlet$page=";
parce_it(2,$url,'lamoda-niz_beliyo','niz_beliyo',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/4121/socks-socks/?labels=1748&sf=381&display_locations=outlet$page=";
parce_it(2,$url,'lamoda-socks','socks',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/7528/clothes-bigsize-clothes-men/?labels=1748&sf=381&display_locations=outlet$page=";
parce_it(2,$url,'lamoda-plus_size','plus_size',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);            
$url = "https://www.lamoda.ru/c/3043/clothes-pid-aki-kostumi-muzhskie/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-kostumi','kostumi',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/515/clothes-muzhskie-rubashki-i-sorochki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-rubashki','rubashki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/3042/clothes-sportivnye-kostyumy-muzhskie/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-sport_kostumi','sport_kostumi',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2508/clothes-tolstovki-i-olimpiyki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-tolstovki_olimpiyki','tolstovki_olimpiyki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2512/clothes-muzhskie-futbolki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-footbolki','footbolki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/519/clothes-muzhskie-shorty/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-shorti','shorti',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);





?>