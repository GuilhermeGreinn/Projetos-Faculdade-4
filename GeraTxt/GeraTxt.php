<?php
//nome com 10 caracteres
//idade com 3 posicoes com zeros na frente

include('funcoes.php');
unlink('exporta.txt');

$handle = fopen('exporta.txt', 'a+');

$nome="lucas rafael filipak";
$nome = fcomplemento($nome,10," ");

$nome=substr($nome,0,10);

$idade=37;
$idade=fzerosnafrente($idade,3);

$exportacao = $nome.$idade."\n";
fwrite($handle,$exportacao);
fclose($handle);

?>