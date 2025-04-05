<?php

class Manager extends Employee {
    private float $managementBonus;

    public function __construct(string $name, float $baseSalary, float $managementBonus) {
        parent::__construct($name, $baseSalary);
        $this->managementBonus = $managementBonus;
    }

    public function calculateSalary(): float {
        return $this->getBaseSalary() + $this->managementBonus + ($this->getBaseSalary() * 0.1);
    }
}