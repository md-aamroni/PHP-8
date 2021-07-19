### What is PolyMorphism?

---

- The PolyMorphism means <span style="color:red">**Many Forms**</span>, in order to <span style="color:yellow">**Poly**</span> stands for <span style="color:red">**Many**</span> and <span style="color:yellow">**Morphism**</span> stands for <span style="color:red">**Forms**</span>.
- In OOP, It deals with functions with the same operations may be behaved differently in different class.
- It is implemented using the concept of method overloading and method overriding.
- In PHP method overloading is not supported directly.
- Polymorphism must be using **[Interface](Interface)** and/or **[Abstract Class](Abstract)** as well.
- It is used to make the program more elegant and easier to maintain and update.
- It uses a single function that perform different actions according to the different requirements.

<br>

#### [Example of Polymorphism](Polymorphism.php)
```bash 
$ php Polymorphism.php
```
```php 
[comment]: <> (Autoload Classes)

spl_autoload_register(function ($class) {
   if (file_exists('Abstract/' . $class . '.php')) {
      require_once 'Abstract/' . $class . '.php';
   }

   if (file_exists('Interface/' . $class . '.php')) {
      require_once 'Interface/' . $class . '.php';
   }
});
```
<br>

```php 
[comment]: <> (Example of Using Abstract Class)

$ctf = new CelsiusToFahrenheit(37);
$ctf->calculate();

$ftc = new FahrenheitToCelsius(98.6);
$ftc->calculate();
```
```text 
[comment]: <> (Output Using Abstract Class)

Temperature of °F: 98.6
Temperature of °C: 37
```
<br>

```php 
[comment]: <> (Example of Using Interface)

$c= new Circle(20);
$c->area();

$r = new Rectangle(23, 18);
$r->area();

$t = new Triangle(15, 28.6);
$t->area();
```
```text 
[comment]: <> (Output Using Interface)

Area of circle: 1256.64
Area of rectangle: 414
Area of triangle: 214.50
```
