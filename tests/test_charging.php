<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Globelabs\Charging;

$options = [
	'amount' => '0.00',
	'description' => 'Allowance',
	'msisdn' => '906xxxxxxxx',
	'transactionOperationStatus' => 'Charged',
	'reference_code' => '{reference_code_see_documentation}',
	'access_token' => '{access_token}',
];

var_dump(Charging::charge_to($options));

?>
