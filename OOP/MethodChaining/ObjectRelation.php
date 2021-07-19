<?php

class ObjectRelation
{
	private static string $query;
	private static ?object $instance = null;

	public static function all()
	{
		if (self::$instance === null) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	public function sqlCode($table): ObjectRelation
	{
		self::$query = "SELECT * FROM {$table}";
		return $this;
	}

	public function whereValue($id): ObjectRelation
	{
		self::$query .= " WHERE id = {$id}";
		return $this;
	}

	public function and($col, $str): ObjectRelation
	{
		self::$query .= " AND {$col} = \"{$str}\"";
		return $this;
	}

	public function or($col, $str): ObjectRelation
	{
		self::$query .= " OR {$col} = \"{$str}\"";
		return $this;
	}

	public function orderBy($order = 'ASC'): ObjectRelation
	{
		self::$query .= " ORDER BY {$order}";
		return $this;
	}

	public function result(): string
	{
		return self::$query;
	}
}

$admins = ObjectRelation::all()
				->sqlCode('admins')
				->whereValue(3)
				->and('isLogin', 'Yes')
				->or('isActive', 'Active')
				->orderBy()
				->result();

echo $admins;
