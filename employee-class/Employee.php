<?php 

//calculate the employee salary

class Employee{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;
    function getSalaryAmount($totalDays): int {
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;

    }
}

$emp1 = new Employee();
$emp1->id=101;
$emp1->name="John, Smith";
$emp1->totalLeaveTaken = 4;
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name salary is $salary";
