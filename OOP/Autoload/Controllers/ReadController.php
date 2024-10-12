<?php

class ReadController
{
	public function index(): string
	{
		return "This is a " . __METHOD__ . " method of " . __CLASS__ . PHP_EOL;
	}
}
