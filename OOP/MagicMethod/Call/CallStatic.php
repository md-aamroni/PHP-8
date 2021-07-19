<?php

class CallStatic {
	private static function greeting($name) {
		echo 'Hey ' . $name . ', Have a good day';
	}

	public static function __callStatic($method, $args) {
		if (method_exists(__CLASS__, $method)) {
			call_user_func_array([__CLASS__, $method], $args);
		} else {
			echo 'This is a private ' . $method . ' method';
		}
	}
}

CallStatic::greeting('Kabir Khan');