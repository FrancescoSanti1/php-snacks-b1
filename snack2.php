<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
    <?php
        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = intval($_GET["age"]);

        $nameLength = strlen($name) > 3;
        $emailFormat = str_contains($email, '@') && str_contains($email, '.');
        $ageIsNumber = is_int($age);

        // var_dump($nameLength, $emailFormat, $ageIsNumber);

        if($nameLength && $emailFormat && $ageIsNumber) {
            echo "Accesso riuscito.";
        } else {
            echo "Accesso negato.";
        }
    ?>
</body>
</html>