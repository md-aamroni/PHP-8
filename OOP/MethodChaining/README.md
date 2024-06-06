### What is Method Chaining?

---
Method chaining is a fluent interface design pattern used to simplify your code. If you've used frameworks like Zend or jQuery, you probably have some experience with chaining. Essentially your objects return themselves, allowing you to "chain" multiple actions together.

### Usage:

---
- In PHP, `$this` keyword references the current object of the class. The `$this` keyword allows you to access the properties and methods of the current object within the class using the object operator `(->)`
- Make sure that excluding `static` function all functions should be `non-static` as well.
- To bind as a chain functions return type must be `return $this`;

### Syntax:

---
- [x] Using Non-Static Classes:
```php 
$query = new Eloquent();
$users = $query->all()
               ->sqlCode('users')
               ->whereValue(5)
               ->and('first_name', 'Rahim')
               ->and('last_name', 'Ullah')
               ->or('gender', 'Male')
               ->orderBy('DESC')
               ->result();
```

- [x] Using Static Classes:
```php 
$admins = ObjectRelation::all()
          ->sqlCode('admins')
          ->whereValue(3)
          ->and('isLogin', 'Yes')
          ->or('isActive', 'Active')
          ->orderBy()
          ->result();
```
<br>

#### [Example of Non-Static Class](Eloquent.php)

```bash 
$ php Eloquent.php
```

```sql 
SELECT * FROM users WHERE id = 5 AND first_name = "Rahim" OR gender = "Male" ORDER BY DESC
```

<br>

#### [Example of Static Class](ObjectRelation.php)

```bash 
$ php ObjectRelation.php
```

```sql 
SELECT * FROM admins WHERE id = 3 AND isLogin = "Yes" OR isActive = "Active" ORDER BY ASC
```
