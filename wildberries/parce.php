<?php
include_once 'C:\Apache24\htdocs\www\parcers\libs\phpQuery-onefile.php'; 




function parce_it($iter,$url,$group,$category,&$p_link,&$price_bf,&$price_af,&$img,&$name,&$p_desc,&$start,&$end,&$p_group,&$p_brand,&$p_category){

  
    for($i=1;$i<$iter;$i++){
        $url .= (string)$i;
        $file = curl_get_contents($url);
        $doc = phpQuery::newDocument($file);
    
        foreach($doc->find('.dtList') as $it){
    
            $it = pq($it);
            array_push($p_link,(string)$it->find('.ref_goods_n_p')->attr('href'));
            if((string)$it->find('.thumbnail')->attr('data-original')==''){
                array_push($img, (string)$it->find('.thumbnail')->attr('src'));
            }
            else{
                array_push($img, (string)$it->find('.thumbnail')->attr('data-original'));
            }
            array_push($price_af, (string)$it->find('.lower-price')->clone()->children()->remove()->end()->text());
            array_push($price_bf, (string)$it->find('.price-old-block del')->clone()->children()->remove()->end()->text());
            array_push($p_brand,(string)$it->find('.brand-name')->clone()->children()->remove()->end()->text());
            array_push($name,(string)$it->find('.goods-name')->clone()->children()->remove()->end()->text());
            array_push($p_group,$group);
            $p_desc[] = null;
            $start[] = null;
            $end[] = null;
            array_push($p_category,$category);
    
        }
    }

    


}



?>