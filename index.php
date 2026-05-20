
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

$filteredBooks = array_filter($books, function ($book) {
    return $book["author"] === "Alex Michaelides";
});

require "index.view.php";
