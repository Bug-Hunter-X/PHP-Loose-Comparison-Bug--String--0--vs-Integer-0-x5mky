The solution involves using strict comparison (`===`) instead of loose comparison (`==`). Strict comparison checks both the value and the type of the operands.

```php
<?php
$stringZero = '0';
$integerZero = 0;

if ($stringZero === $integerZero) {
    echo "They are equal!\n";
} else {
    echo "They are not equal!\n";
}

$stringOne = '1';
$integerOne = 1;

if ($stringOne === $integerOne) {
    echo "They are equal!\n";
} else {
    echo "They are not equal!\n";
}

$stringNonZero = 'hello';
$integerNonZero = 0;

if ($stringNonZero === $integerNonZero) {
    echo "They are equal!\n";
} else {
    echo "They are not equal!\n";
}
?>
```
By using `===`, the code now accurately reflects the differences in type and value between string and integer comparisons.