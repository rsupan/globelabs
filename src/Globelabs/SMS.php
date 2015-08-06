<?php
namespace Globelabs;

/**
 * GLobelabs SMS API
 */

class SMS extends Connection {
	public static function send_to($options) {
		Connection::Construct($options['sender_address'], $options['access_token'], 1);

		return $response = Connection::send_to($options);
	}
}
