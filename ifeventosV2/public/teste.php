<?php

use Ifnc\Tads\Entity\Cliente;
use Ifnc\Tads\Entity\Venda;
use Ifnc\Tads\Mapper\VendaMapper;
use Symfony\Component\Yaml\Yaml;

require "../vendor/autoload.php";

$hash =  password_hash('123', PASSWORD_ARGON2I);

echo $hash."<br>";

echo password_verify('143',$hash);







