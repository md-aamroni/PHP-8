### What is Magic Constant?
> Magic constants are the predefined constants in PHP which is used on the basis of their use. These constants are created by various extensions. There are nine magic constant in the PHP and all of the constant resolved at the compile-time, not like the regular constant which is resolved at run time. There are eight magic constants that start and end with double underscores (__).


### Magic Constants:
- [x] ``` __LINE__ ``` The current line number of the file.
- [x] ``` __FILE__ ``` The full path and filename of the file with symlinks resolved.
- [x] ``` __DIR__ ``` The directory of the file. This is equivalent to ```dirname(__FILE__)```.
- [x] ``` __FUNCTION__ ``` The function name, or {closure} for anonymous functions.
- [x] ``` __CLASS__ ``` The class name. The class name includes the namespace it was declared.
- [x] ``` __METHOD__ ``` The class method name.
- [x] ``` __NAMESPACE__ ``` The name of the current namespace.
- [x] ``` __TRAIT__ ``` The trait names. The trait name includes the namespace it was declared.


### Limitation or Restriction:
* ```__LINE__``` and ```__FILE__``` and ```__DIR__``` and ```__FUNCTION__``` are could be used anywhere in PHP application.
* ```__CLASS__```  and ```__METHOD__``` and ```__NAMESPACE__``` and ```__TRAIT__``` are could be used only in OOP.

<br>

#### [Example of Constant:](Constants.php)
```bash 
$ php Constants.php
```

```text 
The line no is => 8
The file path is => D:\xampp\htdocs\fleet-learning-courses\php\oop\MagicConstant\Constants.php
The directory is => D:\xampp\htdocs\fleet-learning-courses\php\oop\MagicConstant
The function is => getFunction
```
N:B: Might be differed due to execution directory or path...

<br>

#### [Example of Constant Class:](ConstantClass.php)
```bash 
$ php ConstantClass.php
```

```text 
The class name is => ConstantClass
The method name is => ConstantClass::getMethodName
```

<br>

#### [Example of Constant Namespace Class:](ConstantNamespace.php)
```bash 
$ php ConstantNamespace.php
```
```text
The namespace of this class is => App\MagicConstant
```
<br>

#### [Example of Constant Trait Class:](ConstantTrait.php)
```bash 
$ php ConstantTrait.php
```

```text
The trait is => ConstantTrait
```
<br>

#### [Example of Functions:](functions.php)
```bash 
$ php functions.php
```

```text
Current line no is => 3
Current file path is => D:\xampp\htdocs\fleet-learning-courses\php\oop\MagicConstant\functions.php
Current directory is => D:\xampp\htdocs\fleet-learning-courses\php\oop\MagicConstant
Current function is => getFunction
```
