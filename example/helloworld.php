<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Y2\ItemInventory\HelloWorld;
use Y2\ItemInventory\ItemInventoryWcfService;
use Y2\ItemInventory\RetailContext;

$wsdl     = ''; // WSDL interface
$login    = ''; // credentials for basic auth
$password = ''; // credentials for basic auth
$dbId     = ''; // Y2 database ID

$retailContext = new RetailContext();
$retailContext->setDatabaseId($dbId);
$helloWorld = new HelloWorld('ZZZ', $retailContext);

try {
    $client = new ItemInventoryWcfService($wsdl, [
        'login'    => $login,
        'password' => $password
    ]);

    $call = $client->HelloWorld($helloWorld)->getHelloWorldResult();

    print_r($call);

} catch (SoapFault $e) {
    echo "SOAP ERROR CALL : " . $e->getMessage() . "\n";
}
