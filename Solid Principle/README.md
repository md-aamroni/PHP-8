## What is SOLID Principle?
SOLID is an acronym for 5 important design principle when doing OOP (Object-Oriented Programming). These 5 principles were introduced by `Robert C.Martin (Uncle Bob)` in his 2000 paper <span style="color: yellow">Design Principles and Design Patterns</span>. The actual S.O.L.I.D acronym was, however identified later by `Micheal Feathers`.

```text
S = Single Responsibility Principle
O = Open Closed Principle
L = Liskov Substitution Principle
I = Interface Segregation Principle
D = Dependency Inversion Principle
```
<br>

#### [The Single Responsibility Principle](single-responsibility)
A class should have one and only one reason to change.
- Makes the class easier to maintain
- Potentially makes class reusable
- Easier to test
```bash
php index.php
```
```php 
use App\SingleResponsibility as SRP;

// TODO: Example (Bad Design Pattern) No 01:
$shape = new SRP\ShapeCalculator();
$shape->areaOfSquare(15);
$shape->areaOfCircle(20);
$shape->areaOfTriangle(15, 2);


// TODO: Example (Bad Design Pattern) No 02:
$staff = new SRP\SalaryGenerator('John Doe', 'Software Developer', 'ABC Private Co. Ltd.', '15000');
print_r($staff->salarySheet());


// TODO: Example (Good Design Pattern) No 03:
$square = new SRP\Square(20);
$circle = new SRP\Circle(15);
$tangle = new SRP\Triangle(8, 2);

$area = new SRP\AreaCalculator($square, $circle, $tangle);
$area->shapeGenerate();


// TODO: Example (Good Design Pattern) No 04:
$rashid = new SRP\Employee('Md. Abdur Rashid', 'Professional Graphics Designer', 'XYZ Internation Limited');
$salary = new SRP\Payroll(6500);

$hrm = new SRP\HumanResource($rashid, $salary);
print_r($hrm->statement());
```
<br>

#### [The Open Closed Principle](open-closed)
Object or entities should be Open for extension and Closed for modification
```bash
php index.php
```
```php 
use App\OpenClosed as OC;

$square = new OC\Square(20);
$circle = new OC\Circle(15);
$tangle = new OC\Triangle(8, 12);

$shapes = new OC\ShapeGenerator($square);
$shapes->run();
```
<br>

#### [The Liskov Substitution Principle](liskov-substitution)
In a computer program, if S is a subtype of T, then objects of type T may be replaced with objects of type S without altering any of the desirable properties of the program (correctness, task performed, etc.)

The following 5 rules is required to achieve `Liskov Substitution Principle`

	- Child function arguments must match function arguments of parent
	- Child function return type must match parent function return type
	- Child pre-conditions cannot be greater than parent function pre-conditions
	- Child function post-conditions cannot be lesser than parent function post-conditions
	- Exceptions thrown by child method must be the same as or inherit form and exception thrown by the parent method



```bash
php index.php
```
```php 

```
<br>

#### [The Interface Segregation Principle](interface-segregation)
The Interface Segregation Principle (ISP) states that no client should be forced to depend on methods that it does not use. ISP splits interfaces that are very large into smaller and more specific interfaces so that clients will only need to implement methods that are of interest to them.
- Interface = Contract
- Segregation = Divided or Split Up

<span style="color:red">The most important things it that, if a Interface contain only one method, however it's most convenient for this principle.</span>

```bash
php index.php
```
```php 

```
<br>

#### [The Dependency Inversion Principle](dependency-inversion)
A class should have one and only one reason to change.
```bash
php index.php
```
```php 

```
