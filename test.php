<?php


$client = new \Gegosoft\Rippled\Client('https://s.altnet.rippletest.net:51234');

$txParams = [
    'TransactionType' => 'Payment',
    'Account' => 'rUaqaqcq1H5fb4R7dYcisfo5jszpSQkS2n',
    'Destination' => 'rpkXbJMfDUtfSThM5UjbUtjeBQuHRx8kHZ',
    'Amount' => '1000000',
    'Fee' => '000012'
];

$transaction = new \Gegosoft\Rippled\Api\Transaction($txParams, $client);

$secret = "XXXXXXXXX";

$response = $transaction->submit($secret);
 

print_r($response);


?>