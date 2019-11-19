<?php
$articleLink="http://library.antosha.pro/martin_iden.txt"; //ссылка на статью, в данном случае книга
$articleText=file_get_contents($articleLink); //получение данных по ссылке и перенос их в переменную
	if(mb_strlen($articleText,'UTF-8')<200) //проверка количества символов в кодировке utf-8 и начало условия сравнения
	{
		echo str_replace('\n', '', strip_tags($articleText)); //удаляем переносы, а так же, html тэги и выводим полностью текст
	}
	else
	{	 
 		$articlePreview = str_replace('\n', '', mb_substr(strip_tags($articleText), 0, 200,'UTF-8'));  //удаляяем переносы и html тэги
 		//урезаем текст до 200 символов, кодировки utf-8
 		$words = explode( " ", $articlePreview ); //разбираем текст на слова
 		$one = array_pop($words); //берем последнее слово, урезаем массив на 1 элемент
 		$two = array_pop($words); //берем последнее слово, урезаем массив на 1 элемент
 		$three = array_pop($words); //берем последнее слово, урезаем массив на 1 элемент
 		$lastwords = $three . " " . $two . " " . $one; //складываем слова в обратном порядке
	 	echo implode(" ", $words )."<a href=\"{$articleLink}\">{$lastwords}...</a>"; //выводим урезанную версию, а так же, конкатенируем к ней последние слова, точки и выводим как ссылку на статью 
	}
	//проблеемы могут быть связаны с кодировкой, к примеру, если кодировка будет ANSI, Unicode и т.д. 
	?> 