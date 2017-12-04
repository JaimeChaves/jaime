<?php


function AntiSql($Valor){
$Valor = mysqli_real_escape_string(Conexao::$connection, $Valor);
return($Valor);
}



function Alertar($Valor, $Pg){


	echo "<script>";
	echo "alert('".$Valor."');";
	if($Pg == 0){
	echo "location.href='logar.php';";	
	}
	
	echo "</script>";

}



?>