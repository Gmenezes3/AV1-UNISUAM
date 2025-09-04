<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $name = $_POST["name"];
}

$media = ($nota1 + $nota2)/2;

if ($media >= 7){
    echo "$name, sua media final foi: $media. APROVADO";
} 
elseif ( $media >= 4 && $media <= 6.9 ) {
    echo "$name, Sua média final foi: $media. RECUPERAÇÃO";
    } 
else
    echo "$name, sua média final foi: $media. REPROVADO."
?>