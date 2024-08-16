<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

for ($i = 1; $i <= 10; $i++) {
    $marks = rand(60, 100); // generate random marks between 60 and 100
    echo "Student $i: \n";
    echo "Marks: $marks \n";

    if ($marks > 80 && $marks < 90) {
        echo "Grade: A \n";
    } elseif ($marks > 70 && $marks < 81) {
        echo "Grade: B \n";
    } elseif ($marks > 60 && $marks < 70) {
        echo "Grade: C \n";
    } else {
        echo "Grade: F \n"; // assuming F for fail if marks are less than 60
    }

    echo "\n";
}
?>

  
</body>
</html>