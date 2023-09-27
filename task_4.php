<?php

$studentGrades = [
    'Adeitto' => ['Math' => 65, 'English' => 85, 'Science' => 75],
    'Kumar' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Goon' => ['Math' => 80, 'English' => 84, 'Science' => 88],
];

function calculateAndPrintAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / count($grades);

        echo "Student $student's Average Grade: $averageGrade \n";
    }
}


calculateAndPrintAverageGrades($studentGrades);