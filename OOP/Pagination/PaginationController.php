<?php


class PaginationController
{
	public array $dataArr;

	public int $offsets;
	public int $limitOn;

	public string $pageURL;
	public string $ulClass;
	public string $liClass;

	public function __construct($data, $limit, $url, $ulClass, $liClass)
	{
		$this->dataArr = $data;
		$this->limitOn = $limit;
		$this->pageURL = $url;
		$this->ulClass = $ulClass;
		$this->liClass = $liClass;
		$this->offsets = $this->currentPageNo();
	}

	public function currentPageNo()
	{
		$explode = explode('=', $this->pageURL);
		if (isset($_GET[end($explode)])) {
			$this->offsets = $_GET[end($explode)];
		} else {
			$this->offsets = 1;
		}

		return $this->offsets;
	}


//	public function paginate(): void
//	{
//		$this->pageName = trim($page);
//
//		echo '<ul class="'. $ulClass .'">';
//		for ($i = 0; $i < count($data); $i++) {
//			echo '<li class="'. $liClass .'"><a href="'. $this->pageName.'?'.$i.'">'. $i.'</a></li>';
//		}
//		echo '</ul>';
//	}
}

$arr = ['Apple', 'Banana', 'Mango', 'Lemon'];

$obj = new PaginationController($arr, 3, 'users?page=2', 'list-items', 'list-item-inline');
print_r($obj);
