<?php
namespace Globelabs;

/**
 * Connection for Globelabs
 */
class Connection {
	private static $base_uri = 'https://devapi.globelabs.com.ph';
	private static $uri;
	# Construct the connection url for GLobelabs API
	public static function Construct($sender_address = '', $access_token, $code) {
		if ($code == 1) {
			self::$uri = self::$base_uri . '/smsmessaging/v1/outbound/' . $sender_address . '/requests?access_token=' . $access_token;
		} else {
			self::$uri = self::$base_uri . '/payment/v1/transactions/amount?access_token=' . $access_token;
		}
	}

	public static function send_to($options) {
		$body = [
			'message' => $options['message'],
			'address' => $options['address'],
		];

		$response = \Httpful\Request::post(self::$uri)
			->sendsJson()
			->expectsJson()
			->body($body)
			->sendIt();

		return self::parse_response($response);
	}

	public static function charge_to($options) {
		$body = [
			'amount' => $options['amount'],
			'description' => $options['description'],
			'endUserId' => $options['msisdn'],
			'transactionOperationStatus' => 'Charged',
			'referenceCode' => $options['reference_code'],
		];

		$response = \Httpful\Request::post(self::$uri)
			->sendsJson()
			->expectsJson()
			->body($body)
			->sendIt();

		return self::parse_response($response);
	}

	private function parse_response($response = '') {
		if (!json_decode($response->raw_body)) {
			return $response = [
				'error' => '500',
				'message' => 'Failed to get response.',
			];
		}

		return (array) json_decode($response->raw_body);
	}

}
