<?php
// Define variables with different data types
$pageTitle = "Music Library"; // String
$isLoggedIn = false; // Boolean
$songCount = 5; // Integer
$rating = 4.5; // Float
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
  

    <div class="container my-5">
      <h1><?php echo $welcomeMessage; ?></h1>
      <div class="col-lg-8 px-0">
        <p class="fs-5"><?php echo $description; ?></p>
        
        <!-- Display songs using a foreach loop -->
        <div class="row">
          <?php foreach($songs as $song): ?>
            <div class="col-md-4 mb-4">
              <div class="card bg-secondary text-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo ($song); ?></h5>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <hr class="col-1 my-4">

        <!-- Use boolean for conditional rendering -->
        <?php if ($isLoggedIn): ?>
          <p>You are logged in! You can manage your playlist.</p>
        <?php else: ?>
          <p>Please log in to manage your playlist.</p>
        <?php endif; ?>
      </div>
    </div>


    
    <?php require_once '../views/footer.php'; ?>
    <script src="main.js"></script>
  </body>
</html>

