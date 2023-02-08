<?php require 'simple_html_dom.php';

	$html = file_get_html("https://covid19.gov.ua/");
	$element = $html->find(".field-value");

	 //echo $element[1] , $element[2] , $element[3] , $element[4];


	$html2 = file_get_html("http://calendar.yuretz.ru/kakoesegodnyachislo/");
	$element2 = $html2->find(".kakoesegodnyachislo");


	

	//for ($i = 0; $i < count($element2); $i++) {
		//echo $element2[$i];
	//}  