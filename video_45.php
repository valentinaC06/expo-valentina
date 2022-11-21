<?php
require_once 'vendor/autoload.php';

$service = new App\DebtCollectionService();

echo $service->collectDebt(collector: new App\CollectionAgency()) .PHP_EOL;