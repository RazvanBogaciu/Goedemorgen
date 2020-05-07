<!DOCTYPE html>
<html>
<head>
	<link href="GoedeMorgen.css" rel= 'stylesheet' type="Text/css">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

	<title>GoedeMorgen</title>
</head>

<body>

<div id='pagina'>
<?php

//Razvan Bogaciu//
//B3W1O1 - Goede morgen/middag/avond/nacht//
//Da Vinci Dordrecht//
date_default_timezone_set("Europe/Amsterdam");

$tijd = date('H:i');
$achtergrond = 'none';



if (date('H') >= 6 && date('H') <= 12 ){
	$achtergrond = 'Goede morgen!';
	echo '<style> body { background-image: url("img/morning.png"); } </style>';

}
if (date('H') >= 12 && date('H') <= 18 ){
	$achtergrond = 'Goede middag!';
	echo '<style> body { background-image: url("img/afternoon.png"); } </style>';

}
if (date('H') >= 18 && date('H') <= 0 ){
	$achtergrond = 'Goede avond!';
	echo '<style> body { background-image: url("img/evening.png"); } </style>';


}
if (date('H') >= 0 && date('H') <= 6 ){
	$achtergrond = 'Goede nacht!';
	echo '<style> body { background-image: url("img/night.png"); } </style>';

}

echo '<a id="Text">' . $achtergrond . '</a>';
echo '<br>';
echo '<a id= "Text2">' . 'het is nu ' . $tijd . '</a>';

?>

</div>

<style>
body{
    background-image: url("img/afternoon.png");
	background-size: cover !important;
}

#Text{
    font-family: 'Satisfy', cursive;
    color: white;
    font-size: 80px;
}
#Text2{
    font-family: 'Satisfy', cursive;
    color: white;
    font-size: 80px
}
#pagina{
    width: 1100px;
	margin: 0px auto;
	text-align: center;
	margin-top: 250px;
}

</style>

</body>
</html>