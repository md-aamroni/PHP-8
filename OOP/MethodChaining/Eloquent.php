<?php

class Eloquent
{
	private string $query;

	public function all(): Eloquent
	{
		$this->query = "SELECT * FROM ";
		return $this;
	}

	public function sqlCode($table): Eloquent
	{
		$this->query .= $table;
		return $this;
	}

	public function whereValue($id): Eloquent
	{
		$this->query .= " WHERE id = {$id}";
		return $this;
	}

	public function and($col, $str): Eloquent
	{
		$this->query .= " AND {$col} = \"{$str}\"";
		return $this;
	}

	public function or($col, $str): Eloquent
	{
		$this->query .= " OR {$col} = \"{$str}\"";
		return $this;
	}

	public function orderBy($order = 'ASC'): Eloquent
	{
		$this->query .= " ORDER BY {$order}";
		return $this;
	}

	public function result(): string
	{
		return $this->query;
	}
}

$query = new Eloquent();
$users = $query->all()
					->sqlCode('users')
					->whereValue(5)
					->and('first_name', 'Jobayer')
					->or('gender', 'Male')
					->orderBy('DESC')
					->result();

echo $users;
