<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: grid;
            place-items: start;
            min-height: 10vh;
            margin: 0;
            font-family: 'Times New Roman', serif;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a:hover {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Recommended Books</h1>

    <?php
    $books = [
        [
            "name" => "The Kite Runner",
            "author" => "Khaled Hosseini",
            "year" => 2003,
            "purchase_url" => "https://www.thekiterunner.com"
        ],

        [
            "name" => "Project Hail Mary",
            "author" => "Andy Weir",
            "year" => 2001,
            "purchase_url" => "https://www.projecthailmary.com"
        ],

        [
            "name" => "The Silent Patient",
            "author" => "Alex Michaelides",
            "year" => 2005,
            "purchase_url" => "https://www.thesilentpatient.com"
        ]
    ];

    function filter($items, $fn)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    // $filteredBooks = filter($books, function ($book) {
    //     return $book["year"] >= 2000;
    // });

    $filteredBooks = array_filter($books, function ($book) {
        return $book["author"] === "Andy Weir";
    })

    ?>

    <ol>
        <?php foreach ($filteredBooks as $book) : ?>

            <li>

                <a href=" <?= ($book["purchase_url"]) ?>">
                    <?= $book["name"]; ?> (<?= $book["year"] ?>) By <?= $book["author"] ?>
                </a>

            </li>

        <?php endforeach; ?>
    </ol>

</body>

</html>