<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
    <h1>My Portfolio</h1>
    <img src="" alt=""> <!-- ievietojam attēlu -->
    <p>Apraksta par mani</p>

    <?php
        $names = [
            1 => ['name' => 'Janis', 'email' => 'janis@fakemail.com'],
            2 => ['name' => 'Antra', 'email' => 'antra@fakemail.com'],
            3 => ['name' => 'Saule', 'email' => 'saule@fakemail.com'],
        ];

        echo "<ul>";
        foreach ($names as $name) {
            // echo "<li>{$name['email']}</li>";
            echo "<li>Name: " . $name['name']. ", Email: " . $name['email'] . "</li>";
        }
        echo "</ul>";

    ?>

    <a href="/contact.html">Sazinies ar mani</a>
</body>
</html>