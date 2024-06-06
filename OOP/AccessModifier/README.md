### What is Access Modifier?
In the PHP each and every property of a class in must have one of three visibility levels, known as public, private, and protected.

- `Public:` Public properties can be accessed by any code, whether that code is inside or outside the class. If a property is declared public, its value can be read or changed from anywhere in your script.
- `Private:` Private properties of a class can be accessed only by code inside the class. So if we create a property that’s declared private, only methods and objects inside the same class can access its contents.
- `Protected:` Protected class properties are a bit like private properties in that they can’t be accessed by code outside the class, but there’s one little difference in any class that inherits from the class i.e., base class can also access the properties.

### Usages and Restriction:
| Modifier  | Class Itself                          | Derived or Child Class                | Outside of Class                      |
| ----------| :-----------------------------------: | :-----------------------------------: | :-----------------------------------: |
| Public    | <span style="color: green">YES</span> | <span style="color: green">YES</span> | <span style="color: green">YES</span> |
| Protected | <span style="color: green">YES</span> | <span style="color: green">YES</span> | <span style="color: red">NO</span>    |
| Private   | <span style="color: green">YES</span> | <span style="color: red">NO</span>    | <span style="color: red">NO</span>    |

<br>

#### [Example for Public Access Modifier:](PublicModifier.php)
```bash
$ php PublicModifier.php
```

```text 
Md. Kabir Khan
```
<br>

#### [Example for Protected Access Modifier:](ProtectedModifier.php)
```bash
$ php ProtectedModifier.php
```

```text 
Md. Kabir Khan
```
<br>

#### [Example for Private Access Modifier:](PrivateModifier.php)
```bash
$ php PrivateModifier.php
```

```text 
Md. Kabir Khan
```
