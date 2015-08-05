<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Globelabs\SMS;

$options = [
	'sender_address' => '3005',
	'access_token' => 'PYzPln58ygT3Ur4vhGaMVpsWXrU3iBpQiBe9CMRr380',
	'message' => 'hello',
	'address' => '09064985528',
];
// var_dump($options);
// exit;
echo SMS::send_to($options);
?>
