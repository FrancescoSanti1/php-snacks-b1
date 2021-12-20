<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
    <h1>Partite</h1>
    <?php
        $matches = [
            [
                "home" => "Fortituto Bologna",
                "away" => "Olimpia Milano",
                "homePoints" => 79,
                "awayPoints" => 93
            ],
            [
                "home" => "Virtus Bologna",
                "away" => "Pesaro",
                "homePoints" => 82,
                "awayPoints" => 102
            ],
            [
                "home" => "Trentoa",
                "away" => "Napoli",
                "homePoints" => 85,
                "awayPoints" => 91
            ],
            [
                "home" => "Brindisi",
                "away" => "Brescia",
                "homePoints" => 75,
                "awayPoints" => 73
            ]
        ];

        for ($i = 0; $i < 4; $i++) {
            echo "<div>" . $matches[$i]["home"] . " - " . $matches[$i]["away"] . " | " . $matches[$i]["homePoints"] . "-" . $matches[$i]["awayPoints"] . "</div>";
        }
    ?>
</body>
</html>