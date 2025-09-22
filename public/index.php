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
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><?php echo $pageTitle; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">x
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

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
                  <h5 class="card-title"><?php echo htmlspecialchars($song); ?></h5>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>

