<?php

// Strategic use to decouple code
class Developer extends Employee {
    private float $technicalBonus;

    public function __construct(string $name, float $baseSalary, float $technicalBonus) {
        parent::__construct($name, $baseSalary);
        $this->technicalBonus = $technicalBonus;
    }

    public function calculateSalary(): float {
        return $this->getBaseSalary() + $this->technicalBonus;
    }
}