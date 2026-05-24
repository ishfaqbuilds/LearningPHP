<!DOCTYPE html>
<html lang="en>

<head>
	<meta charset=" UTF-8">

<title>Document</title>
<style>
    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }
</style>
</head>

<body>
    <?php
    $name = "Atomic Habits";
    $read = true;
    ?>
    <h1>
        <?php
        if ($read) {
            echo "You have read $name";
        } else {
            echo "You have no read $name";
        }
        ?>
    </h1>
</body>

</html>