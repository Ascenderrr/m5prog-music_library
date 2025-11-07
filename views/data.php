<?php
require_once(__DIR__ . '/../source/database.php');

$query = 'SELECT 
    songs.id, 
    songs.title,    
    songs.cover_image AS image, 
    songs.release_year, 
    songs.duration,
    songs.slug,
    artists.name AS artist_name, 
    artists.image_url AS artist_image,
    genres.name AS genre_name 
FROM songs 
LEFT JOIN artists ON songs.artist_id = artists.id 
LEFT JOIN genres ON songs.genre_id = genres.id 
ORDER BY songs.title ASC';

$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container my-5">
    <h1 class="mb-4">Music Library</h1>
    <div class="row">
        <?php while ($song = mysqli_fetch_assoc($result)): ?>
            <?php include(__DIR__ . '/card.php'); ?>
        <?php endwhile; ?>
    </div>
</div>


