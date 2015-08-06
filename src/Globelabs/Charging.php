<?php
namespace Globelabs;

/**
 * Globelabs Charging API
 */
class Charging extends Connection {
	public static function charge_to($options = '') {
		Connection::Construct('', $options['access_token'], 2);
		return $response = Connection::charge_to($options);
	}
}
