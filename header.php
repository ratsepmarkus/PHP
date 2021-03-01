<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meie Koduleht</title>
</head>

<body>
    <header>
        <nav>
            <?php
            include "functions.php";
            $navItems = [
                "/" => "Kodu",
                "service.php" => "Teenused",
                "about.php" => "Meist",
                "contact.php" => "Kontakt"
            ];

            print_nav($navItems);
            ?>
        </nav>
    </header>