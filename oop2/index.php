<?php
declare(strict_types=1);

require_once './Transaction.php';
require_once './Customar.php';
require_once './paymentProfile.php';

// classes and object

$transaction = (new Transaction(134, 'Transaction1')); // methods chaning
$transaction->addText(8)->$transaction->amount = 20;

$transaction2 = (new Transaction(100, 'Transaction2')); // methods chaning
$transaction2->addText(8)->$transaction2->amount = 20;

var_dump($transaction->amount, $transaction2->amount);

unset($transaction);

echo $transaction->customar->paymentProfile->id;


?>