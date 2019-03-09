<?php
include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 




function parce_it($iter,$url,$group,$category,&$p_link,&$price_bf,&$price_af,&$img,&$name,&$p_desc,&$start,&$end,&$p_group,&$p_brand,&$p_category,&$gender){

    for($i = 1; $i<$iter; $i++){
        $link = $url;
        $link .= (string)$i;
        if($i % 2 == 0){
            sleep(1);
        }
        $file = curl_get_contents($url);
        $doc = phpQuery::newDocument($file);
        if($doc->find(".products-list-item__link.link") == ''){
            break;
        }
    
        foreach($doc->find(".products-list-item__link.link") as $it){
            $it = pq($it);
            if((string)$it->find('.price__new')==''){
                continue;
            }
            if($it->find('.products-list-item__cd.js-cd-timer')->attr('data-countdown') !=''){
                $str = (string)$it->find('.products-list-item__cd.js-cd-timer')->attr('data-countdown');
                $pos = stripos($str,"discount");
                $str =  mb_substr($str,$pos,15);
                $str = preg_replace("/[^0-9]/", '', $str);
               
                $fin_price = $it->find('.price__new');
                $fin_price = preg_replace("/[^0-9]/", '', $fin_price);
                $fin_price = $fin_price-($fin_price*($str / 100));
                array_push($price_af,$fin_price);
                $desc = "без промокода цена составит:";
                $desc .= (string)$it->find('.price__new');

                array_push($p_desc, $desc);
                
            }
            else{
                $str = (string)$it->find('.price__new');
                $str=preg_replace("/[^0-9]/", '', $str);

                array_push($price_af,$str);
                $p_desc[] = null;

            }
            $linkIT = "https://www.lamoda.ru";
            $linkIT .= (string)$it->attr('href');
            array_push($p_link,$linkIT);
            array_push($img,(string)$it->find('.products-list-item__img')->attr('src'));
            $str = (string)$it->find('.price__old');
            $str=preg_replace("/[^0-9]/", '', $str);
            array_push($price_bf,$str);
           
            
            
            array_push($p_brand,(string)$it->find('.products-list-item__brand')->clone()->children()->remove()->end()->text());
            array_push($name,(string)$it->find('.products-list-item__type'));
            
            $start[] = null;
            $end[] = null;
            array_push($p_group,$group);
            array_push($p_category,$category);
            array_push($gender,'W');
            
        
                }  
       
    }


}

?>