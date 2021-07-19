### What is Namespace?
> PHP Namespaces are the way of encapsulating items so that same names can be reused without name conflicts.

### Why use Namespace?
Namespaces are qualifiers that solve two different problems:
- They allow for better organization by grouping classes that work together to perform a task
- They allow the same name to be used for more than one class

### Usage and Restriction:
- A namespace <span style="color: yellow">must be declared</span> the namespace <span style="color: tomato">at the top of the file before any other code.</span>
- Namespaces are declared using the `namespace` keyword.
- You can import namespaces with the `use` keyword, thus avoiding the need to specify <span style="color: pink">fully qualified names</span>.
- Aliasing is similar to importing us `as` keyword, but it allows you to reference long namespaces by specifying a <span style="color: pink">shorter name</span>.

### Syntax:
Define a Namespace:

```php
namespace Library\Excel;
```

Example of Use Case No 01:

```php 
$app = new \Library\Excel\GenerateFile();
```

Example of Use Case No 02:
  
```php 
use Library/Excel/GenerateFile;
$app = new GenerateFile();
```

```php 
use Library/Excel/GenerateFile as Excel;
$app = new Excel();
```

<br>

#### [Example of Downloader Class:](Downloader.php)
```bash 
$ php Downloader.php
```

```text 
PDF file is downloaded successfully...
Excel file is downloaded successfully...
```

