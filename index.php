<?php require "includes/navbar.php"; ?>
<?php
include 'cart/cart.php';
?>
 <link rel="stylesheet" href="cart/style.css" />
<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    /> -->
    <style>
      .typed-text {
        color: #7e3da0;
      }
    </style>
    <main class="container-fluid p-4 bg-whitesmoke  dark:bg-black dark:text-white">
      <section>
        <div class="col-xxl-9 mx-lg-auto">
          <div>
            <h1
              class="text-center text-primary-emphasis text-5xl"
              style="font-family: 'Franklin Gothic Medium'"
            >
              WELCOME <span class="typed-text"></span>
            </h1>
          </div>
          <p
            class="text-center"
            style="
              font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
                sans-serif;
            "
          >
          A good blog platform provides customization options, SEO tools, and the ability to monetize content.
          </p>
          
        </div>
      </section>
      <section class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-5 m-[150px]">
        <div>
          <h2 class="text-5xl font-bold text-yellow-500 dark:text-yellow-500 mt-[70px]">iBlog</h2>
          <p class="text-5xl font-bold text-primary-50 dark:text-primary-50" >Make Your Blog Better</p>
          <p class="mt-5 lead text-2xl">Dive into a world of fresh ideas, expert tips, and inspiring stories. 
          Our blog is your go-to space for insightful content</p>
          <button class="mt-5 rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-gray-900 dark:text-white" data-translate="Explore">Explore Us</button>
        </div>
        <div>
          <img src="http://localhost/clean-blog/assets/writing.svg" alt="image writing">

        </div>
      </section>
      <section class="app" >
      <?php
      renderCard('<i class="fa-solid fa-user"></i>' , "Welcome", "This is your dashboard", "✨");
      renderCard('<i class="fa-solid fa-users"></i>', "Welcome", "This is your dashboard", "✨");
      renderCard("🔥", "Welcome", "This is your dashboard", "✨");
    ?>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      const options = {
        strings: ["Teacher Meas Sovann", "iBlog", "Group 1", "RUPP Students"],
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