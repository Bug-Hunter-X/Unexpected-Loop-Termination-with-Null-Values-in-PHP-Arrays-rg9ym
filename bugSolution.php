function foo(array $arr) {
  foreach ($arr as $value) {
    if (!is_null($value)) {
      // Process non-null values
      // ... your code here
    } else {
      // Handle null values appropriately - Log, skip, throw exception, etc.
      // Example:  error_log('Null value encountered in array');
    }
  }
}