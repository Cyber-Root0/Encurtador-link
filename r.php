<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php
$cod=$_GET['i'];
$ip="localhost";
$user="root";
$pass="";
$database="who4re27_encurtador";
$inicial="tools.who4reyou.org/url/";

$ipuser=$_SERVER["REMOTE_ADDR"];
date_default_timezone_set('America/Sao_Paulo');
$data=date('d/m/Y \à\s H:i:s');

$json = file_get_contents("https://www.iplocate.io/api/lookup/".$ipuser);
$json = json_decode($json);
$pais= $json->country; 
$continente=$json->continent; 
$latitude= $json->latitude; 
$longitude= $json->longitude;
$cidade =$json->city;


$useragente=$_SERVER['HTTP_USER_AGENT'];


if ($con= mysqli_connect($ip,$user,$pass,$database)){
$sql1 = "INSERT INTO ip (id,ip,data,pais,continente,latitude,longitude,cidade,user_agente) VALUES ('$cod','$ipuser','$data','$pais','$continente','$latitude','$longitude','$cidade','$useragente')";
  if (mysqli_query($con,$sql1)){

  

  }else{
  	echo "Nao deu certo...."."<br>";
  	echo "Erro Na Query".mysqli_error($con);

  }


}


if ($con=mysqli_connect($ip,$user,$pass,$database)){
$sql="SELECT * FROM link WHERE l_cod='$cod'";
$res=mysqli_query($con,$sql);
$row =mysqli_fetch_array($res);
$codigolink=$row['l_link'];

if ($codigolink==null){



echo "<script type=\"text/javascript\"> window.location='https://$inicial';</script>";




}else{



echo "<script type=\"text/javascript\"> window.location='$codigolink';</script>";
 


}



}else{

	echo "Nao Foi Possivel Realizar a Coneção com o Banco de Dados....";



}









?>


</body>
</html>