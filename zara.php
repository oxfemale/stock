<?php

// $document = phpQuery::newDocument($html);
// $echo = $document->find('.content');
ini_set('max_execution_time', 1000);
echo "fgdg";
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
// $url = 'https://www.zara.com/ru/ru/muzhchiny-specialnye-ceny-l806.html?v1=1113505';
// $file = curl_get_contents($url);
// $doc = phpQuery::newDocument($file);
// $evr = $doc->find('.price _product-price');
// echo $evr;



	 $url;
	 $file;
	 $doc;
	 $p_link = array();
	 $price_bf  = array();
	 $price_af = array();
	 $img = array();
     $name = array();
     $p_desc = array();
     $start = array();
     $end = array();
     $p_group = array();

	
		$url = "https://www.zara.com/ru/ru/muzhchiny-specialnye-ceny-l806.html?v1=1113505";
		$file = curl_get_contents($url);
		$doc = phpQuery::newDocument($file); 
	

	
        $count = 0;
		foreach ($doc->find('._groups-wrap ul li') as $ev ) {


		    $ev = pq($ev);
		    if(($ev->find('a:eq(0)')->attr('href'))!=""){ 
			    $p_link[] = $ev->find('a:eq(0)')->attr('href');
			    $price_bf[] = $ev->find('.price._product-price .line-through')->attr('data-price');
                $price_af[] = $ev->find('.price._product-price .sale')->attr('data-price');
                $count++;

				}

		}

		for($i=0;$i<$count;$i++){
			$file1 = curl_get_contents($p_link[$i]);
			$doc1 = phpQuery::newDocument($file1);
			$img[] = $doc1->find('._seoImg.main-image:eq(0)')->attr('href');
            $name[] = (string)$doc1->find('.image-big._img-zoom:eq(0)')->attr('alt');
            $p_desc[] = null;
            $start[] = null;
            $end[] = null;
            array_push($p_group, "Zara");
            
            
	
        }	
        for($i=0;$i<sizeof($name);$i++){
            $name[$i] = preg_replace('^изображение 1 из^','',$name[$i]);

        }
        

		for($i=0;$i<sizeof($p_link);$i++){
			echo $p_link[$i];
			echo '<br>';
			echo $price_bf[$i];
			echo '<br>';
			echo $price_af[$i];
			echo '<br>';
			echo $img[$i];
			echo '<br>';
            echo $name[$i];
            echo '<br>';
            echo $p_desc[$i];
            echo '<br>';
            echo $start[$i];
            echo '<br>';
            echo $end[$i];
            echo '<br>';
            echo $p_group[$i];
            echo '<br>';

            
		}

	











?> 