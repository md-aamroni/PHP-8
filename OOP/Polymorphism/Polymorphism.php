<?php

// Autoload Classes
spl_autoload_register(function ($class) {
	if (file_exists('Abstract/' . $class . '.php')) {
		require_once 'Abstract/' . $class . '.php';
	}

	if (file_exists('Interface/' . $class . '.php')) {
		require_once 'Interface/' . $class . '.php';
	}
});


// Example of Using Abstract Class
$ctf = new CelsiusToFahrenheit(37);
$ctf->calculate();

$ftc = new FahrenheitToCelsius(98.6);
$ftc->calculate();


// Example of Using Interface
$c= new Circle(20);
$c->area();

$r = new Rectangle(23, 18);
$r->area();

$t = new Triangle(15, 28.6);
$t->area();
