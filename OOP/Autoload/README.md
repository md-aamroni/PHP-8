### What is Auto Loading?
> The spl_autoload_register() function registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they are currently not defined. By registering autoloaders, PHP is given a last chance to load the class or interface before it fails with an error.

> Many developers writing object-oriented applications create one PHP source file per class definition. One of the biggest annoyances is having to write a long list of needed includes at the beginning of each script (one for each class).

### Usage:
- Excluding Try and Catch Block:
```php
spl_autoload_register( function($class) {
   require 'directory_path/' . $class . '.php';
});

$crCtrl = new CreateController;
$reCtrl = new ReadController;
$upCtrl = new UpdateController;
$deCtrl = new DeleteController;
$unCtrl = new UnknowController;
```

- Including Try and Catch Block
```php
spl_autoload_register(
  /**
   * @throws Exception
   */
   function ($class) {
      if (file_exists('Controllers/' . $class . '.php')) {
         require 'Controllers/' . $class . '.php';
      } else {
         throw new Exception('Oops! ' . $class . ' is not exist...' . PHP_EOL);
      }
   }
);

try {
   $crCtrl = new CreateController;
   $reCtrl = new ReadController;
   $upCtrl = new UpdateController;
   $deCtrl = new DeleteController;
   $unCtrl = new UnknowController;
} catch (Exception $e) {
   echo $e->getMessage();
}

```

### Restriction:
Prior to PHP 8.0.0, it was possible to use __autoload() to autoload classes and interfaces. However, it is a less flexible alternative to spl_autoload_register() and __autoload() is deprecated as of PHP 7.2.0, and removed as of PHP 8.0.0.

<br>

#### [Example of Autoload:](Autoload.php)
```bash
$ php Autoload.php
```

```text
This is a CreateController::index method of CreateController
This is a ReadController::index method of ReadController
This is a UpdateController::index method of UpdateController
This is a DeleteController::index method of DeleteController
```
