<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Globelabs\SMS;

$options = [
	'sender_address' => '{your_sender_address}',
	'access_token' => '{your_access_token}',
	'message' => 'hello',
	'address' => '0906xxxxxxx',
];

var_dump(SMS::send_to($options));
?>
