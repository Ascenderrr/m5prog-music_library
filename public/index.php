<?php
// Define variables with different data types
$pageTitle = "Music Library"; // String
$isLoggedIn = false; // Boolean
$songCount = 5; // Integer
$rating = 4.5; // Float
$image = null; // Null
$songs = array( // Array
    'Blinding Lights',
    'Shape of You',
    'Bad Guy',
    'Uptown Funk',
    'Someone Like You'
);


// Example of string interpolation with double quotes
$welcomeMessage = "Welcome to {$pageTitle}!";

// Example of escaping characters
$description = 'Our library\'s rating is ' . $rating . ' stars!';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="/dist/css/main.min.css" rel="stylesheet"> <!-- Compiled CSS file -->
    <script src="/dist/js/main.js"></script>
  </head>
  <body class="bg-dark text-light">

    <?php require_once '../views/header.php'; ?>
    <?php require_once '../views/data.php'; ?>

    
    <?php require_once '../views/footer.php'; ?>
    <script src="main.js"></script>
  </body>
</html>

