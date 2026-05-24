<!--
Task 1 — Variable & Conditionals Practice

Build a simple PHP page that asks for a person's age (hardcode it as a variable 
for now) and displays:

"Child" if under 13
"Teenager" if 13–17
"Adult" if 18–59
"Senior" if 60+

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $age = 77;
    if ($age < 13) {
        echo "You're a Child";
    } else if ($age >= 13 && $age <= 17) {
        echo "You're a Teenager";
    } else if ($age >= 18 && $age <= 59) {
        echo "You're an Adult";
    } else {
        echo "You're a Senior";
    }
    ?>
</body>

</html>