<?php
ini_set('max_execution_time', 1000);

include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 
require 'parceLW.php';
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

$url = "https://www.lamoda.ru/c/399/clothes-bluzy-rubashki/?labels=1748&sf=381&display_locations=outlet&page=";




parce_it(3,$url,'lamoda-bluzi','bluzi&rubashki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);

sleep(1);
$url = "https://www.lamoda.ru/c/4418/clothes-body/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-body','body',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);

sleep(1);
$url = "https://www.lamoda.ru/c/401/clothes-bryuki-shorty-kombinezony/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-bruki','bruki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);

sleep(1);
$url = "https://www.lamoda.ru/c/357/clothes-verkhnyaya-odezhda/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-topi','topi',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/371/clothes-trikotazh/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-tolstovki','tolstovki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);

$url = "https://www.lamoda.ru/c/397/clothes-d-insy/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-jeens','jeens',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/4651/clothes-dom-odejda/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-home','home',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/4184/clothes-coveralls/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-combinezoni','combinezoni',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/3002/clothes-plyajnaya-odejda/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-plyaz','plyaz',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/709/clothes-nizhneye-belyo/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-niz_beliyo','niz_beliyo',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/4112/default-stockings/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-socks','socks',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2937/clothes-clothes-big-size/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-plus_size','plus_size',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/367/clothes-pidzhaki-zhaketi/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-kostumi','kostumi',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/369/clothes-platiya/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-platiya','platiya',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/415/clothes-kostyumy/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-sport_kostumi','sport_kostumi',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2474/clothes-tolstovki-olimpiyki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-tolstovki_olimpiyki','tolstovki_olimpiyki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2474/clothes-tolstovki-olimpiyki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-tolstovki_olimpiyki','tolstovki_olimpiyki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2627/clothes-topy/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-mayki','mayki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/4748/clothes-womtuniki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-tuniki','tuniki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2478/clothes-futbolki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-footbolki','footbolki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/2485/clothes-shorty/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-shorti','shorti',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);
$url = "https://www.lamoda.ru/c/423/clothes-yubki/?labels=1748&sf=381&display_locations=outlet&page=";
parce_it(2,$url,'lamoda-yubki','yubki',$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
sleep(1);


print_all($p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
