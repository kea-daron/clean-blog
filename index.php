<?php require "includes/navbar.php"; ?>

<?php
include 'components/cart.php';
?>
<?php require "config/config.php"; ?>
<?php

$posts = $conn->query("SELECT * FROM posts ");
$posts->execute();
$rows = $posts->fetchAll(PDO::FETCH_OBJ);


$categories = $conn->query("SELECT * FROM categories ");
$categories->execute();
$category = $categories->fetchAll(PDO::FETCH_OBJ);
?>

<head>
  <!-- Primary Meta Tags -->
<title>iBlog</title>
<meta name="title" content="iBlog">
<meta name="description" content="iBlog — Make Your Blog Better">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://iblog-bkgj.onrender.com/">
<meta property="og:title" content="iBlog">
<meta property="og:description" content="iBlog — Make Your Blog Better">
<meta property="og:image" content="https://media.istockphoto.com/id/922745190/photo/blogging-blog-concepts-ideas-with-worktable.jpg?s=612x612&w=0&k=20&c=xR2vOmtg-N6Lo6_I269SoM5PXEVRxlgvKxXUBMeMC_A=">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://iblog-bkgj.onrender.com/">
<meta property="twitter:title" content="iBlog">
<meta property="twitter:description" content="iBlog — Make Your Blog Better">
<meta property="twitter:image" content="https://media.istockphoto.com/id/922745190/photo/blogging-blog-concepts-ideas-with-worktable.jpg?s=612x612&w=0&k=20&c=xR2vOmtg-N6Lo6_I269SoM5PXEVRxlgvKxXUBMeMC_A=">

</head>


<link rel="stylesheet" href="./css/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
      href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
      rel="stylesheet"
    />
<link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script>
  tailwind.config = {
    darkMode: 'class',
    theme: {
      extend: {
        colors: {
          primary: {
            50: '#004aad',
            100: '#eab308',
            200: '#bfdbfe',
            300: '#93c5fd',
            400: '#60a5fa',
            500: '#3b82f6',
            600: '#2563eb',
            700: '#1d4ed8',
            800: '#1e40af',
            900: '#1e3a8a',
            950: '#172554',
          }
        },
        fontFamily: {
          'kantumruy': ['"Kantumruy Pro"', 'sans-serif'],
        }
      }
    }
  }
</script>
<style>
  .typed-text {
    color: #7e3da0;
  }

  html[lang="km"] * {
    font-family: "Kantumruy Pro", sans-serif;
  }
</style>

<main class="container-fluid bg-whitesmoke dark:bg-black dark:text-white min-w-80">
  <section>
    <div class="col-xxl-9 mx-lg-auto">
      <div>
        <h1
          class="text-center text-blue-900 text-5xl"
          style="font-family: 'Franklin Gothic Medium'">
          WELCOME <span class="typed-text"></span>
        </h1>
      </div>
      <p
        class="text-center mt-2"
        data-aos="fade-down"
        style="
              font-family: 
                sans-serif;
            "
        data-translate="a">
        A good blog platform provides customization options, SEO tools, and the ability to monetize content.
      </p>

      
    </div>
  </section>
  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-col-3 gap-[100px] mx-6 md:mx-[120px] min-w-80 mt-[70px]">
    <div data-aos="fade-right">
      <h2 class="text-5xl font-bold text-yellow-500 dark:text-yellow-500">iBlog</h2>
      <p class="text-5xl font-bold text-primary-50 dark:text-primary-50" data-translate="b">Make Your Blog Better</p>
      <p class="mt-5 lead text-2xl" style="
              font-family: 
                sans-serif;
            " data-translate="d">Dive into a world of fresh ideas, expert tips, and inspiring stories.
        Our blog is your go-to space for insightful content</p>
      <button class="mt-5 rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-gray-900 dark:text-white" data-translate="Explore">Explore Us</button>
    </div>
    <div data-aos="fade-left">
      <img src="./assets/writing.svg" class="h-[500px] w-[500px]" alt="image writing">
    </div>
  </section>

  <section class="p-5 mt-5 bg-blue-900 my-6">
    <div class="mx-6 md:mx-[120px] my-6">
      <div class="m-7">
        <h2 class="text-4xl text-white font-bold" data-aos="fade-down" data-translate="e">For iBlog Services</h2>
        <p class="mt-5 text-white text-2xl" data-aos="fade-left" data-translate="f">Explore job opportunities.</p>
      </div>
      <div class="app my-4" data-aos="fade-right">
        <?php
        renderCard('<i class="fa-solid fa-feather"></i>', "Ceate Blog", "Built using modern web technologies, it supports dynamic content management and can serve as a personal journal, tech blog, lifestyle site, or portfolio.", "✨");
        renderCard('<i class="fa-solid fa-users"></i>', "Ceate Categories", "Categories help structure content, making it easier for readers to navigate and discover related posts.", "✨");
        renderCard('<i class="fa-solid fa-repeat"></i>', "Connection", "iBlog is a platform that connects writers and readers.", "✨");
        ?>
      </div>
    </div>
  </section>

<section class="mx-6 md:mx-[120px] my-6 bg-whitesmoke dark:bg-black dark:text-white p-5">
  <h2 class="mb-[80px] mt-[60px] dark:text-white text-4xl font-bold text-primary-50 text-center" data-aos="fade-down" data-translate="g" >All Posts</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-right">
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

  <section class="px-6 py-8 bg-gradient-to-br from-blue-900 to-gray-100 shadow-lg transition-transform hover:scale-[1.02]" >
    <h3 class="text-4xl font-bold text-white mb-[50px] text-center mt-5" data-aos="fade-down" data-translate="h">Categories</h3>
    <?php foreach ($category as $cat) : ?>
      <div class="max-w-3xl mx-auto text-center mb-[50px]" data-aos="fade-left">
        <a href="./categories/category.php?cat_id=<?php echo $cat->id; ?>">
          <div class="bg-blue-900 text-white text-xl font-semibold rounded-lg py-4 mb-6">
            <?php echo $cat->name; ?>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
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
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<?php require "includes/footer.php" ?>