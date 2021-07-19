<?php

namespace App;

require_once 'Author.php';
require_once 'Publisher.php';

class Book
{
	private string $title;
	private string $language;
	private string $isbn;
	private int $pages;
	private string $edition;
	private object $author;
	private object $publisher;

	public function __construct(string $title, string $lang, int $page, string $edition, array $author, array $publisher)
	{
		$this->title		= trim(addslashes($title));
		$this->language	= $lang;
		$this->isbn			= bin2hex(base64_encode('ISBN' . rand(11111, 99999)));
		$this->pages		= $page;
		$this->edition		= $edition . ' Edition';
		$this->author		= new Author($author);
		$this->publisher	= new Publisher($publisher);
	}

	public function getBookInformation(): array
	{
		return array(
			'bookTitle'	=> $this->title,
			'language'	=> $this->language,
			'isbn_no'	=> $this->isbn,
			'pages'		=> $this->pages,
			'edition'	=> $this->edition,
			'author'		=> $this->author->getAuthorBio(),
			'publisher'	=> $this->publisher->getPublisherInfo()
		);
	}
}
