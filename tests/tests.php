<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Globelabs\SMS;

$options = [
	'sender_address' => '{your_sender_address}',
	'access_token' => '{your_access_token}',
	'message' => 'hello',
	'address' => '09064985528',
];

echo SMS::send_to($options);

?>
