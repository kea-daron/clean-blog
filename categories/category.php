<?php require "../includes/navbar.php"; ?>
<?php require "../config/config.php"; ?>

<?php

if (isset($_GET['cat_id'])) {
    $id = $_GET['cat_id'];
    $posts = $conn->query("SELECT posts.image AS image, posts.id AS id, posts.title AS title, posts.subtitle AS subtitle, 
        posts.user_name AS user_name, posts.created_at AS created_at, 
        posts.category_id AS category_id FROM categories 
        JOIN posts ON categories.id = posts.category_id 
        WHERE posts.category_id = '$id'");
    $posts->execute();
    $rows = $posts->fetchAll(PDO::FETCH_OBJ);
} else {
    
}


?>

  <section class="mx-6 md:mx-[120px] my-6 bg-whitesmoke dark:bg-black dark:text-white p-5">
  <h2 class="mb-[80px] mt-[60px] dark:text-white text-4xl font-bold text-primary-50 text-center">All Posts</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach ($rows as $row): ?>
      <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 hover:shadow-2xl">
        <a href="../pages/post.php?post_id=<?php echo $row->id; ?>" class="block">
          <?php if (!empty($row->image)): ?>
            <img src="../pages/images/<?php echo htmlspecialchars($row->image); ?>" alt="Post image" class="w-full h-48 object-cover">
          <?php else: ?>
            <div class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-400">
              No Image
            </div>
          <?php endif; ?>
          <div class="p-6">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
              <?php echo htmlspecialchars($row->title); ?>
            </h2>
            <h3 class="text-lg text-gray-600 dark:text-gray-300 mb-4">
              <?php echo htmlspecialchars($row->subtitle); ?>
            </h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">
              Posted by
              <span class="text-primary-500 font-semibold">
                <?php echo htmlspecialchars($row->user_name); ?>
              </span>
              on
              <?php echo date('M d, Y', strtotime($row->created_at)); ?>
            </p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php require "../includes/footer.php"; ?>