<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
$pageTitle = "Single Track";
require_once '../views/header.php';
require_once '../source/database.php';

// Controleer of er een 'single' parameter is
if (!isset($_GET['single'])) {
    die('Geen single gevonden');
}
$single_id = (int)$_GET['single'];

// Query met WHERE en JOINs
$query = 'SELECT 
    songs.*, 
    artists.name AS artist_name, 
    genres.name AS genre_name 
FROM songs 
LEFT JOIN artists ON songs.artist_id = artists.id 
LEFT JOIN genres ON songs.genre_id = genres.id 
WHERE songs.id = ?';

$stmt = $connection->prepare($query);
$stmt->bind_param('i', $single_id);
$stmt->execute();
$result = $stmt->get_result();
$song = $result->fetch_assoc();
?>

<div class="container my-5">
    <?php if ($song): ?>
        <div class="card mb-3">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?php echo ($song['title']); ?></h4>
            </div>
            <div class="card-img">
                <img class="card-img-top" src="<?php echo ($song['cover_image']); ?>" alt="<?php echo ($song['title']); ?>">
            </div>
            <div class="card-body">
                <p>Artiest: <?php echo ($song['artist_name']); ?></p>
                <p>Genre: <?php echo ($song['genre_name']); ?></p>
                <p>Duur: <?php echo ($song['duration']); ?></p>
                <p>Jaar: <?php echo ($song['release_year']); ?></p>
            </div>
        </div>
    <?php else: ?>
        <p>Single niet gevonden.</p>
    <?php endif; ?>
</div>

<?php require_once '../views/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>