<?php
require_once(__DIR__ . '/../source/database.php');

// Query met JOINs voor artiest en genre
$query = 'SELECT 
    songs.id, 
    songs.title,    
    songs.cover_image AS image, 
    songs.release_year, 
    songs.duration, 
    artists.name AS artist_name, 
    genres.name AS genre_name 
FROM songs 
LEFT JOIN artists ON songs.artist_id = artists.id 
LEFT JOIN genres ON songs.genre_id = genres.id 
ORDER BY songs.title ASC';

$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

while ($song = mysqli_fetch_assoc($result)): ?>
    <?php include(__DIR__ . '/card.php'); ?>
<?php endwhile; ?>
