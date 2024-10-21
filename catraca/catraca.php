<?php
$con = mysqli_connect('localhost','root', '');
$db = mysqli_select_db($con,'potato');

$filename = 'catraca.txt';
$handle = fopen ($filename,'r');

while(!feof($handle)){
    $conteudolinha=fgets($handle);
    $cod_aluno = substr($conteudolinha, 0, 6);
    $h_ini = substr($conteudolinha, 6, 4);
    $h_sai = substr($conteudolinha, 10, 4);
    $data_ini = substr($conteudolinha, 14,8);
    $data_fim = substr($conteudolinha, 22,8);
    $via_cart = substr($conteudolinha, 30,1);
    $status = substr($conteudolinha, 31,1);

    $insere = "INSERT INTO aluno(cod_aluno, status) values('$cod_aluno', '$status')";
    $results = mysqli_query($con, $insere);

    echo $conteudolinha."<br>";
    echo $cod_aluno."<br>";
    echo $h_ini."<br>";
    echo $h_sai."<br>";
    echo $data_ini."<br>";
    echo $data_fim."<br>";
    echo $via_cart."<br>";
    echo $status."<br>";

    if(feof($handle)) break;    
}
fclose($handle);

?>