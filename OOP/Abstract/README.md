### What is Abstract?
> Abstract classes are the classes in which at least one method is abstract. Unlike C++ abstract classes in PHP are declared with the help of abstract keyword. Use of abstract classes are that all base classes implementing this class should give implementation of abstract methods declared in parent class. An abstract class can contain abstract as well as non-abstract methods.

### Usages:
- [x] An abstract class or method is defined with the ```abstract``` keyword.
- [x] An abstract class is a class that contains at least one abstract method.
- [x] An abstract method is a method that is declared, but not implemented in the code.

### Rules for Child or Derived Class:
- [x] The child class method must be defined with the same name, and it redeclare the parent abstract method
- [x] The child class method must be defined with the same or less restricted access modifier
- [x] The number of required arguments must be the same. However, the child class may have optional arguments in addition

### Abstract vs. Interfaces:
| Interface                                                                            | Abstract                                                                    |
| -------------------------------------------------------------------------------------| ----------------------------------------------------------------------------|
| Interface support multiple inheritance                                               | Abstract class does not support multiple inheritance                        |
| Interface doesn't contains data member or properties                                 | Abstract class contains data member or properties                           |
| Interface doesn't contains constructors                                              | Abstract class contains constructor                                         |
| An interface contains only incomplete member (signature of member)                   | An Abstract class contains both complete ```abstract``` and complete member  |
| An interface cannot have access modifier by default, everything is assumed as public | An Abstract class can contains access modifier such as public and protected |
| Member of interface cannot be static                                                 | Only complete member of abstract class can be static                        |

### Example No 01:

```bash
$ php Students.php
```

```php
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
