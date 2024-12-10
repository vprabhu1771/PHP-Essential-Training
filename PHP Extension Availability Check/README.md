To check if a specific PHP extension is available, you can use the `extension_loaded()` function in PHP. Here's how:

```php
if (extension_loaded('extension_name')) {
    echo "The extension is loaded.";
} else {
    echo "The extension is not loaded.";
}
```

Replace `extension_name` with the name of the extension you want to check (e.g., `curl`, `pdo_mysql`, `gd`, etc.).

### Example:
```php
if (extension_loaded('curl')) {
    echo "The cURL extension is available.";
} else {
    echo "The cURL extension is not available.";
}
```

This function is useful for validating whether certain functionality provided by an extension can be used in your script.