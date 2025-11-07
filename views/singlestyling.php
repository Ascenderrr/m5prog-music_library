<?php
// Set page title for the header
$pageTitle = "Song Details";

// Include necessary files
require_once __DIR__ . '/../source/database.php';
require_once __DIR__ . '/header.php';

// Get the slug from the URL (e.g., "blinding-lights")
$request_uri_parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$slug = end($request_uri_parts);

// Prepare the query to get song details with artist and genre
$query = '
    SELECT 
        songs.*, 
        artists.name AS artist_name,
        artists.image_url AS artist_image,
        genres.name AS genre_name
    FROM songs
    LEFT JOIN artists ON songs.artist_id = artists.id
    LEFT JOIN genres ON songs.genre_id = genres.id
    WHERE songs.slug = ?
';

$stmt = $connection->prepare($query);
$stmt->bind_param('s', $slug);
$stmt->execute();
$result = $stmt->get_result();
$song = $result->fetch_assoc();

?>

<main class="container my-5">
    <?php if ($song): ?>
        <div class="row">
            <!-- Cover Image -->
            <div class="col-md-5">
                <img src="<?php echo htmlspecialchars($song['cover_image']); ?>" 
                     class="img-fluid rounded shadow-lg" 
                     alt="<?php echo htmlspecialchars($song['title']); ?>"
                     style="max-height: 500px; object-fit: cover; width: 100%;">
            </div>
            
            <!-- Song Info -->
            <div class="col-md-7">
                <h1 class="display-4 mb-4"><?php echo htmlspecialchars($song['title']); ?></h1>
                
                <!-- Artist Info with Image -->
                <?php if (!empty($song['artist_image'])): ?>
                <div class="d-flex align-items-center mb-4">
                    <img src="<?php echo htmlspecialchars($song['artist_image']); ?>" 
                         class="rounded-circle me-3" 
                         style="width: 60px; height: 60px; object-fit: cover;" 
                         alt="<?php echo htmlspecialchars($song['artist_name']); ?>">
                    <div>
                        <small class="text-muted d-block">Artist</small>
                        <h4 class="mb-0"><?php echo htmlspecialchars($song['artist_name']); ?></h4>
                    </div>
                </div>
                <?php else: ?>
                <!-- Artist Info without Image -->
                <div class="mb-4">
                    <small class="text-muted d-block">Artist</small>
                    <h4><?php echo htmlspecialchars($song['artist_name']); ?></h4>
                </div>
                <?php endif; ?>

                <!-- Song Details Card -->
                <div class="card bg-secondary border-0 mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <small class="text-muted d-block">Genre</small>
                                <strong><?php echo htmlspecialchars($song['genre_name']); ?></strong>
                            </div>
                            <div class="col-6 mb-3">
                                <small class="text-muted d-block">Release Year</small>
                                <strong><?php echo htmlspecialchars($song['release_year']); ?></strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Duration</small>
                                <strong><?php echo htmlspecialchars($song['duration']); ?></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/" class="btn btn-outline-primary btn-lg">← Back to Library</a>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-danger text-center">
            <h2 class="alert-heading">Song Not Found</h2>
            <p>The song you're looking for doesn't exist.</p>
            <a href="/" class="btn btn-primary">Go Back Home</a>
        </div>
    <?php endif; ?>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
