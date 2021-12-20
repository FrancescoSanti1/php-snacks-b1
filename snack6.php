<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 6</title>
    <style>
        .teachers {
            background-color: lightgrey;
            display: inline-block;
            margin-right: 30px;
        }
        .pms {
            background-color: yellowgreen;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
        $db = [
            'teachers' => [
                ['name' => 'Michele', 'lastname' => 'Papagni'],
                ['name' => 'Fabio', 'lastname' => 'Forghieri']
            ],
            'pm' => [
                ['name' => 'Roberto', 'lastname' => 'Marazzini'],
                ['name' => 'Federico', 'lastname' => 'Pellegrini']
            ]
        ];
    ?>

    <div class="teachers">
        <h3>Teachers</h3>
        <?php
            for($i = 0; $i < count($db['teachers']); $i++) {
                echo "<div>" . $db['teachers'][$i]['name'] . " " . $db['teachers'][$i]['lastname'] . "</div>";
            }
        ?>
    </div>

    <div class="pms">
        <h3>PM</h3>
        <?php
            for($i = 0; $i < count($db['pm']); $i++) {
                echo "<div>" . $db['pm'][$i]['name'] . " " . $db['pm'][$i]['lastname'] . "</div>";
            }
        ?>
    </div>
</body>
</html>