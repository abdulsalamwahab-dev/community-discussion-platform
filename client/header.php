<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/discuss">
      <img class="logo" src="./public/logo_1.png" class="d-inline-block align-top" alt="Discuss Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav gap_15">
        <li class="nav-item">
          <a class="nav-link <?php echo empty($_GET) ? 'active' : ''; ?>" aria-current="page" href="/discuss">Home</a>
        </li>
        <li class="nav-item nav-items">
          <a class="nav-link <?php echo isset($_GET['latest']) ? 'active' : ''; ?>" href="?latest=true">Latest Questions</a>
        </li>
        <?php if (isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item nav-items">
            <a class="nav-link <?php echo isset($_GET['askQuestion']) ? 'active' : ''; ?>" href="?askQuestion=true">Ask a Question</a>
          </li>
          <li class="nav-item nav-items">
            <a class="nav-link <?php echo isset($_GET['u-id']) ? 'active' : ''; ?>" href="?u-id=<?php echo $_SESSION['user']['user_id']; ?>">My Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-danger text-white" style="border-radius: 6px;" href="./server/requests.php?logout=true">Logout
              <span class="color_carbon font_size_14 text-white">(<?php echo ucfirst($_SESSION['user']['username']); ?>)</span>
            </a>
          </li>
        <?php } ?>
        <?php if (!isset($_SESSION['user']['username'])) { ?>
          <li>
            <a class="nav-link <?php echo isset($_GET['signup']) ? 'active' : ''; ?>" href="?signup=true">Sign Up</a>
          </li>
          <li>
            <a class="nav-link <?php echo isset($_GET['login']) ? 'active' : ''; ?>" href="?login=true">Login</a>
          </li>
        <?php } ?>
      </ul>

    </div>
    <form class="d-flex" role="search" method="GET">
      <input class="form-control me-2" name="search" type="search" placeholder="Search" />
      <button class="btn btn-light" type="submit">Search</button>
    </form>
  </div>
</nav>