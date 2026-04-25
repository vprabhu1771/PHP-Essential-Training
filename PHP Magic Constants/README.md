# PHP Magic Constants

PHP provides a set of predefined constants known as **Magic Constants**. These constants are called "magic" because their values change depending on where they are used in the code.

Unlike regular constants, **magic constants are resolved at compile time**, not at runtime.

---

## 📌 Key Features

* Context-dependent values
* Automatically defined by PHP
* Case-insensitive
* Useful for debugging and meta-programming

---

## 📋 List of Magic Constants

| Constant           | Description                                        |
| ------------------ | -------------------------------------------------- |
| `__LINE__`         | Returns the current line number of the file        |
| `__FILE__`         | Returns the full path and filename of the file     |
| `__DIR__`          | Returns the directory of the file                  |
| `__FUNCTION__`     | Returns the function name                          |
| `__CLASS__`        | Returns the class name (including namespace)       |
| `__TRAIT__`        | Returns the trait name (including namespace)       |
| `__METHOD__`       | Returns the class method name                      |
| `__PROPERTY__`     | Returns the property name (used in property hooks) |
| `__NAMESPACE__`    | Returns the current namespace                      |
| `ClassName::class` | Returns the fully qualified class name             |

---
Here are **clear, full working examples** for each PHP magic constant 👇

---

## 1. `__LINE__` → Current Line Number

```php
<?php
echo "This is line: " . __LINE__;
echo "\nThis is line: " . __LINE__;
```

---

## 2. `__FILE__` → Full File Path

```php
<?php
echo "File path: " . __FILE__;
```

---

## 3. `__DIR__` → Directory Path

```php
<?php
echo "Directory: " . __DIR__;
```

---

## 4. `__FUNCTION__` → Function Name

```php
<?php
function myFunction() {
    echo "Function name: " . __FUNCTION__;
}
myFunction();
```

---

## 5. `__CLASS__` → Class Name (with namespace)

```php
<?php
namespace App\Models;

class User {
    public function showClass() {
        echo "Class name: " . __CLASS__;
    }
}

$obj = new User();
$obj->showClass();
```

---

## 6. `__TRAIT__` → Trait Name

```php
<?php
namespace App\Traits;

trait MyTrait {
    public function showTrait() {
        echo "Trait name: " . __TRAIT__;
    }
}

class Test {
    use MyTrait;
}

$obj = new Test();
$obj->showTrait();
```

---

## 7. `__METHOD__` → Class Method Name

```php
<?php
class Demo {
    public function display() {
        echo "Method: " . __METHOD__;
    }
}

$obj = new Demo();
$obj->display();
```

---

## 8. `__PROPERTY__` → Property Name (PHP 8.2+ Property Hooks)

```php
<?php
class Example {
    public string $name {
        get {
            return "Accessing property: " . __PROPERTY__;
        }
    }
}

$obj = new Example();
echo $obj->name;
```

---

## 9. `__NAMESPACE__` → Current Namespace

```php
<?php
namespace App\Controllers;

echo "Namespace: " . __NAMESPACE__;
```

---

## 10. `ClassName::class` → Fully Qualified Class Name

```php
<?php
namespace App\Models;

class Product {}

echo Product::class;
```

---

## 🔥 Combined Example (All in One)

```php
<?php
namespace App\Demo;

trait SampleTrait {
    public function traitMethod() {
        echo "Trait: " . __TRAIT__ . "\n";
    }
}

class Demo {
    use SampleTrait;

    public string $prop {
        get {
            return __PROPERTY__;
        }
    }

    public function test() {
        echo "Line: " . __LINE__ . "\n";
        echo "File: " . __FILE__ . "\n";
        echo "Dir: " . __DIR__ . "\n";
        echo "Function: " . __FUNCTION__ . "\n";
        echo "Method: " . __METHOD__ . "\n";
        echo "Class: " . __CLASS__ . "\n";
        echo "Namespace: " . __NAMESPACE__ . "\n";
        echo "Class (FQN): " . self::class . "\n";

        $this->traitMethod();
        echo "Property: " . $this->prop . "\n";
    }
}

$obj = new Demo();
$obj->test();
```

---

If you want next level:

* Laravel real-time examples
* Interview questions + answers
* Debugging tricks using magic constants

Just tell me 👍

---

## ⚠️ Notes

* Magic constants are **case-insensitive**, but it's recommended to use uppercase.
* `__DIR__` is equivalent to `dirname(__FILE__)`.
* When used in included files, they refer to the included file, not the parent file.

---

## 🚀 Use Cases

* Debugging file paths and line numbers
* Logging and error tracking
* Reflection-like behavior in code
* Framework and library development

---

## 📖 Reference

Official PHP Documentation:
https://www.php.net/manual/en/language.constants.magic.php

---

## 👨‍💻 Author

Created for learning and quick reference of PHP Magic Constants.
