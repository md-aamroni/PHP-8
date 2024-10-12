### What is Get Functions?

---


### What is Conditional Functions?

---


#### [List of <span style="color:tomato">Get</span> Functions and Usage:](GetFunction.php)

---
`get_class`
```php 
$object = new Activities();
echo 'Class name is: ' . get_class($object) . PHP_EOL;
```

`get_parent_class`
```php 
$extend = new ExtendActivities();
echo 'Parent class name is: ' . get_parent_class($extend) . PHP_EOL;
```
  
`get_class_methos`
```php 
$object = new Activities();
print_r(get_class_methods($object));
```

`get_class_vars` 
```php 
$extend = new ExtendActivities();
print_r(get_class_vars(get_class($extend)));
```

`get_object_vars`
```php 
$extend = new ExtendActivities();
print_r(get_object_vars($extend));
```

`get_called_class`
```php 
echo Activities::getCalledClass();
echo ExtendActivities::getCalledClass();
```

`get_declared_classes`
```php 
print_r(get_declared_classes());
```

`get_declared_interfaces`
```php 
print_r(get_declared_interfaces());
```

`get_declared_traits`
```php 
print_r(get_declared_traits());
```

`class_alias`
```php 
class_alias('ExtendActivities', 'ExAct');
$exAct = new ExAct();
echo $exAct->firstName . ' ' . $exAct->lastName . PHP_EOL;
```
<br>

#### [List of <span style="color:tomato">Conditional</span> Functions and Usage:](ConditionalFunction.php)

---

`class_exists`
```php 
if (class_exists('SimpleClass')) {
    echo 'class is exist' . PHP_EOL;
} else {
    echo 'Oops! class is not exist' . PHP_EOL;
}
```

`interface_exists`
```php 
if (interface_exists('SimpleInterface')) {
    echo 'interface is exist' . PHP_EOL;
} else {
    echo 'Oops! interface is not exist' . PHP_EOL;
}
```

`method_exists`
```php 
$object = new SimpleClass();

if (method_exists($object, 'index')) {
    echo 'method is exist' . PHP_EOL;
} else {
    echo 'Oops! method is not exist' . PHP_EOL;
}
```

`trait_exists`
```php 
if (trait_exists('SimpleTrait')) {
    echo 'trait is exist' . PHP_EOL;
} else {
    echo 'Oops! trait is not exist' . PHP_EOL;
}
```

`property_exists`
```php 
if (property_exists('SimpleTrait', 'firstName')) {
    echo 'property is exist' . PHP_EOL;
} else {
    echo 'Oops! property is not exist' . PHP_EOL;
}
```

`is_a`
```php 
if (is_a($object, 'SimpleClass')) {
    echo '$object is instantiate based on SimpleClass' . PHP_EOL;
} else {
    echo 'Oops! $object is not instantiate based on SimpleClass' . PHP_EOL;
}
```

`is_subclass_of`
```php 
if (is_subclass_of($extend, 'SimpleClass')) {
    echo '$extend is instantiate based on ExtendedClass which extended from SimpleClass' . PHP_EOL;
} else {
    echo 'Oops! $extend is not instantiate based on ExtendedClass which extended from SimpleClass' . PHP_EOL;
}
```
