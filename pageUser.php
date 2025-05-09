<?php require "includes/navbarUser.php"; ?>
<?php require "config/config.php"; ?>

<?php

$posts = $conn->query("SELECT * FROM posts ");
$posts->execute();
$rows = $posts->fetchAll(PDO::FETCH_OBJ);

$categories = $conn->query("SELECT * FROM categories ");
$categories->execute();
$category = $categories->fetchAll(PDO::FETCH_OBJ);

?>

<div>
  <div class="h-screen bg-cover bg-center" style="background-image: url('https://images.stockcake.com/public/a/4/3/a434883c-1244-43fc-8964-0a61c69a4a6d_large/organized-desk-space-stockcake.jpg');">
    <div class="h-full flex items-center justify-center bg-black bg-opacity-50">
      <h1 class="text-white text-6xl font-bold" data-translate="Welcome to Clean Blog">Welcome to Clean Blog</h1>
    </div>
  </div>
</div>

<section class="mx-6 md:mx-[120px] my-6 bg-whitesmoke dark:bg-black dark:text-white p-5">
  <h2 class="mb-[150px] mt-[60px] dark:text-white text-4xl font-bold text-primary-50 text-center">All Posts</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach ($rows as $row): ?>
      <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 hover:shadow-2xl">
        <a href="./pages/userpost.php?post_id=<?php echo $row->id; ?>" class="block p-6">
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
        </a>
      </div>
    <?php endforeach; ?>
  </div>

  <section class="my-10 px-6 py-8 bg-gradient-to-br from-blue-900 to-gray-100 shadow-lg transition-transform hover:scale-[1.02]">
    <h3 class="text-4xl font-bold text-blue-900 mb-[10px] text-center">Categories</h3>
    <?php foreach ($category as $cat) : ?>
      <div class="max-w-3xl mx-auto text-center mb-[50px]">
        <a href="./categories/category.php?cat_id=<?php echo $cat->id; ?>">
          <div class="bg-blue-900 text-white text-xl font-semibold rounded-lg py-4 mb-6">
            <?php echo $cat->name; ?>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </section>
</section>



<?php require "includes/footer.php"; ?>