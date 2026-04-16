<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Discussion Board Platform</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #4facfe, #343434);
      color: #333;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 6px 60px;
      backdrop-filter: blur(10px);
    }

    .navbar h2 {
      color: #fff;
    }

    .nav-links a {
      margin-left: 20px;
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: 0.3s;
    }

    .nav-links a:hover {
      opacity: 0.7;
    }

    /* Hero Section */
    .hero {
      height: 50vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      color: white;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 15px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 15px;
      opacity: 0.9;
    }

    .btn {
      padding: 12px 25px;
      border: none;
      border-radius: 25px;
      background: white;
      color: #4facfe;
      font-weight: 600;
      margin: 10px;
      cursor: pointer;
      transition: 0.3s;
      text-decoration: none;
    }

    .btn:hover {
      background: #333;
      color: white;
    }

    /* Features */
    .features {
      background: #fff;
      padding: 50px 20px;
      text-align: center;
    }

    .features h2 {
      margin-bottom: 40px;
    }


    .search-input {
      height: 45px;
      padding: 25px 15px;
      font-size: 1rem;
      border: 1px solid #ccc;
    }

    .cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      background: #f5f7fa;
      padding: 30px;
      border-radius: 15px;
      width: 250px;
      transition: 0.3s;
    }


    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Footer */
    footer {
      background: linear-gradient(135deg, #4facfe, #343434);
      padding: 5px 20px;
      margin-top: auto;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="nav-links">
      <a class="navbar-brand" href="/discuss">
        <img class="logo" src="./public/logo_1.png" class="d-inline-block align-top" alt="Discuss Logo">
      </a>
      <a href="./discuss.php">Home</a>
      <a href="./latest.php">Latest Questions</a>
      <a href="./ask.php">Ask a Question</a>
      <a href="./ask.php">Sign Up</a>
      <a href="./login.php">Login</a>
    </div>
    <div>
      <form class="d-flex" role="search" method="GET" style="align-items: center;">
        <input class="form-control search-input me-1" name="search" type="search" placeholder="Search" />
        <button class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <div>
      <h1>Discuss and Share Knowledge with the Community.</h1>
      <p>We encourage you to share your insights on relevant questions and contribute your valuable queries as well.</p>

      <a href="./.php" class="btn">All Questions</a>
    </div>
  </section>

  <!-- Features -->
  <section class="features">
    <h2>Start Exploring</h2>

    <div class="cards">
      <div class="card">
        <h3>💬 Latest Questions</h3>
        <p>Submit your questions and receive valuable answers from the community.</p>
      </div>

      <div class="card">
        <h3>⚡ Add Your Answer</h3>
        <p>Contribute helpful and insightful responses to assist others.</p>
      </div>

      <div class="card">
        <h3>📚 Explore Categories</h3>
        <p>Explore various topics to enhance your knowledge and skills.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-3">
    <p class="text-center text-white mb-0 small">
      &copy; <?php echo date("Y"); ?> Abdul Salam | <a href="https://www.linkedin.com/in/abdul-salam-wahab-981112231/" target="_blank" class="text-white">LinkedIn</a>
    </p>
  </footer>

</body>

</html>