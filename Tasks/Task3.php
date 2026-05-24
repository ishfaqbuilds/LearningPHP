<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $products = [
        [
            "name" => "Nike Air Max Shoes",
            "price" => 4500,
            "discount" => 20
        ],
        [
            "name" => "Samsung Galaxy Buds",
            "price" => 3200,
            "discount" => 15
        ],
        [
            "name" => "Leather Wallet",
            "price" => 850,
            "discount" => 10
        ],
        [
            "name" => "Backpack",
            "price" => 1200,
            "discount" => 25
        ],
        [
            "name" => "Sunglasses",
            "price" => 650,
            "discount" => 30
        ]
    ];

    function applyDiscount($price, $discount)
    {
        return $price - ($price * $discount / 100);
    }

    ?>

    <h3> Discounted Price</h3>

    <?php foreach ($products as $product): ?>
        <?php $finalPrice = applyDiscount($product["price"], $product["discount"]); ?>
        <p>
            <?= $product["name"] ?> <br>
            Original: $<?= $product["price"] ?> <br>
            Discount: $<?= $product["discount"] ?> <br>
            Final Price: $<?= $finalPrice ?>
        </p>
    <?php endforeach; ?>

</body>

</html>