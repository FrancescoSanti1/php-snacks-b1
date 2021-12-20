<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 5</title>
</head>
<body>
    <?php
        $paragraph = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam aspernatur, hic excepturi voluptatem quae fuga corrupti corporis cupiditate! Similique mollitia quam ipsum corporis eos blanditiis, cupiditate dolores nihil sequi asperiores ratione magni at voluptate labore atque officiis consequatur? Nostrum voluptas tenetur quod sapiente, quidem odit beatae reprehenderit, maiores alias repellat doloremque ullam adipisci harum. Libero dolores harum beatae numquam saepe cupiditate, fugit illo a magnam suscipit. Perspiciatis neque libero cumque officia esse ut harum vel saepe nemo accusamus. Accusantium pariatur, exercitationem, quae vel culpa harum obcaecati consequuntur doloremque unde dolores reprehenderit. Minus veritatis impedit adipisci? At aliquid suscipit repellat corporis!";

        $paragraphsList = explode('.', $paragraph);

        for($i = 0; $i < count($paragraphsList); $i++) {
            echo "<p>" . $paragraphsList[$i] . ".</p>";
        }
    ?>
</body>
</html>