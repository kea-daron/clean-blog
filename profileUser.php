<?php require "includes/navbarUser.php"; ?>
<?php require "config/config.php"; ?>

<?php

      $posts = $conn->query("SELECT * FROM posts ");
      $posts->execute();
      $rows = $posts->fetchAll(PDO::FETCH_OBJ);

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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach($rows as $row): ?>
            <div class="post-preview bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105 hover:bg-gray-50 dark:hover:bg-gray-700 p-5">
              <a href="http://localhost/clean-blog/posts/userpost.php?post_id=<?php echo $row->id; ?>">
                <h2 class="post-title text-2xl font-bold text-primary-50"><?php echo $row->title; ?></h2>
                <h3 class="post-subtitle text-black"><?php echo $row->subtitle; ?></h3>
              </a>
              <p class="post-meta mt-3 text-black">
                Posted by
                <a href="#!"><?php echo $row->user_name; ?></a>
                <?php echo date('M', strtotime($row->created_at)) . ',' . date('d', strtotime($row->created_at)) . ' ' . date('Y', strtotime($row->created_at)); ?>
              </p>
            </div>
            <hr class="my-4" />
          <?php endforeach; ?>
        </div>
      </section>

<?php require "includes/footer.php"; ?>
