### What is Inheritance?
> When a class derives from another class. The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.


### Type of Inheritance:
- <span style="color: green">Single Inheritance<span>
- <span style="color: red">Multiple Inheritance<span>
- <span style="color: green">Multi Level Inheritance<span>
- <span style="color: red">Hybrid Inheritance<span>
- <span style="color: red">Hierarchical Inheritance<span>

![Inheritance](./../../../assets/inheritance.png)

### Usages and Restriction:
- An inherited class is defined by using the `extends` keyword.
- PHP does not allow `multiple inheritance`, it allow only `multilevel inheritance`.

<br>

#### [Example for Employee Profile:](EmployeeProfile.php)
```bash 
$ php EmployeeProfile.php
```

```php 
Array
(
    [EmployeeProfile] => Array
        (
            [full_name] => Abdur Rahim
            [age] => 32
            [profession] => Graphic Designer
        )
)
```
<br>

#### [Example for Manager Profile:](ManagerProfile.php)
```bash 
$ php ManagerProfile.php
```

```php 
Array
(
    [ManagerProfile] => Array
        (
            [full_name] => Saleh Ahmed
            [age] => 37
            [profession] => Head of Department
        )
)
```
<br>

#### [Example for Multi Level Inheritance:](BalanceSheet.php)
```bash 
$ php BalanceSheet.php
```

```php 
Array
(
    [accountDetails] => Array
        (
            [bank_name] => Eastern Bank Limited
            [branch_address] => Dhaka-1206
            [account_number] => 4512-8754-6531
            [account_holder] => Abdur Rahim
            [txn_currency] => BDT
        )

    [salaryDetails] => Array
        (
            [basic_salary] => 9967.5 BDT
            [provident_fund] => 3322.5 BDT
            [salary_increment] => 4430 BDT
            [total_salary] => 22150 BDT
        )
)
```
