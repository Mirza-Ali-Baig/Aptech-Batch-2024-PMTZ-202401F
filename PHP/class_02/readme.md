# PHP Course - Class 02 - Introduction to Arrays

Welcome to the PHP Course! In this section, we'll explore arrays, one of the fundamental data structures in PHP. Arrays allow you to store multiple values in a single variable, making it easier to manage collections of data.

## Table of Contents

1. [Introduction to Arrays](#introduction-to-arrays)
2. [Types of Arrays](#types-of-arrays)
   - [Indexed Arrays](#indexed-arrays)
   - [Associative Arrays](#associative-arrays)
   - [Multidimensional Arrays](#multidimensional-arrays)
3. [Basic Array Methods](#basic-array-methods)
4. [Conclusion](#conclusion)

## Introduction to Arrays

Arrays in PHP can hold multiple values under a single name and are useful for organizing data. There are several types of arrays in PHP.

## Types of Arrays

### Indexed Arrays

Indexed arrays use numeric indexes. You can create an indexed array like this:

```php
$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90];
```

You can access specific index values using their numeric index:

```php
echo $numbers[3]; // Outputs: 40
```

You can also loop through an indexed array using a `for` loop:

```php
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . "\n";
}
```

### Associative Arrays

Associative arrays use named keys to access values. Here's how to create an associative array:

```php
$student = [
    'id' => 1,
    'name' => "Rizwan",
    'age' => 12,
    'class' => "6th",
    'email' => 'rizwan@gmail.com'
];
```

You can access specific values by their keys:

```php
echo $student['name']; // Outputs: Rizwan
```

You can also loop through an associative array using a `foreach` loop:

```php
foreach ($student as $key => $value) {
    echo $key . ": " . $value . "\n";
}
```

### Multidimensional Arrays

Multidimensional arrays are arrays that contain other arrays. Here's an example:

```php
$students = [
    [
        'id' => 1,
        'name' => "Rizwan",
        'age' => 12
    ],
    [
        'id' => 2,
        'name' => "Ali",
        'age' => 13
    ]
];
```

You can access values in a multidimensional array like this:

```php
echo $students[0]['name']; // Outputs: Rizwan
```

## Basic Array Methods

Here are some basic array methods you can use in PHP:

### 1. `array_push()`

Adds one or more elements to the end of an array.

```php
array_push($numbers, 100);
print_r($numbers); // Outputs the updated array
```

### 2. `array_pop()`

Removes the last element from an array.

```php
array_pop($numbers);
print_r($numbers); // Outputs the updated array without the last element
```

### 3. `array_shift()`

Removes the first element from an array.

```php
array_shift($numbers);
print_r($numbers); // Outputs the updated array without the first element
```

### 4. `array_unshift()`

Adds one or more elements to the beginning of an array.

```php
array_unshift($numbers, 5);
print_r($numbers); // Outputs the updated array with 5 at the beginning
```

### 5. `count()`

Counts all elements in an array.

```php
echo count($numbers); // Outputs the number of elements in the array
```

### 6. `in_array()`

Checks if a value exists in an array.

```php
if (in_array(20, $numbers)) {
    echo "20 is in the array.";
}
```

### 7. `array_merge()`

Merges one or more arrays.

```php
$moreNumbers = [100, 200];
$mergedArray = array_merge($numbers, $moreNumbers);
print_r($mergedArray); // Outputs the merged array
```
## Conclusion

Arrays are a powerful feature in PHP that allows you to store and manipulate collections of data easily. By mastering arrays and their methods, you will be better equipped to handle data-driven applications in PHP. Keep practicing with arrays to solidify your understanding!

### `================= Rendom.php =================`

# PHP Employee Table Example

## Overview

This project demonstrates how to create a simple HTML page that displays employee data in a table format using PHP. It showcases how to use arrays, loops, and basic HTML to present information dynamically.

## Table of Contents

2. [Code Explanation](#code-explanation)
4. [Conclusion](#conclusion)



## Code Explanation

### HTML Structure

The HTML structure includes:

- A `<!DOCTYPE html>` declaration
- A `<head>` section that contains metadata and styles
- A `<body>` section that displays the employee information in a table

### CSS Styles

The CSS in the `<style>` tag styles the `<h1>` element for better visibility:

```css
h1 {
    font-size: 50px;
    text-align: center;
    margin: 100px;
}
```

### PHP Code

The PHP code creates an associative array named `$employees`, which contains details of multiple employees. Each employee has an ID, name, age, and salary. The data is then dynamically displayed in a table using a `foreach` loop.

#### Employee Data Example

```php
$employees = [
    ["id" => 3, "name" => "Jill", "age" => 28, "Salary" => 12000],
    ["id" => 4, "name" => "Jake", "age" => 22, "Salary" => 15000],
    // Additional employees...
];
```

#### Displaying the Table

The PHP code within the `<tbody>` of the table iterates over the `$employees` array and generates a table row for each employee:

```php
foreach ($employees as $employee) {
    echo "<tr>
            <td>{$employee['id']}</td>
            <td>{$employee['name']}</td>
            <td>{$employee['age']}</td>
            <td>{$employee['Salary']}</td>
          </tr>";
}
```

### JavaScript

A placeholder for JavaScript is included at the end, currently commented out:

```html
<script>
    // alert();
</script>
```

## Conclusion

This example provides a basic introduction to using PHP for dynamic web page content. By displaying employee data in a table, it demonstrates array manipulation and HTML rendering with PHP. You can expand this project by adding more features, such as editing or deleting employee records. Happy coding!

