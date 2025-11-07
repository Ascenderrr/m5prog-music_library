<?php
$pageTitle = 'Search Results';
require_once '../views/header.php';
require_once '../source/database.php';

$zoekterm = isset($_GET['searchquery']) ? $_GET['searchquery'] : '';

?>
<div class="container my-5">
    <h2>Search results for: "<?php echo htmlspecialchars($zoekterm); ?>"</h2>
    
    <div class="row">
        <?php
        if ($zoekterm) {
            $query = 'SELECT 
                songs.id,
                songs.title,
                songs.cover_image AS image,
                songs.release_year,
                songs.duration,
                songs.slug,
                artists.name AS artist_name,
                genres.name AS genre_name
            FROM songs
            LEFT JOIN artists ON songs.artist_id = artists.id
            LEFT JOIN genres ON songs.genre_id = genres.id
            WHERE songs.title LIKE ?';

            $stmt = $connection->prepare($query);
            $parameter = '%' . $zoekterm . '%';
            $stmt->bind_param('s', $parameter);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                while ($song = mysqli_fetch_assoc($result)) {
                    include('../views/card.php');
                }
            } else {
                echo '<div class="col-12"><p>No songs found matching your search.</p></div>';
            }
        }
        ?>
    </div>
</div>

<?php require_once '../views/footer.php'; ?>

