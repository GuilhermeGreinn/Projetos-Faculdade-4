<?php
function fcomplemento ($palavra,$tamanho,$val)
{
//--- $palavra = JOSE
//--- $tamanho = 15
//--- $val = B
//--- retornara $palavra = JOSEBBBBBBBBBBB
   $TamanhoNumero = strlen($palavra); 
   
   if ($TamanhoNumero < $tamanho) 
   {
      while ($TamanhoNumero < $tamanho) 
      { 
        $palavra = $palavra.$val;
		$TamanhoNumero = strlen($palavra); 
      }
   }
   return $palavra;
}



function fzerosnafrente($numero,$tamanho)
{
   $TamanhoNumero = strlen($numero); 
   
   if ($TamanhoNumero < $tamanho) 
   {
      while ($TamanhoNumero < $tamanho) 
      { 
        $numero = "0".$numero;
		$TamanhoNumero = strlen($numero); 
      }
   }
   
   return $numero;
}
?>