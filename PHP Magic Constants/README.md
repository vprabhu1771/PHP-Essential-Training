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

## 💡 Examples

### Example 1: File and Line

```php
echo __FILE__;  // Output: /var/www/html/index.php
echo __LINE__;  // Output: Line number
```

### Example 2: Directory

```php
echo __DIR__;   // Output: Directory path
```

### Example 3: Function Name

```php
function testFunction() {
    echo __FUNCTION__;
}
testFunction(); // Output: testFunction
```

### Example 4: Class and Method

```php
class Demo {
    public function show() {
        echo __CLASS__;
        echo __METHOD__;
    }
}
$obj = new Demo();
$obj->show();
```

### Example 5: Namespace

```php
namespace App\Controllers;

echo __NAMESPACE__; // Output: App\Controllers
```

### Example 6: Class Name (Fully Qualified)

```php
namespace App\Models;

class User {}

echo User::class; // Output: App\Models\User
```

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
