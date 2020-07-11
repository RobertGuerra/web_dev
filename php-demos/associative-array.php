<?php

echo "<h1>Methods of returning data from arrays</h1>";

$employee1 = array('Firstname' => "Michael", 'Surname' => "Thompson", 'Payroll_Id' => "51687", 'Salary' => "26000");
$employee2 = array('Firstname' => "James", 'Surname' => "Rasmussen", 'Payroll_Id' => "19875", 'Salary' => "15000");
$employee3 = array('Firstname' => "Henry", 'Surname' => "Foggett", 'Payroll_Id' => "19810",  'Salary' => "150000");

$employees = array($employee1, $employee2, $employee3);

// print employee one details
foreach ($employee1 as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

echo "<br>=========================<br>";

echo "<h2>Details of all Employees (associative array)</h2>";

$employee_count = count($employees);

for ($x = 0; $x < $employee_count; $x++) {
    echo "<h3>Details of Employee " . ($x + 1) . "<br></h3>";
    
    foreach ($employees[$x] as $key => $value) {
        echo "<span style = 'margin-left: 40px; '>";
        echo $key . ": " . $value . "</span><br>";
    }
    echo "<br>";
}

?>