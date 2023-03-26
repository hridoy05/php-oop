<?php 

//calculate the employee salary

class Employee{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function __construct($id, $name, $totalLeaveTaken){
        $this->id=$id;
        $this->name=$name;
        $this->totalLeaveTaken = $totalLeaveTaken;

    }
    function getSalaryAmount($totalDays): int {
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;

    }
}

$emp1 = new Employee(102, 'Hriody',5);

$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name salary is $salary";
