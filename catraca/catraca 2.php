<?php
$con = mysqli_connect('localhost','root', '');
$db = mysqli_select_db($con,'potato');


$filename = 'catraca.txt';
$handle = fopen ($filename,'r');

while(!feof($handle)){
    $vetor = explode("|",$conteudolinha);

    $insere = "INSERT INTO aluno(cod_aluno, status) values('$cod_aluno', '$status')";
    $results = mysqli_query($con, $insere);

    echo $vetor[0]."<br>";
    echo $vetor[1]."<br>";
    echo $vetor[2]."<br>";
    echo $vetor[3]."<br>";
    echo $vetor[4]."<br>";
    echo $vetor[5]."<br>";
    echo $vetor[6]."<br>";

    if(feof($handle)) break;    
}
fclose($handle);

?>