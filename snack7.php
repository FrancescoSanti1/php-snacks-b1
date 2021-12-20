<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 7</title>
</head>
<body>
    <?php
        $students = [
            [
                'name' => 'Luca',
                'lastname' => 'Rossi',
                'grades' => [
                    ['subject' => 'italiano', 'grade' => 7],
                    ['subject' => 'matematica', 'grade' => 8],
                    ['subject' => 'storia', 'grade' => 6],
                    ['subject' => 'inglese', 'grade' => 5]
                ]
            ],
            [
                'name' => 'Michela',
                'lastname' => 'Bianchi',
                'grades' => [
                    ['subject' => 'italiano', 'grade' => 4],
                    ['subject' => 'matematica', 'grade' => 5],
                    ['subject' => 'storia', 'grade' => 6],
                    ['subject' => 'inglese', 'grade' => 8]
                ]
            ],
            [
                'name' => 'Antonio',
                'lastname' => 'Grandi',
                'grades' => [
                    ['subject' => 'italiano', 'grade' => 8],
                    ['subject' => 'matematica', 'grade' => 5],
                    ['subject' => 'storia', 'grade' => 6],
                    ['subject' => 'inglese', 'grade' => 9]
                ]
            ]
        ];

        for($i = 0; $i < count($students); $i++) {

            $numOfGrades = count($students[$i]['grades']);
            $sumOfGrades = 0;
            for($j = 0; $j < count($students[$i]['grades']); $j++) {
                $sumOfGrades += $students[$i]['grades'][$j]['grade'];
            }
            $averageGrade = $sumOfGrades / $numOfGrades;
            echo "<div>" . $students[$i]['name'] . " " . $students[$i]['lastname'] . ".  Media voti: " . $averageGrade . "</div><br>";
        }
    ?>
</body>
</html>