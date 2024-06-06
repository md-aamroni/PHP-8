<?php


class House
{
	public function colors($outside, $inside): array
	{
		return array(
			'outside_paint' => is_array($outside) ? implode(', ', $outside) : $outside,
			'inside_paint'	 => is_array($inside) ? implode(', ', $inside) : $inside
		);
	}

	public function windows($position, $quantity, $width, $height): array
	{
		return array(
			'window_position'	 => $position,
			'window_quantity'	 => $quantity,
			'window_dimension' => '(width) ' . $width . ' X (height) '. $height.' sq.ft'
		);
	}

	public function doors($position, $quantity, $width, $height): array
	{
		return array(
			'door_position'  => $position,
			'door_quantity'  => $quantity,
			'door_dimension' => '(width) ' . $width . ' X (height) ' . $height . ' inch'
		);
	}
}

$kunjaVilla = new House();

print_r($kunjaVilla->colors(['White', 'Red'], ['Blue', 'Green', 'White']));
print_r($kunjaVilla->windows('Front Side ', 2, 360, 420));
print_r($kunjaVilla->doors('Main Gate', 1, 360, 760));




