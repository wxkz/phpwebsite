<?php
// Api configs and json return
$apikey = "f1a57ea2";
$json = file_get_contents("https://api.hgbrasil.com/weather?fields=only_results,temp,description,city_name,forecast,max,min,date,humidity,condition,time&key=" . $apikey . "&user_ip=remote");
$data = json_decode($json,true);

// Getting climatic information on the current day
// and Setting variables
$daynow =$data['date'];
$city =$data['city_name'];
$temp =$data['temp'];
$description =$data['description'];
// Set image size
$tamanho = 60;

// Var that will store the image that will be shown
$imgid =1;
$imgdy = $imgid . ".png";

// Contacts current day data
$statusnow ="Cidade: " . $city . "\n" . "Temperatura: " . $temp;

$daysInfo = array ();
for ($i = 0; $i < 9; $i++) {
	// Setting up day information
	// 0 date | 1 min | 2 max | 3 desc | 4 img
	$daysInfo[$i][0] = $data['forecast'][$i]['date'];
	$daysInfo[$i][1] = $data['forecast'][$i]['min'];
	$daysInfo[$i][2] = $data['forecast'][$i]['max'];
	$daysInfo[$i][3] = $data['forecast'][$i]['condition'];

// Setting image depending on climatic condition
if ($daysInfo[$i][3] == "storm"){
	$imgid =7;
	$imgdy = $imgid . ".png";
	$daysInfo[$i][3] ="Tempestade";
}
elseif ($daysInfo[$i][3] == "hail"){
	$imgid =6;
	$imgdy = $imgid . ".png";
	$daysInfo[$i][3] ="Granizo";
}
elseif ($daysInfo[$i][3] == "rain"){
	$imgid =5;
	$imgdy = $imgid . ".png";
	$daysInfo[$i][3] ="Chuva";
}
elseif ($daysInfo[$i][3] == "cloud" or "cloudly_day" or "cloudly_night"){
	$imgid =3;
	$imgdy = $imgid . ".png";
	$daysInfo[$i][3] ="Nublado";
}
elseif ($daysInfo[$i][3] == "fog"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$daysInfo[$i][3] ="Neblina";
}
elseif ($daysInfo[$i][3] == "clear_day" or "clear_night"){
	$imgid =1;
	$imgdy = $imgid . ".png";
	$daysInfo[$i][3] ="Dia Limpo";
}
elseif ($daysInfo[$i][3] == "none_day" or "none_night"){
	$imgid =2;
	$imgdy = $imgid . ".png";
	$daysInfo[$i][3] ="Falha Na Comunicação Com A Api";
}

// Image representing the climatic condition of the day
$daysInfo[$i][4] = "<img src=./img/$imgdy width=$tamanho height=$tamanho>";

}


$daysInfoFormatedString = array();
for ($i = 0; $i < 9; $i++) {
	$daysInfoFormatedString[$i] = $daysInfo[$i][4] . "\n" . $daysInfo[$i][0] . "\n" . $daysInfo[$i][3] . "\n" . "Minima: " . $daysInfo[$i][1] . "\n" . "Maxima: " . $daysInfo[$i][2] . "\n";
}

$statusnowFormatedString = "<div id=\"statusnow\"><h3>$statusnow</h3></div>";

$daysInfoIframeReady = "<div class=\"wrapper\">
<div class=\"item1\"> $daysInfoFormatedString[0] </div>
<div class=\"item2\"> $daysInfoFormatedString[1] </div>
<div class=\"item3\"> $daysInfoFormatedString[2] </div>
<div class=\"item4\"> $daysInfoFormatedString[3] </div>
<div class=\"item5\"> $daysInfoFormatedString[4] </div>
<div class=\"item6\"> $daysInfoFormatedString[5] </div>
<div class=\"item7\"> $daysInfoFormatedString[6] </div>
<div class=\"item8\"> $daysInfoFormatedString[7] </div>
<div class=\"item9\"> $daysInfoFormatedString[8] </div>
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
echo $statusnowFormatedString, $daysInfoIframeReady, $css;
?>


