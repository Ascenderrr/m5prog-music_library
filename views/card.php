<div class="card mb-3">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo ($song['title']); ?></h4>
    </div>
    <div class="card-body">
        <p>Artiest: <?php echo ($song['artist_name']); ?></p>
        <p>Genre: <?php echo ($song['genre_name']); ?></p>
        <p>Duur: <?php echo ($song['duration']); ?></p>
        <p>Jaar: <?php echo ($song['release_year']); ?></p>
        <a href="/single/<?php echo ($song['slug']); ?>" class="btn btn-primary">Bekijk</a>
    </div>
</div>

