<?php

require_once 'Book.php';

use App\Book;

$authorInfo	= ['Munzareen Shahid', '27-04-1985', 'BA, MA in English', 'Life is all about next steps'];
$publisher	= ['Onnorokom Prokasoni', '+880 1316-440504', 'Dhaka-1206, Bangladesh', 4.5, 1234, 'Open Now'];
$bookFair21 = new Book('Spoken English form Home', 'Bangla and English', '144', '1st', $authorInfo, $publisher);

print_r($bookFair21->getBookInformation());
