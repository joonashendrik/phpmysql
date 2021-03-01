<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>peedi testimis kamber</title>
</head>

<body>
<header>
        <nav>
<?php

$array = [
 '/' => 'avaleht',
 '/kontakt.php' => 'kontakt',
 '/meist.php' => 'meist'
];
foreach ($array as $key => $value) {
    echo '<a href="'.$key.'" class="nav-item">'. $value . '</a>';
};
include "function.php";

print_nav($navItems);
?>

</nav>
</header>