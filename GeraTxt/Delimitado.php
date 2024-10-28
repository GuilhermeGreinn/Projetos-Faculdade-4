<?php
$handle = fopen('exporta.txt', 'a+');

$nome="lucas";
$idade=37;

$exportacao = $nome."|".$idade."|"."masc"."|"."casado"."\n";
fwrite($handle,$exportacao);
fclose($handle);


?>