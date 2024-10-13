# PHP Course - Class 01 - Introduction to PHP

Welcome to the PHP Course! This repository contains code snippets and examples you will learn during your first class. In this course, we will explore the basics of PHP programming, including syntax, data types, operators, control structures, functions, and more.

## Table of Contents

1. [Introduction to PHP](#introduction-to-php)
2. [Printing Statements](#printing-statements)
3. [Variables](#variables)
4. [Data Types](#data-types)
5. [Operators](#operators)
6. [Control Structures](#control-structures)
7. [Loops](#loops)
8. [Functions](#functions)
9. [Conclusion](#conclusion)

## Introduction to PHP

PHP (Hypertext Preprocessor) is a popular server-side scripting language designed for web development. It is widely used for creating dynamic web pages and web applications.

## Printing Statements

In PHP, you can print statements using:

- `print()`
- `echo`

Example:

```php
echo "Hello World 😊";
```

## Variables

In PHP, variables can be classified into two types:

- **Normal Variable**: Defined using the `$` sign.
- **Constant Variable**: Defined using `define()` or `const`.

Example:

```php
$name = "Babar";
define("AGE", 30);
```

## Data Types

PHP supports several data types:

- Integer
- String
- Array
- Float
- Null
- Boolean
- Object

## Operators

PHP includes various operators:

- **Arithmetic Operators**: `+`, `-`, `*`, `/`, `%`
- **Assignment Operators**: `=`, `+=`, `-=`, `*=`, `/=`
- **Comparison Operators**: `==`, `===`, `!=`, `!==`, `>`, `<`, `>=`, `<=`
- **Logical Operators**: `&&`, `||`, `!`
- **String Operator**: `.`
- **Increment/Decrement Operators**: `++`, `--`

## Control Structures

PHP provides several control structures for decision-making:

- `if`, `elseif`, `else`
- `switch`
- Ternary operator

Example:

```php
if (AGE >= 30) {
    echo "Age is greater than or equal to 30";
} else {
    echo "Age is less than 30";
}
```

## Loops

Loops allow you to execute code multiple times:

- **For Loop**
- **While Loop**
- **Do-While Loop**
- **foreach Loop**

Example of a `for` loop:

```php
for($a = 1; $a <= 10; $a++) {
    echo "$a ) Inside For Loop <br>";
}
```

## Functions

Functions in PHP can be defined and called to perform specific tasks.

### Creating a Function

```php
function greeting() {
    echo "Hello Good Morning <br>";
}
greeting();
```

### Functions with Parameters

```php
function add($num1, $num2) {
    return $num1 + $num2;
}
echo add(30, 40);
```

## Conclusion

This code serves as an introduction to the foundational concepts of PHP. As you progress through the course, you will learn more advanced topics and develop your skills in web development using PHP. Happy coding ✌