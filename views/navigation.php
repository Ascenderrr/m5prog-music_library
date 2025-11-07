<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><?php echo $pageTitle; ?></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </ul>
              <form class="d-flex" role="search" action="/search.php" method="get">
                <input class="form-control me-2" type="search" 
                       placeholder="Search" 
                       aria-label="Search" 
                       name="searchquery"
                       value="<?php echo isset($_GET['searchquery']) ? ($_GET['searchquery']) : ''; ?>">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>