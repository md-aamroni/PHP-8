### PDO - PHP Data Object
> A PHP interface defines a contract which a class must fill using methods. If a PHP class is a blueprint for objects, an interface is a blueprint for classes. Any class implementing a given interface can be expected to have the same behavior in terms of what can be called, how it can be called, and what will be returned.

> An Interface allows the users to create programs, specifying the public methods that a class must implement, without involving the complexities and details of how the particular methods are implemented. It is generally referred to as the next level of abstraction. It resembles the abstract methods, resembling the abstract classes.


### Usages:
- [x] Interfaces are declared with the ``` interface ``` keyword.
- [x] To implement an interface, a class must use the ``` implements ``` keyword.


### Interfaces vs. Abstract Classes:
Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
* Interfaces cannot have properties, while abstract classes can
* All interface methods must be public, while abstract class methods is public or protected
* All methods in an interface are abstract, so they cannot be implemented in code, and the abstract keyword is not necessary
* Classes can implement an interface while inheriting from another class at the same time


###### Example for Employees Class:
```
$ php Employees.php
```

```
This class statement is represent for Employees

Array
(
    [first_name] => Md. Rahim
    [last_name] => Uddin
    [age] => 30
    [email] => rahim@gmail.com
    [mobile] => +88 01316-440504
    [designation] => Technical Operator
    [organization] => ABC International Limited
    [location] => Dhaka-1206, Bangladesh
    [street] => Pathapath-1206
    [city] => Dhaka
    [country] => Bangladesh
)
```

###### Example for Manager Class:
```
$ php Managers.php
```

```
This class statement is represent for Managers

Array
(
    [first_name] => Md. Kabir
    [last_name] => Khan
    [age] => 32
    [email] => kabir.khan@gmail.com
    [mobile] => +88 01316-440497
    [designation] => Technical Manager
    [organization] => ABC International Limited
    [location] => Dhaka-1206, Bangladesh
    [street] => Pathapath-1206
    [city] => Dhaka
    [country] => Bangladesh
)
```
