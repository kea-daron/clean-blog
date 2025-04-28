<?php require "includes/navbar.php"; ?>
<?php
include 'components/cart.php';
?>
<?php require "config/config.php"; ?>
<?php

      $posts = $conn->query("SELECT * FROM posts ");
      $posts->execute();
      $rows = $posts->fetchAll(PDO::FETCH_OBJ);

?>

 <link rel="stylesheet" href="components/style.css" />

    <style>
      .typed-text {
        color: #7e3da0;
      }
    </style>

    <main class="container-fluid bg-whitesmoke dark:bg-black dark:text-white min-w-80">
      <section>
        <div class="col-xxl-9 mx-lg-auto">
          <div>
            <h1
              class="text-center text-blue-900 text-5xl"
              style="font-family: 'Franklin Gothic Medium'"
            >
              WELCOME <span class="typed-text"></span>
            </h1>
          </div>
          <p
            class="text-center mt-2"
            style="
              font-family: 
                sans-serif;
            "
          >
          A good blog platform provides customization options, SEO tools, and the ability to monetize content.
          </p>
          
        </div>
      </section>
      <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-col-3 gap-4 mx-6 md:mx-[120px] min-w-80 mt-[70px]">
        <div class="mt-[100px]">
          <h2 class="text-5xl font-bold text-yellow-500 dark:text-yellow-500 mt-[70px]">iBlog</h2>
          <p class="text-5xl font-bold text-primary-50 dark:text-primary-50"  >Make Your Blog Better</p>
          <p class="mt-5 lead text-2xl" style="
              font-family: 
                sans-serif;
            ">Dive into a world of fresh ideas, expert tips, and inspiring stories. 
          Our blog is your go-to space for insightful content</p>
          <button class="mt-5 rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-gray-900 dark:text-white" data-translate="Explore">Explore Us</button>
        </div>
        <div>
          <img src="http://localhost/clean-blog/assets/writing.svg" alt="image writing">
        </div>
      </section>

      <section class="p-5 mt-5 bg-blue-900 my-6">
       <div class="mx-6 md:mx-[120px] my-6">
       <div class="m-7">
          <h2 class="text-4xl text-white font-bold">For iBlog Services</h2>
          <p class="mt-5 text-white text-2xl">Explore job opportunities.</p>
        </div>
        <div class="app my-4" >
          <?php
          renderCard('<i class="fa-solid fa-feather"></i>' , "Ceate Blog", "Built using modern web technologies, it supports dynamic content management and can serve as a personal journal, tech blog, lifestyle site, or portfolio.", "✨");
          renderCard('<i class="fa-solid fa-users"></i>', "Ceate Categories", "Categories help structure content, making it easier for readers to navigate and discover related posts.", "✨");
          renderCard("🔥", "Welcome", "This is your dashboard", "✨");
          ?>
        </div>
       </div>
      </section>

      <section class="mx-6 md:mx-[120px] my-6 bg-whitesmoke dark:bg-black dark:text-white p-5">
        <h2 class="mb-[150px] mt-[60px] dark:text-white text-4xl font-bold text-primary-50 text-center">All Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach($rows as $row): ?>
            <div class="post-preview bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105 hover:bg-gray-50 dark:hover:bg-gray-700 p-5">
              <a href="http://localhost/clean-blog/posts/post.php?post_id=<?php echo $row->id; ?>">
                <h2 class="post-title text-2xl font-bold text-primary-50"><?php echo $row->title; ?></h2>
                <h3 class="post-subtitle"><?php echo $row->subtitle; ?></h3>
              </a>
              <p class="post-meta mt-3">
                Posted by
                <a href="#!"><?php echo $row->user_name; ?></a>
                <?php echo date('M', strtotime($row->created_at)) . ',' . date('d', strtotime($row->created_at)) . ' ' . date('Y', strtotime($row->created_at)); ?>
              </p>
            </div>
            <hr class="my-4" />
          <?php endforeach; ?>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      const options = {
        strings: ["T-Meas Sovann", "iBlog", "Group 1", "RUPP Students"],
        typeSpeed: 200,
        backSpeed: 200,
        loop: true,
        showCursor: false,
      };

      const typed = new Typed(".typed-text", options);
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<?php require "includes/footer.php" ?>