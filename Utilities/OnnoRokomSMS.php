<?php

namespace Utilities;

class OnnoRokomSMS
{
	private $url = 'https://api2.onnorokomsms.com/HttpSendSms.ashx?';
	private $opt = 'OneToOne';

	private $userName = '01744471333';
	private $password = '*#fl=It007##6789%';
	private $maskName = '';
	private $campaign = '';

	private $notify;
	private $message;
	private $execute;

	public function __construct($user, $message)
	{
		$this->notify  = $user;
		$this->message = $message;

		$this->execute = 'op=' . $this->opt . '&type=TEXT&';
		$this->execute .= 'mobile=' . $this->notify . '&smsText=' . $this->message . '&';
		$this->execute .= 'username=' . $this->userName . '&password=' . $this->password . '&';
		$this->execute .= 'maskName=' . $this->maskName . '&campaignName=' . $this->campaign . '';
	}

	private function execute()
	{
		$ch = curl_init($this->url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $this->execute);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);

		if ($response === FALSE) {
			die('Curl failed: ' . curl_error($ch));
		}

		curl_close($ch);
		return $response;
	}

	public function send($confirmation = false)
	{
		if (is_bool($confirmation) and $confirmation === true) {
			if ($this->execute()) {
				echo "SMS send successfully";
			} else {
				echo "Oops! something went wrong";
			}
		} else {
			$this->execute();
		}
	}
}

$sms = new OnnoRokomSMS('01316440504','Object Oriented SMS Sender');
$sms->send(true);
