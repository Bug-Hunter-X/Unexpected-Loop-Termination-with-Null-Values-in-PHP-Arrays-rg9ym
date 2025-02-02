function foo(array $arr) {
  foreach ($arr as $value) {
    if (is_null($value)) {
      // Handle null values appropriately
      return;
    }
    // Process non-null values
  }
}