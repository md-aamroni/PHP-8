<?php

namespace App;

class Publisher
{
	private string $store;
	private string $contact;
	private string $address;
	private float $rating;
	private int $reviews;
	private string $isOpen;

	public function __construct($arr)
	{
		if (is_array($arr)) {
			$this->store	= $arr[0];
			$this->contact	= trim(addslashes(@$arr[1]));
			$this->address	= trim(addslashes(@$arr[2]));
			$this->rating	= trim(addslashes(@$arr[3]));
			$this->reviews	= trim(addslashes(@$arr[4]));
			$this->isOpen	= trim(addslashes(@$arr[5]));
		}
	}

	public function getPublisherInfo() : array
	{
		return array(
			'title'	 => $this->store,
			'contact' => $this->contact,
			'address' => $this->address,
			'rating'	 => $this->rating,
			'review'	 => $this->reviews,
			'status'	 => $this->isOpen
		);
	}
}
