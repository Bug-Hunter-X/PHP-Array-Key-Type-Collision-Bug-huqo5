In PHP, a common yet subtle error arises when dealing with array keys that are not strictly integers or strings.  PHP's loose typing can lead to unexpected behavior. For example, using a floating-point number as a key will implicitly convert it to an integer, potentially leading to key collisions and data loss. This is particularly problematic when you expect distinct keys based on floating-point values that are close but not exactly equal. Consider this example:
```php
$data = [];
$data[1.1] = 'value1';
$data[1.0] = 'value2';
echo $data[1]; //Outputs 'value2'
```
Here, the keys 1.1 and 1.0 are both cast to the integer 1, leading to 'value1' being overwritten.

Another issue arises when using objects or resources as array keys.  These are not allowed and result in a warning (though the array may still be used).  Attempting to use a non-scalar type as a key may not produce an immediate error but can cause unpredictable outcomes later in your code.  This can be particularly frustrating to debug because the error doesn't always manifest where the erroneous key is assigned.