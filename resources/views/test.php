<?php

require_once '/path/to/sdk-dir/autoload.php';

$client = new RakutenRws_Client();
$client->setApplicationId('RAKUTEN_APPLICATION_ID');
$client->setAffiliateId('16c33cf9.46805d8b.16c33cfa.ebfc4a83');

$response = $client->execute('IchibaItemSearch', array(
  'keyword' => 'うどん'
));

if ($response->isOk()) {
    // レスポンスを foreach でアクセスできます
    foreach ($response as $item) {
        echo $item['itemName']."\n";
    }
} else {
    echo 'Error:'.$response->getMessage();
}