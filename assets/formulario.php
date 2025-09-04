<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $matricula = $_POST["matricula"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
};

$media = ($nota1 + $nota2)/2;

if ($media >= 7){
    echo "$name, registrado na matricula n: $matricula. Sua media final foi: $media. APROVADO";
} 
elseif ( $media >= 4 && $media <= 6.9 ) {
    echo "$name, registrado na matricula n: $matricula. Sua media final foi: $media. RECUPERAÇÃO";
    } 
else
    echo "$name, registrado na matricula n: $matricula. Sua media final foi: $media. REPROVADO.";


?>