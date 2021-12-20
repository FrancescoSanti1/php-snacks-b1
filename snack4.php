<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>
<body>
    <?php
        $numbersList = [];

        while(count($numbersList) < 15) {
            $randomNumber = rand(1, 100);
            if(!in_array($randomNumber, $numbersList)) {
                $numbersList[] = $randomNumber;
            }
        }

        // var_dump($numbersList);
    ?>
</body>
</html>