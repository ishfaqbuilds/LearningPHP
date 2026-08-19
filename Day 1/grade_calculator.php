<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLI Student Grade Calculator</title>
</head>

<body>
    <?php
    $name = "Mohammad Ishfaqul Islam";
    $marks = 55;
    $grade = "";
    $remarks = "";

    if ($marks >= 80 && $marks <= 100) {
        $remarks = "Excellent";
        $grade = "A+";
    } elseif ($marks >= 75 && $marks <= 79) {
        $remarks = "Very Good";
        $grade = "A";
    } elseif ($marks >= 70 && $marks <= 74) {
        $remarks = "Very Good";
        $grade = "A-";
    } elseif ($marks >= 65 && $marks <= 69) {
        $remarks = "Good";
        $grade = "B+";
    } elseif ($marks >= 60 && $marks <= 64) {
        $remarks = "Good";
        $grade = "B";
    } elseif ($marks >= 55 && $marks <= 59) {
        $remarks = "Satisfactory";
        $grade = "B-";
    } elseif ($marks >= 50 && $marks <= 54) {
        $remarks = "Satisfactory";
        $grade = "C+";
    } elseif ($marks >= 45 && $marks <= 49) {
        $remarks = "Pass";
        $grade = "C";
    } elseif ($marks >= 40 && $marks <= 44) {
        $remarks = "Pass";
        $grade = "D";
    } else {
        $remarks = "Fail";
        $grade = "F";
    }

    echo "Student: $name <br>";
    echo "Marks:   $marks <br>";
    echo "Grade:   $grade <br>";
    echo "Remarks: $remarks <br>";
    ?>

</body>

</html>