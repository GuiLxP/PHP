<?php

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";
$numeroDePessoas = 2;

echo PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos ";
echo "ou apartir de 16 anos acompanhado.". PHP_EOL . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar!";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então, pode entrar.";
} else 
    echo "VocÊ tem $idade anos. Você não pode entrar";


echo PHP_EOL;
echo "Adeus!";
