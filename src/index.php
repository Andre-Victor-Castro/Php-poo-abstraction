<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Implementation in architectures like Clean Architecture
require_once 'Employee.php';
require_once 'Developer.php';
require_once 'Manager.php';


$dev = new Developer("John", 5000, 1000);
$manager = new Manager("Mary", 8000, 1500);

echo "Salary of " . $dev->getName() . ": " . $dev->calculateSalary() . PHP_EOL;
echo "Salary of " . $manager->getName() . ": " . $manager->calculateSalary() . PHP_EOL;
