<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ACESSO AOS LOGS DE IPS ACESSADOS POR LINK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="util.css">
<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/select2/select2.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/js/main.js"></script>


<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100">
<table>
<thead>

<tr class="table100-head">
<th class="column1">IP</th>
<th class="column1">Data</th>
<th class="column2">Pais</th>
<th class="column3">Continente</th>
<th class="column4">Latitude</th>
<th class="column5">Longitude</th>
<th class="column6">Cidade</th>
<th class="column6">User Agente</th>
</tr>
</thead>
<tbody>
	


<?php  

$cod=$_GET['i'];


$ip="localhost";
$user="root";
$pass="";
$database="who4re27_encurtador";

if ($con=mysqli_connect($ip,$user,$pass,$database)){
$sql="SELECT * FROM `ip` WHERE id = '$cod' ORDER  BY ip";
$res=mysqli_query($con,$sql);
	echo "       ";





	while ($row =mysqli_fetch_array($res)){

echo '<tr><td class="column1">'.$row['ip'].'</td>';
echo '<td class="column1">'.$row['data'].'</td>';
echo '<td class="column1">'.$row['pais'].'</td>';
echo '<td class="column1">'.$row['continente'].'</td>';
echo '<td class="column1">'.$row['latitude'].'</td>';
echo '<td class="column1">'.$row['longitude'].'</td>';
echo '<td class="column1">'.$row['cidade'].'</td>';
echo '<td class="column1">'.$row['user_agente'].'</td></tr>';


	}
	echo "</tbody></table></div></div></div></div>";

}else{

echo " Pro Blemas de Coneção com o Banco de Dados";

}








?>









<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/vendor/select2/select2.min.js"></script>
<script src="https://colorlib.com/etc/tb/Table_Responsive_v1/js/main.js"></script>




</body>
</html>