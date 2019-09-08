<?php

require __DIR__ . '/../vendor/autoload.php';

use Richardds\ECBAPI\ECBConverter;
use Richardds\ECBAPI\ECBException;

$converter = new ECBConverter();

$references = [];

try {
    $references = $converter->list(true);
} catch (ECBException $e) {
    echo $e->getMessage();
}

foreach ($references as $code => $rate) {
    printf("%s => %.5f\n", $code, $rate);
}
