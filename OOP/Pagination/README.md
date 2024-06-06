
  
```php
$pageNo = 1;
$limits = 5;
$offset = ($pageNo - 1) * $limits;

$index1 = $offset;
$index2 = $index1 + $limits;
$index3 = $index2 + $limits;
```
