<div class="col-md-4 mb-4">
    <div class="card h-100 bg-secondary text-light">
        <!-- Cover Image -->
        <img class="card-img-top" 
             src="<?php echo htmlspecialchars($song['image'] ?? ''); ?>" 
             alt="<?php echo htmlspecialchars($song['title'] ?? ''); ?>"
             style="height: 250px; object-fit: cover;">
        
        <div class="card-body d-flex flex-column">
            <!-- Song Title -->
            <h5 class="card-title"><?php echo htmlspecialchars($song['title'] ?? ''); ?></h5>
            
            <!-- Artist -->
            <p class="text-muted mb-2">
                <small><?php echo htmlspecialchars($song['artist_name'] ?? 'Unknown Artist'); ?></small>
            </p>
            
            <!-- Details -->
            <ul class="list-unstyled small mb-3">
                <li><strong>Genre:</strong> <?php echo htmlspecialchars($song['genre_name'] ?? 'Unknown'); ?></li>
                <li><strong>Year:</strong> <?php echo htmlspecialchars($song['release_year'] ?? 'N/A'); ?></li>
                <li><strong>Duration:</strong> <?php echo htmlspecialchars($song['duration'] ?? 'N/A'); ?></li>
            </ul>
            
            <!-- Button at bottom -->
            <a href="/single/<?php echo htmlspecialchars($song['slug'] ?? ''); ?>" 
               class="btn btn-primary mt-auto">View Details</a>
        </div>
    </div>
</div>

