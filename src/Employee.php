<?php

// Difference between abstract class and interface:
abstract class Employee {
    private string $name;
    private float $baseSalary;

    public function __construct(string $name, float $baseSalary) {
        $this->name = $name;
        $this->baseSalary = $baseSalary;
    }

    public abstract function calculateSalary(): float;

    public function getName(): string {
        return $this->name;
    }

    public function getBaseSalary(): float {
        return $this->baseSalary;
    }
}