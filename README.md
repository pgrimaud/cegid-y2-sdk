# CEGID / Y2 - SDK

Consume CEGID/Y2's SOAP API.

## Requirements

 - PHP >= 5.6
 - Package php-soap (ext-soap extension)

## Installation

```
composer require pgrimaud/cegid-y2-sdk
```
## Basic usage

Hello world :

```php
<?php

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
```

## License

Licensed under the terms of the MIT License.