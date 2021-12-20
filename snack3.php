<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>
    <?php
        $posts = [
            "10-12-2021" => [
                [
                    "title" => "Post 1",
                    "author" => "Giorgio",
                    "text" => "Testo post 1"
                ],
                [
                    "title" => "Post 2",
                    "author" => "Andrea",
                    "text" => "Testo post 2"
                ],
                [
                    "title" => "Post 3",
                    "author" => "Anna",
                    "text" => "Testo post 3"
                ]
            ],
            "13-12-2021" => [
                [
                    "title" => "Post 1",
                    "author" => "Giancarlo",
                    "text" => "Testo post 1"
                ],
                [
                    "title" => "Post 2",
                    "author" => "Antonella",
                    "text" => "Testo post 2"
                ],
                [
                    "title" => "Post 3",
                    "author" => "Valeria",
                    "text" => "Testo post 3"
                ]
            ],
            "15-12-2021" => [
                [
                    "title" => "Post 1",
                    "author" => "Simone",
                    "text" => "Testo post 1"
                ],
                [
                    "title" => "Post 2",
                    "author" => "Giorgia",
                    "text" => "Testo post 2"
                ]
            ],
        ];

        $keys = array_keys($posts);

        for($i = 0; $i < count($keys); $i++) {
            echo "<br><div>Data: " . $keys[$i] . "</div>";
            $newDate = $keys[$i];

            for($j = 0; $j < count($posts[$newDate]); $j++) {
                echo "<h3>Titolo post: " . $posts[$newDate][$j]["title"] . "</h3>";
                echo "<p>Testo: " . $posts[$newDate][$j]["text"] . "</p>";
                echo "<div>Autore: " . $posts[$newDate][$j]["author"] . "</div>";
            }
        }
    ?>
</body>
</html>