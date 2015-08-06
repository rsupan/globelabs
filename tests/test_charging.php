<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Globelabs\Charging;
$options = [
	'amount' => '0',
	'description' => 'Allowance',
	'msisdn' => '09064985528',
	'transactionOperationStatus' => 'Charged',
	'reference_code' => '13420000001',
	'access_token' => 'Xjcusf1FijetLc0Z_es2ZlHetuw-P9ThnutrI1F2vZs',
];

var_dump(Charging::charge_to($options));

?>
