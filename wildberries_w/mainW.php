<?php
ini_set('max_execution_time', 1000);

include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 
require 'parce_W.php';
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

$arr = array("platiya","footbolki","bruki","bluzki","cardigani","vodolazki","longslives","yubki","topi","jeens","pidjaki","home","tuniki","combinezoni","kigurumi","kostumi","jileti","mantii","tolstovki","hudi","svitshoti");
$urls = array(
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/platya?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/futbolki-i-topy?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/bryuki-i-shorty?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/bluzki-i-rubashki?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/dzhempery-i-kardigany?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/vodolazki?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/longslivy?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/yubki?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/verhnyaya-odezhda?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/dzhinsy-dzhegginsy?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/pidzhaki-i-zhakety?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/odezhda-dlya-doma?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/tuniki?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/kombinezony-polukombinezony?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/kigurumi?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/kostyumy?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/zhilety?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/mantii?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/tolstovki?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/hudi?pagesize=100&sort=sale&page=",
    "https://www.wildberries.ru/catalog/zhenshchinam/odezhda/svitshoty?pagesize=100&sort=sale&page="
);
$cat = array();
for($i = 0;$i<sizeof($arr);$i++){
    $cat[$i] = 'lamoda-';
    $cat[$i] .= $arr[$i];
}
for($i = 0;$i<sizeof($arr);$i++){
    parce_it(2,$urls[$i],$cat[$i],$arr[$i],$p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);

    sleep(1);
}
print_all($p_link,$price_bf,$price_af,$img,$name,$p_desc,$start,$end,$p_group,$p_brand,$p_category,$gender);
