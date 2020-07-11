<?php

echo "<h1>Methods of returning data from arrays</h1>";

$employee1 = array("Michael", "Thompson", "51687", "26000");
$employee2 = array("James", "Rasmussen", "19875", "15000");
$employee3 = array("Henry", "Foggett", "19810", "150000");

;$employees = array($employee1, $employee2, $employee3);

echo "<h3>Details of Employee 1 (Manual Method)</h3>";

echo "First name: " . $employee1[0] . "<br>";
echo "Surname: " . $employee1[1] . "<br>";
echo "Payroll no.:  " . $employee1[2] . "<br>";
echo "Salary: $" . $employee1[3] . "<br>";
echo "<br>=================<br>";

$count = count($employee1);

echo "<h3>Details of Employee 1 (loop method)<h3>";

for ($x = 0; $x < $count; $x++) {
    echo $employee1[$x] . "<br>";
}

echo "<br>=====================<br>";
echo "<h3>First Name of Employee 1</h3>";
echo $employees[0][0];
echo "<br>=====================<br>";

echo "<br>=====================<br>";
echo "<h3>Salaray for Henry Foggett</h3>";
echo $employees[2][3];
echo "<br>=====================<br>";

echo "<h2>Details of all Employees (Double Loop Method)</h2>";
$employee_count = count($employees);

for ($x = 0; $x < $employee_count; $x++) {
    
    echo "<h3>Details of Employee " . ($x + 1) . " </h3>";
    for ($y = 0; $y < $employee_count; $y++) {
        echo $employees[$x][$y] . "<br>";
    }
}
?>