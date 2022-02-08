<?php

$input 		= file_get_contents('php://input');
$data  		= json_decode($input);
$chat_id 	= $data->message->chat->id;
$text    	= $data->message->text;
$api		= "5286849026:AAH_y_m55CFZMK3wHxR2sMIwox-Ub_MTzow";



if ($text == '/start') {
	$msg = "Welcome to XpBot.";
	$url = "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";

} elseif ($text == '/xphelp') {

	$msg = "List Of Command. %0A * For MJO send = .mjo %0A * For Radar send = .radar";
	$url = "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";

} elseif ($text == '.radar'){

	$img	= "https://wx.baf.mil.bd/METBSR/images/omar/Radar/202202090046.jpg";
	$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=1398584321&photo=$img&parse_mode=html";
}


file_get_contents($url);


?>