<?php

namespace Utilities;

class AndroidNotification
{
	private $url = "https://fcm.googleapis.com/fcm/send";
	protected $headers;
	protected $server;
	protected $device;
	protected $title;
	protected $image;
	protected $detail;
	protected $type;

	public function __construct($server, $device, $title, $detail, $type, $image = false)
	{
		$this->server	= $server;
		$this->device	= $device;
		$this->title	= $title;
		$this->image	= $image;
		$this->detail	= $detail;
		$this->type		= $type;
	}

	private function notification()
	{
		$this->headers = [
			'Authorization:key = ' . $this->server . '',
			'Content-Type: application/json'
		];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->content()));
		$result = curl_exec($ch);

		if ($result === FALSE) {
			die('Curl failed: ' . curl_error($ch));
		}

		curl_close($ch);
		return $result;
	}

	private function content()
	{
		return array(
			'to'	 => $this->device,
			'data' => array(
				'notification' => array(
					'body'	=> $this->detail,
					'title'	=> $this->title,
					'image'	=> $this->image
				),
				'notification_type' => $this->type
			)
		);
	}

	public function execute($confirmation = false)
	{
		if (is_bool($confirmation) and $confirmation === true) {
			if ($this->notification()) {
				echo "Notification send successfully";
			} else {
				echo "Oops! something went wrong";
			}
		} else {
			$this->notification();
		}
	}
}

$notification = new AndroidNotification(
	'AAAAn6yDqlg:APA91bHG9LpmiNLVasEE0mC8v_2gsdGo5N-b5xI9Xv4jN717f4SLIfoev1B7QcWBxCLxGqaAaDd5ArgFGuzS6R3SEZ2Gi6yEhMXRZxMPRfhARanKsqlp4jzI4pLd25ZBKPUOFvR6vcQK',
	'd3u97ERZTByX-sOP1kP3Kt:APA91bF9PMfitiA3UnAYpSSAUA2YYakWwFf2Y28GIol-vAbiQVf_xv8B5-Y_CRb72lCrIMbpADat5ci-XSVsOAtyWRaFdPYxKDvU4HYkK29ieE6og3k43SUWa7bLSkgg6ddvOxfF51xm',
	'Android Push Notification',
	'This is a test title for android push notification using PHP',
	'Confirm Request'
);

$notification->execute(true);
