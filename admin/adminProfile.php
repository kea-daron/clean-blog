<?php require "layouts/navbarAdmin.php"; ?>
<?php require "../config/config.php"; ?>

<?php 
  // admins
  $select_admins = $conn->query("SELECT COUNT(*) AS admins_number FROM users");
  $select_admins->execute();
  $admins = $select_admins->fetch(PDO::FETCH_OBJ);

  // categories
  $select_cats = $conn->query("SELECT COUNT(*) AS categories_number FROM categories");
  $select_cats->execute();
  $categories = $select_cats->fetch(PDO::FETCH_OBJ);

  // posts
  $select_posts = $conn->query("SELECT COUNT(*) AS posts_number FROM posts");
  $select_posts->execute();
  $posts = $select_posts->fetch(PDO::FETCH_OBJ);
?>

<style>
  /* Sidebar styles */
  .sidebar {
    width: 250px;
    background-color: #1e3a8a; /* Tailwind blue-800 */
    color: white;
    padding: 2rem 1rem;
    height: 100vh;
    position: sticky;
    top: 60px; /* Adjust based on navbar height */
  }

  .sidebar h3 {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
    color: #e0f2fe;
  }

  .sidebar a {
    display: block;
    color: #cbd5e1;
    text-decoration: none;
    margin-bottom: 1rem;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .sidebar a:hover {
    color: #ffffff;
  }

  /* Layout wrapper */
  .dashboard-layout {
    display: flex;
  }

  .main-content {
    flex-grow: 1;
    padding: 2rem;
  }

  /* Enhanced card styles */
  .dashboard-card {
    background: linear-gradient(145deg, #e0f0ff, #c2d9ff);
    border-radius: 15px;
    box-shadow:
      6px 6px 12px #a0b9d6,
      -6px -6px 12px #ffffff;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    cursor: default;
  }

  .dashboard-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow:
      10px 10px 20px #8aa3cc,
      -10px -10px 20px #ffffff;
  }

  .dashboard-card .card-body {
    padding: 2rem;
    text-align: center;
  }

  .dashboard-card .card-title {
    font-weight: 800;
    font-size: 1.8rem;
    color: #1e40af; /* Tailwind blue-900 */
    margin-bottom: 0.8rem;
    letter-spacing: 0.03em;
  }

  .dashboard-card .card-text {
    font-size: 1.3rem;
    font-weight: 600;
    color: #334155; /* Tailwind slate-700 */
  }

  /* Responsive grid */
  .dashboard-row {
    margin-top: 2.5rem;
    gap: 2rem;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .dashboard-row > div {
    flex: 1 1 300px;
    max-width: 350px;
  }
</style>

<div class="dashboard-layout">
  <!-- Sidebar -->
  <aside class="w-64 h-screen bg-blue-900 text-white p-6 hidden md:block fixed top-0">
    <nav class="space-y-4 mt-[100px]">
      <a href="../adminProfile.php" class="block hover:text-yellow-500 font-semibold">🏠 Home</a>
      <a href="admins/admins.php" class="block hover:text-yellow-500 font-semibold">👥 Users</a>
      <a href="categories-admins/create-category.php" class="block hover:text-yellow-500 font-semibold">📁 Categories</a>
      <a href="posts-admins/show-posts.php" class="block hover:text-yellow-500 font-semibold">📝 Posts</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="main-content ml-64">
    <div class="row dashboard-row justify-content-center">
      <div>
        <div class="card dashboard-card">
          <div class="card-body">
            <h5 class="card-title">Posts</h5>
            <p class="card-text">Number of posts: <?php echo $posts->posts_number; ?></p>
          </div>
        </div>
      </div>

      <div>
        <div class="card dashboard-card">
          <div class="card-body">
            <h5 class="card-title">Categories</h5>
            <p class="card-text">Number of categories: <?php echo $categories->categories_number; ?></p>
          </div>
        </div>
      </div>

      <div>
        <div class="card dashboard-card">
          <div class="card-body">
            <h5 class="card-title">Admins</h5>
            <p class="card-text">Number of admins: <?php echo $admins->admins_number; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
