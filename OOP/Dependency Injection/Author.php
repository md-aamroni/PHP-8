<?php

namespace App;

class Author
{
	private string $name;
	private string $dob;
	private string $about;
	private string $quotes;

	public function __construct($arr)
	{
		if (is_array($arr)) {
			$this->name		= $arr[0];
			$this->dob		= @$arr[1];
			$this->about	= @$arr[2];
			$this->quotes	= @$arr[3];
		}
	}

	public function getAuthorBio() : array
	{
		return array(
			'name'		=> $this->name,
			'birthDate'	=> $this->dob,
			'about'		=> $this->about,
			'quotes'		=> $this->quotes
		);
	}
}
