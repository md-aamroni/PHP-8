### What is Construct?
> Classes which have a constructor method call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used.

### What is Destruct?
> Many developers writing object-oriented applications create one PHP source file per class definition. One of the biggest annoyances is having to write a long list of needed includes at the beginning of each script (one for each class).

### Usage:
- A `__construct()` allows you to initialize an object's properties upon creation of the object.
- A `__destruct()` is called when the object is destructed, or the script is stopped or exited.

<br>

#### [Example of House Class:](House.php)
```bash
$ php House.php
```

```php 
Array
(
    [outside_paint] => White, Red
    [inside_paint] => Blue, Green, White
)
Array
(
    [window_position] => Front Side
    [window_quantity] => 2
    [window_dimension] => (width) 360 X (height) 420 sq.ft
)
Array
(
    [door_position] => Main Gate
    [door_quantity] => 1
    [door_dimension] => (width) 360 X (height) 760 inch
)
```
<br>

#### [Example of Constructor Class:](Constructor.php)
```bash
$ php Constructor.php
```

```text 
Md. Abdur Rahim who designated as a Graphics Designer
Md. Karim Ullah who designated as a Android Developer
```
<br>

#### [Example of Destructor Class:](Destructor.php)
```bash
$ php Destructor.php
```

```text 
Md. Abdur Rahim who has been subscribed our newsletter. Thanks for be with us...
```
