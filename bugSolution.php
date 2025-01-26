```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number; 
    } else {
      // Handle non-numeric values appropriately
      //For example, you could throw an exception, skip the value or use type juggling
      //Here we skip the non-numeric value
      //trigger_error("Non-numeric value encountered: " . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a', 5.5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```