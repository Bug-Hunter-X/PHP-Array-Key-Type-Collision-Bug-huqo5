# PHP Array Key Type Collision Bug

This repository demonstrates a subtle but common bug in PHP related to array keys. PHP's flexible type system can lead to unexpected behavior when using non-integer and non-string values as array keys.  Specifically, this example focuses on floating-point numbers and the implicit type conversion that PHP performs.

## The Bug
The core issue is that using floating-point numbers as keys can result in unexpected key collisions. PHP automatically converts floating-point keys to integers, which can overwrite existing data if the floating-point numbers are close enough to the same integer value.

## How to Reproduce
The `bug.php` file contains a simple example that showcases this issue.  Run the script, and observe how a floating-point key leads to data loss.

## The Solution
The `bugSolution.php` file demonstrates a solution that explicitly converts keys to strings before assigning values, ensuring that different floating-point numbers are represented as distinct keys and preventing data loss.