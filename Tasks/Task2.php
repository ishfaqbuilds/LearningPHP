<!--
Task 2 — Arrays & Loops

Create an array of 5 movies with title, year, and genre. Loop through and display each 
one in a simple HTML list. Then filter and display only movies from after 2010.

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

    $movies = [
        [
            "title" => "The Shawshank Redemption",
            "year" => 1994,
            "genre" => "Drama"
        ],
        [
            "title" => "The Dark Knight",
            "year" => 2008,
            "genre" => "Action"
        ],
        [
            "title" => "Inception",
            "year" => 2010,
            "genre" => "Sci-Fi"
        ],
        [
            "title" => "Parasite",
            "year" => 2019,
            "genre" => "Thriller"
        ],
        [
            "title" => "Everything Everywhere All at Once",
            "year" => 2022,
            "genre" => "Comedy"
        ]
    ];

    function filter($items, $fn)
    {
        $filteredMovies = [];
        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredMovies[] = $item;
            }
        }
        return $filteredMovies;
    }

    $movies_after_2010 = filter($movies, function ($movie) {
        return $movie["year"] > 2010;
    });

    ?>

    <h3>Movie List:</h3>
    
    <?php foreach ($movies as $movie): ?>
        <p> <?= $movie["title"] ?> - <?= $movie["year"] ?> - <?= $movie["genre"] ?> </p>
    <?php endforeach; ?>

    <h3>Movies After 2010:</h3>

    <?php foreach ($movies_after_2010 as $movie): ?>
        <p><?= $movie["title"] ?> - <?= $movie["year"] ?> - <?= $movie["genre"] ?></p>
    <?php endforeach; ?>

</body>

</html>