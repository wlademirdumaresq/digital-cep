<?php

require_once "vendor/autoload.php";

use Dumaresq\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipCode('59072600');

print_r($resultado);