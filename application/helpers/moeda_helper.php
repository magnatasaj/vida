<?php
if ( ! function_exists('formata_preco'))
{
function formata_preco($valor)
{
$negativo = false;
$preco = "";
$valor = intval(trim($valor));
if ($valor < 0) {
$negativo = true;
$valor = abs($valor);
}
$valor = strrev($valor);
while (strlen($valor) < 3) {
$valor .= "0";
}
for ($i = 0; $i < strlen($valor); $i++) {
if ($i == 2) {
$preco .= ",";
}
if (($i <> 2) AND (($i+1)%3 == 0)) {
$preco .= ".";
}
$preco .= substr($valor, $i , 1);
}
$preco = strrev($preco);
return ($negativo ? "-" : "") . $preco;
}
}

  function validar($valor) {
		$valor = (string)$valor;
		$regra = "/^[0-9]{1,3}([.]([0-9]{3}))*[,]([.]{0})[0-9]{0,2}$/";
		if(preg_match($regra,$valor)) {
			return true;
		} else {
			return false;
		}
	}

function rs($valor){
	$formatado = 'R$ '.number_format($valor,2,',','.'); 
	return $formatado;
}

		

?>