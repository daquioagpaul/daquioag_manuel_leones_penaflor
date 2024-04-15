<?php

class Grade {
    // Properties
    private $studentName;
    private $scores = [];
    private $totalScore;
    private $numberOfSubjects;
    private $averageGrade;

    // Constructor
    public function __construct($name, $scores) {
        $this->studentName = $name;
        $this->scores = $scores;
        $this->numberOfSubjects = count($scores);
        $this->totalScore = array_sum($scores);
        $this->averageGrade = $this->calculateAverageGrade();
    }

    // Methods
    private function calculateAverageGrade() {
        return $this->totalScore / $this->numberOfSubjects;
    }

    public function displayStudentInfo() {
        echo "Student Name: " . $this->studentName."\n";
        echo "Total Subjects: " . $this->numberOfSubjects."\n";
        echo "Total Score: " . $this->totalScore."\n";
        echo "Average Grade: " . $this->averageGrade."\n";
    }

    public function determineGrade() {
        $grade = '';

        if ($this->averageGrade >= 90) {
            $grade = 'Excellent!';
        } elseif ($this->averageGrade >= 80) {
            $grade = 'Very Good!';
        } elseif ($this->averageGrade >= 75) {
            $grade = 'Good';
        } else {
            $grade = 'Failed!';
        }

        echo "Final Grade: " . $grade;
    }
}

// Example usage
$scores = [85, 90, 92, 88, 78]; // Scores for 5 subjects
$student = new Grade("John Doe", $scores);
$student->displayStudentInfo();
$student->determineGrade();
?>
