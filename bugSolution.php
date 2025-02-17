To fix this, explicitly convert the keys to strings before assigning values. This ensures that even if the floating-point numbers are very close, their string representations remain distinct.   Here's the corrected code:

```php
$data = [];
$data[(string)1.1] = 'value1';
$data[(string)1.0] = 'value2';

echo $data['1.1']; // Outputs 'value1'
echo $data['1.0']; // Outputs 'value2'
```

This approach is a safer way of handling floating-point or other non-standard keys as they are cast to string representations which maintains their uniqueness and prevents unexpected key collisions.  Alternatively, you may consider using a different data structure (like an associative array with custom objects or other composite keys) where the keys are explicitly defined as strings, completely avoiding the implicit type coercion issue.