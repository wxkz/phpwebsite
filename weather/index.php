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


// SETANDO INFORMAÇOES DOS DIAS
$date[1] = $data['forecast']['0']['date'];
$min[1] = $data['forecast']['0']['min'];
$max[1] = $data['forecast']['0']['max'];
$description[1] = $data['forecast']['0']['condition'];

// SETANDO TAMANHO DAS IMAGENS
$tamanho = 60;

// SETANDO IMAGEM DEPENDENDO DA CONDIÇÃO CLIMATICA
$c = 2;
for ($i = 1; $i < 9; $i++) {
	if ($description[i] == "storm"){
		$imgid =7;
		$imgdy = $imgid . ".png";
		$description[i] ="Tempestade";
	}
	elseif ($description[i] == "hail"){
		$imgid =6;
		$imgdy = $imgid . ".png";
		$description[i] ="Granizo";
	}
	elseif ($description[i] == "rain"){
		$imgid =5;
		$imgdy = $imgid . ".png";
		$description[i] ="Chuva";
	}
	elseif ($description[i] == "cloud" or "cloudly_day" or "cloudly_night"){
		$imgid =3;
		$imgdy = $imgid . ".png";
		$description[i] ="Nublado";
	}
	elseif ($description[i] == "fog"){
		$imgid =2;
		$imgdy = $imgid . ".png";
		$description[i] ="Neblina";
	}
	elseif ($description[i] == "clear_day" or "clear_night"){
		$imgid =1;
		$imgdy = $imgid . ".png";
		$description[i] ="Dia Limpo";
	}
	elseif ($description[i] == "none_day" or "none_night"){
		$imgid =2;
		$imgdy = $imgid . ".png";
		$description[i] ="Falha Na Comunicação Com A Api";
	}
	$img[i] = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";

	$date[c] =$data['forecast'][$i]['date'];
	$min[c] =$data['forecast'][$i]['min'];
	$max[c] =$data['forecast'][$i]['max'];
	$description[c] =$data['forecast'][$i]['condition'];
	$c += 1;
}
// CONTATENANDO INFORMAÇOES DOS DIAS
for ($i = 1; i < 9; $i++){
	$status[i] += 
	$img[i] . "\n" . $date[i] . "\n" . $description[i] . "\n" . "Minima: " . $min[i] . "\n" . "Maxima: " . $max[i] . "\n";
}

// PRINTANDO RESULTADO
// CSS STYLESHEET <_<
$displaystatusnow = "<div id=\"statusnow\"><h3>$statusnow</h3></div>";
$display = "<div class=\"wrapper\">";
for ($i = 1; $i < 9;$i++){
	$display += "<div class=\"item".$i."\">".$status[i]."</div>";
}
$display += "</div>";


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
?>
