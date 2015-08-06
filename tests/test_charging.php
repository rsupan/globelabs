<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Globelabs\Charging;

$options = [
	'amount' => '1',
	'description' => 'Allowance',
	'msisdn' => '0906xxxxxxx',
	'transactionOperationStatus' => 'Charged',
	'reference_code' => '13420000001',
	'access_token' => '{your_access_token}',
];

var_dump(Charging::charge_to($options));
