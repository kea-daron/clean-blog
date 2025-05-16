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

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-col-3 gap-[100px] mx-6 md:mx-[120px] min-w-80 mt-[70px]">
  <div>
      <img src="./assets/userpage.svg" class="h-[600px] w-[600px]" alt="image writing">
    </div>
    <div>
      <h2 class="text-5xl font-bold text-yellow-500 dark:text-yellow-500 mt-[100px]">iBlog</h2>
      <p class="text-5xl font-bold text-primary-50 dark:text-primary-50" data-translate="b">Clean Design. Clear Message</p>
      <p class="mt-5 lead text-2xl" style="
              font-family: 
                sans-serif;
            ">Designed for clarity, written with heart—this is a space where every idea has room to breathe.</p>
      <a href="./pages/create.php"><button class="mt-5 rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-gray-900 dark:text-white" data-translate="Explore">Create Now</button></a>
    </div>
    
  </section>

  <section class="mx-6 md:mx-[120px] my-6 bg-whitesmoke dark:bg-black dark:text-white p-5">
  <h2 class="mb-[80px] mt-[60px] dark:text-white text-4xl font-bold text-primary-50 text-center">All Posts</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach ($rows as $row): ?>
      <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden transition-transform hover:scale-105 hover:shadow-2xl">
        <a href="./pages/post.php?post_id=<?php echo $row->id; ?>" class="block">
          <?php if (!empty($row->image)): ?>
            <img src="./pages/images/<?php echo htmlspecialchars($row->image); ?>" alt="Post image" class="w-full h-48 object-cover">
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

<section class="px-6 py-8 bg-gradient-to-br from-blue-900 to-gray-100 shadow-lg transition-transform hover:scale-[1.02]">
    <h3 class="text-4xl font-bold text-white mb-[50px] text-center ">Categories</h3>
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


<?php require "includes/footer.php"; ?>