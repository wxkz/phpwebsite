<?php

// VARIAVEIS DA API E DA SAIDA JSON

$apikey = "";
$json = file_get_contents("https://api.hgbrasil.com/weather?fields=only_results,temp,description,city_name,forecast,max,min,date,humidity,condition,time&key=" . $apikey . "&user_ip=remote");
$data = json_decode($json,true);

// PEGANDO INFORMAÇOES CLIMATICAS DO DIA ATUAL
// E SETANDO VARIAVEIS

$daynow =$data['date'];
$city =$data['city_name'];
$temp =$data['temp'];
$description =$data['description'];
// VAR QUE VAI ARMAZENAR A IMAGEM QUE SERA MOSTRADA
$imgid =1;
$imgdy = $imgid . ".png";

// CONTATENANDO DADOS DO DIA ATUAL


$statusnow ="Cidade: " . $city . "\n" . "Temperatura: " . $temp;
// $statusnow2 = $description . "\n" . $daynow;

// SETANDO INFORMAÇOES DOS DIAS

$date1 =$data['forecast']['0']['date'];
$min1 =$data['forecast']['0']['min'];
$max1 =$data['forecast']['0']['max'];
$description1 =$data['forecast']['0']['condition'];
// SETANDO TAMANHO DAS IMAGENS
$tamanho = 60;
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description1 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description1 ="Tempestade";
}
elseif ($description1 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description1 ="Granizo";
}
elseif ($description1 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description1 ="Chuva";
}
elseif ($description1 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description1 ="Nublado";
}
elseif ($description1 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description1 ="Neblina";
}
elseif ($description1 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description1 ="Dia Limpo";
}
elseif ($description1 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description1 ="Falha Na Comunicação Com A Api";
}
$img1 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";

$date2 =$data['forecast']['1']['date'];
$min2 =$data['forecast']['1']['min'];
$max2 =$data['forecast']['1']['max'];
$description2 =$data['forecast']['1']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description2 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description2 ="Tempestade";
}
elseif ($description2 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description2 ="Granizo";
}
elseif ($description2 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description2 ="Chuva";
}
elseif ($description2 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description2 ="Nublado";
}
elseif ($description2 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description2 ="Neblina";
}
elseif ($description2 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description2 ="Dia Limpo";
}
elseif ($description2 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description2 ="Falha Na Comunicação Com A Api";
}
$img2 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



$date3 =$data['forecast']['2']['date'];
$min3 =$data['forecast']['2']['min'];
$max3 =$data['forecast']['2']['max'];
$description3 =$data['forecast']['2']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description3 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description3 ="Tempestade";
}
elseif ($description3 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description3 ="Granizo";
}
elseif ($description3 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description3 ="Chuva";
}
elseif ($description3 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description3 ="Nublado";
}
elseif ($description3 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description3 ="Neblina";
}
elseif ($description3 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description3 ="Dia Limpo";
}
elseif ($description3 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description3 ="Falha Na Comunicação Com A Api";
}
$img3 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



$date4 =$data['forecast']['3']['date'];
$min4 =$data['forecast']['3']['min'];
$max4 =$data['forecast']['3']['max'];
$description4 =$data['forecast']['3']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description4 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description4 ="Tempestade";
}
elseif ($description4 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description4 ="Granizo";
}
elseif ($description4 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description4 ="Chuva";
}
elseif ($description4 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description4 ="Nublado";
}
elseif ($description4 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description4 ="Neblina";
}
elseif ($description4 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description4 ="Dia Limpo";
}
elseif ($description4 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description4 ="Falha Na Comunicação Com A Api";
}
$img4 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



$date5 =$data['forecast']['4']['date'];
$min5 =$data['forecast']['4']['min'];
$max5 =$data['forecast']['4']['max'];
$description5 =$data['forecast']['4']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description5 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description5 ="Tempestade";
}
elseif ($description5 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description5 ="Granizo";
}
elseif ($description5 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description5 ="Chuva";
}
elseif ($description5 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description5 ="Nublado";
}
elseif ($description5 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description5 ="Neblina";
}
elseif ($description5 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description5 ="Dia Limpo";
}
elseif ($description5 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description5 ="Falha Na Comunicação Com A Api";
}
$img5 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



$date6 =$data['forecast']['5']['date'];
$min6 =$data['forecast']['5']['min'];
$max6 =$data['forecast']['5']['max'];
$description6 =$data['forecast']['5']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description6 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description6 ="Tempestade";
}
elseif ($description6 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description6 ="Granizo";
}
elseif ($description6 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description6 ="Chuva";
}
elseif ($description6 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description6 ="Nublado";
}
elseif ($description6 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description6 ="Neblina";
}
elseif ($description6 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description6 ="Dia Limpo";
}
elseif ($description6 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description6 ="Falha Na Comunicação Com A Api";
}
$img6 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



$date7 =$data['forecast']['6']['date'];
$min7 =$data['forecast']['6']['min'];
$max7 =$data['forecast']['6']['max'];
$description7 =$data['forecast']['6']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description7 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description7 ="Tempestade";
}
elseif ($description7 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description7 ="Granizo";
}
elseif ($description7 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description7 ="Chuva";
}
elseif ($description7 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description1 ="Nublado";
}
elseif ($description7 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description7 ="Neblina";
}
elseif ($description7 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description7 ="Dia Limpo";
}
elseif ($description7 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description7 ="Falha Na Comunicação Com A Api";
}
$img7 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



