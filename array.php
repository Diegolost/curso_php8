<?php
$pessoa = array(
    "Nome" => "Diego",
    "Idade" => 32,
    "Altura" => 1.85,
    "Solteiro" => true
);

print_r($pessoa);

$listaPessoas = array();

$pessoa2 = array("Nome" => "Maria", "Idade" => 22, "Altura" => 1.64, "Solteira" => false);
$pessoa3 = array("Nome" => "Monica", "Idade" => 36, "Altura" => 1.62, "Solteira" => false);

$listaPessoas[0] = $pessoa2;
$listaPessoas[1] = $pessoa3;
echo "<pre>";
print_r($listaPessoas);
echo "</pre>";
echo $listaPessoas[1]["Altura"];