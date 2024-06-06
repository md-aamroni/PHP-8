### What is Static Class?

---
In certain cases, it is very handy to access methods and properties in terms of a class rather than an object. This can be done with the help of static keyword. Any method declared as static is accessible without the creation of an object. Static functions are associated with the class, not an instance of the class. They are permitted to access only static methods and static variables. To add a static method to the class, static keyword is used.

### Usage and Restriction:

---
- Static methods can be called directly - <span style="color: yellow">without creating an instance of the class first</span>.
- Static methods are declared with the `static` keyword:
- A class can have both static and non-static methods.
- To call a static method from a child class, use the `parent` keyword inside the child class
- The static method can be `public` or `protected`
- Static properties are accessed using the <span style="color: yellow">Scope Resolution Operator</span> `(::)` and cannot be accessed through the object operator `(->)`.
- It's possible to reference the class using (`self`, `parent` and `static`) keywords.

<br>

#### [Example of Student Profile Class:](TeacherProfile.php)

```bash
$ php TeacherProfile.php
```

```php 
Array
(
    [full_name] => John Doe
    [designation] => Guest Lecturer
    [department] => English
    [email_id] => johndoe@gmail.com
    [mobile_no] => +880 1316-440504
    [address] => Dhaka-1206, Bangladesh
)
```
<br>

#### [Example of Bank Account Class:](BankAccount.php)

```bash
$ php BankAccount.php
```

```php 
Array
(
    [bank_name] => Eastern Bank Limited
    [account_holder] => Mr. John Doe
    [account_no] => 5454 752 986
    [expire_date] => 2024-07-15
)
```
<br>

#### [Example of Salary Statement Class:](SalaryStatement.php)

```bash
$ php SalaryStatement.php
```

```php 
Array
(
    [bank_name] => Bank Asia Limited
    [account_no] => 8745 5412 5451
    [basic_salary] => 6500 tk
    [transport_allowance] => 780 tk
    [dining_allowance] => 1170 tk
    [provident_fund] => 650 tk
    [total_salary] => 9100 tk
)
```
<br>

#### [Example of Child Class:](ChildClass.php)

```bash
$ php ChildClass.php
```

```text 
John Doe
Kabir Khan
```