$date8 =$data['forecast']['7']['date'];
$min8 =$data['forecast']['7']['min'];
$max8 =$data['forecast']['7']['max'];
$description8 =$data['forecast']['7']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description8 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description8 ="Tempestade";
}
elseif ($description8 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description8 ="Granizo";
}
elseif ($description8 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description8 ="Chuva";
}
elseif ($description8 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description8 ="Nublado";
}
elseif ($description8 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description8 ="Neblina";
}
elseif ($description8 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description8 ="Dia Limpo";
}
elseif ($description8 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description8 ="Falha Na Comunicação Com A Api";
}
$img8 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



$date9 =$data['forecast']['8']['date'];
$min9 =$data['forecast']['8']['min'];
$max9 =$data['forecast']['8']['max'];
$description9 =$data['forecast']['8']['condition'];
// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
if ($description9 == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$description9 ="Tempestade";
}
elseif ($description9 == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$description9 ="Granizo";
}
elseif ($description9 == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$description9 ="Chuva";
}
elseif ($description9 == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$description9 ="Nublado";
}
elseif ($description9 == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description9 ="Neblina";
}
elseif ($description9 == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$description9 ="Dia Limpo";
}
elseif ($description9 == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$description9 ="Falha Na Comunicação Com A Api";
}
$img9 = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";



// CONTATENANDO INFORMAÇOES DOS DIAS

$status1 = 
$img1 . "\n" . $date1 . "\n" . $description1 . "\n" . "Minima: " . $min1 . "\n" . "Maxima: " . $max1 . "\n";
$status2 = 
$img2 . "\n" . $date2 . "\n" . $description2 . "\n" . "Minima: " . $min2 . "\n" . "Maxima: " . $max2 . "\n";
$status3 = 
$img3 . "\n" . $date3 . "\n" . $description3 . "\n" . "Minima: " . $min3 . "\n" . "Maxima: " . $max3 . "\n";
$status4 = 
$img4 . "\n" . $date4 . "\n" . $description4 . "\n" . "Minima: " . $min4 . "\n" . "Maxima: " . $max4 . "\n";
$status5 = 
$img5 . "\n" . $date5 . "\n" . $description5 . "\n" . "Minima: " . $min5 . "\n" . "Maxima: " . $max5 . "\n";
$status6 = 
$img6 . "\n" . $date6 . "\n" . $description6 . "\n" . "Minima: " . $min6 . "\n" . "Maxima: " . $max6 . "\n";
$status7 = 
$img7 . "\n" . $date7 . "\n" . $description7 . "\n" . "Minima: " . $min7 . "\n" . "Maxima: " . $max7 . "\n";
$status8 = 
$img8 . "\n" . $date8 . "\n" . $description8 . "\n" . "Minima: " . $min8 . "\n" . "Maxima: " . $max8 . "\n";
$status9 = 
$img9 . "\n" . $date9 . "\n" . $description9 . "\n" . "Minima: " . $min9 . "\n" . "Maxima: " . $max9 . "\n";

// PRINTANDO RESULTADO
// CSS STYLESHEET <_<
$displaystatusnow = "<div id=\"statusnow\"><h3>$statusnow</h3></div>";
$display = "<div class=\"wrapper\">

<div class=\"item1\"> $status1 </div>
<div class=\"item2\"> $status2 </div>
<div class=\"item3\"> $status3 </div>
<div class=\"item4\"> $status4 </div>
<div class=\"item5\"> $status5 </div>
<div class=\"item6\"> $status6 </div>
<div class=\"item7\"> $status7 </div>
<div class=\"item8\"> $status8 </div>
<div class=\"item9\"> $status9 </div>

</div>";


$css = "<style>

/* DESKTOP ############################################################################################### */
@media screen and (min-width: 768px) {
	h4 {
		text-align: right;
	}
	div#statusnow {
		display: grid;
		grid-template-columns: 500px auto auto;
	}
	.wrapper {
		display: grid;
		grid-auto-columns: 45px;
		grid-auto-rows: 50px;
		grid-template-areas: 
		  \"a a a a b b b b c c c c\"
		  \"a a a a b b b b c c c c\"
		  \"d d d d e e e e f f f f\"
		  \"d d d d e e e e f f f f\"
		  \"g g g g h h h h i i i i\"
		  \"g g g g h h h h i i i i\";
	  }
}


/* MOBILE ############################################################################################### */

@media screen and (min-width: 0px) and (max-width: 768px) {
	h4 {
		text-align: right;
	}
	div#statusnow {
		display: grid;
		grid-template-columns: 500px auto auto;
	}

	.wrapper {
		display: grid;
		grid-auto-columns: 45px;
		grid-auto-rows: 50px;
		grid-template-areas: 
		  \"a a a a b b b b\"
		  \"a a a a b b b b\"
		  \"c c c c d d d d\"
		  \"c c c c d d d d\"
		  \"e e e e f f f f\"
		  \"e e e e f f f f\"
		  \"g g g g h h h h\"
		  \"g g g g h h h h\"
		  \"i i i i j j j j\"
		  \"i i i i j j j j\";
	  }
	}
	.item1 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: a;
	}
	.item2 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: b;
	}
	.item3 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: c;
	}
	.item4 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: d;
	}
	.item5 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: e;
	}
	.item6 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: f;
	}
	.item7 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: g;
	}
	.item8 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: h;
	}
	.item9 {
		border-style: ridge;
		display:grid;
		grid-template-columns: 60px auto auto auto;
		grid-area: i;
	}
}
</style>";


echo "<pre>";
echo $displaystatusnow, $display, $css;
//print_r($statusnow . "\n" .  $status);
?>
