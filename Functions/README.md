## Functions in PHP

To make sense, let us try to understand the difference between Function [Statement]() and [Expression]() in PHP.

```php 
[comment] <> (Function Statement)

function sayHello() {
    return 'this is an statement of a function';
}
```

```php 
[comment] <> (Function Expression)

function() {
    return 'this is an expression of a function';
};
```
<br>


- `is_callable` Verify that a value can be called as a function from the current scope.
- `call_user_func` Call the callback given by the first parameter

<br>

- [Closure Function](Closure.php)
```bash 
$ php Closure.php
```
- [Arrow Function](Arrow.php)
```bash 
$ php Arrow.php
```
- [Variable Scope](Scope.php)
```bash 
$ php Scope.php
```
