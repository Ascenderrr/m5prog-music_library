<div class="card mb-3">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo htmlspecialchars($song['title']); ?></h4>
    </div>
    <div class="card-img">
        <img class="card-img-top" src="<?php echo htmlspecialchars($song['image']); ?>" alt="<?php echo htmlspecialchars($song['title']); ?>">
    </div>
    <div class="card-body">
        <p>Artiest: <?php echo htmlspecialchars($song['artist_name']); ?></p>
        <p>Genre: <?php echo htmlspecialchars($song['genre_name']); ?></p>
        <p>Duur: <?php echo htmlspecialchars($song['duration']); ?></p>
        <p>Jaar: <?php echo htmlspecialchars($song['release_year']); ?></p>
        <a href="/single.php?singleid=<?php echo $song['id']; ?>" class="btn btn-primary">Bekijk</a>
    </div>
</div>