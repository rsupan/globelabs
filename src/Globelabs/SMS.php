<?php
namespace Globelabs;

/**
 * SMS
 */

class SMS extends Connection {
	public static function send_to($options) {
		$uri = parent::$base_uri . '/smsmessaging/v1/outbound/' . $options['sender_address'] . '/requests?access_token=' . $options['access_token'];
		$response = \Httpful\Request::post($uri)
			->sendsJson()
			->body("{\"message\":\"" . $options["message"] . "\",\"address\":\"" . $options["address"] . "\"}")
			->sendIt();

		return $response;
	}
}
