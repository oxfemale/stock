<?php
include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 




function parce_it($iter,$url,$group,$category,&$p_link,&$price_bf,&$price_af,&$img,&$name,&$p_desc,&$start,&$end,&$p_group,&$p_brand,&$p_category,&$gender){

  
    for($i=1;$i<$iter;$i++){
        $link = $url;
        $link .= (string)$i;
        
        if($i%2==0){
            sleep(1);
        }
        $file = curl_get_contents($link);
        $doc = phpQuery::newDocument($file);
    
        foreach($doc->find('.dtList') as $it){
    
            $it = pq($it);
            array_push($p_link,(string)$it->find('.ref_goods_n_p')->attr('href'));
            if((string)$it->find('.thumbnail')->attr('data-original')==''){
                $str = (string)$it->find('.thumbnail')->attr('src');
                $str = preg_replace('^c246x328^','big',$str);
                array_push($img, $str);
            }
            else{
                $str = (string)$it->find('.thumbnail')->attr('data-original');
                $str = preg_replace('^c246x328^','big',$str);
                array_push($img,$str);
            }
            $pricea = (string)$it->find('.lower-price')->clone()->children()->remove()->end()->text();
            $pricea = preg_replace('~\D+~','',$pricea);
            array_push($price_af, $pricea);
            $priceb = (string)$it->find('.price-old-block del')->clone()->children()->remove()->end()->text();
            $priceb = preg_replace('~\D+~','',$priceb);
            array_push($price_bf, $priceb);
            array_push($p_brand,(string)$it->find('.brand-name')->clone()->children()->remove()->end()->text());
            array_push($name,(string)$it->find('.goods-name')->clone()->children()->remove()->end()->text());
            array_push($p_group,$group);
            array_push($gender,'M');

            $p_desc[] = null;
            $start[] = null;
            $end[] = null;
            array_push($p_category,$category);
    
        }
    }

    


}



?>