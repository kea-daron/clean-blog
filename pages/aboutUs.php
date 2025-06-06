

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar iBlog</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
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
  <style type="text/tailwindcss">
    @layer components {
      .nav-link {
        @apply text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white;
      }
      .nav-link.active {
        @apply text-primary-600 dark:text-primary-400;
      }
    }

    html[lang="km"] * {
      font-family: "Kantumruy Pro", sans-serif;
    }
  </style>
</head>

<body class="bg-white dark:bg-blue-900 transition-colors duration-200 min-w-80">
  <!-- Optional Backdrop for mobile menu -->
  <div id="menu-backdrop" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

  <header class="sticky top-0 z-50 w-full border-b bg-blue-900 dark:bg-blue-900 dark:border-gray-700 transition-colors duration-200">
    <div class="container mx-auto flex h-16 items-center justify-between px-4 md:px-6">
      <!-- Logo -->
      <a href="../index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://deploy-logo-iblog.vercel.app/2222.png" class="h-[50px] w-[150px]" alt="iBlog Logo" />
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden items-center gap-6 md:flex">
        <a href="../index.php" class="nav-link text-white hover:text-yellow-500" data-translate="home">Home</a>
        <a href="./pages/aboutUs.php" class="nav-link text-white hover:text-yellow-500" data-translate="aboutus">About Us</a>
      </nav>

      <!-- Desktop Buttons -->
      <div class="hidden items-center gap-4 md:flex">
        <div class="flex items-center space-x-4">
          <!-- Language Switch -->
          <div class="flex items-center space-x-2">
            <button class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none" data-lang="en">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="English" class="w-full h-full object-cover" />
            </button>
            <button class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none" data-lang="km">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/1200px-Flag_of_Cambodia.svg.png" alt="Khmer" class="w-full h-full object-cover border-2 border-yellow-500" />
            </button>
          </div>

          <!-- Theme Toggle -->
          <button id="theme-toggle" class="rounded-md border border-primary-100 dark:bg-back dark:border-primary-100 p-2 dark:text-primary-100 text-primary-50">
            <svg id="sun-icon" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <svg id="moon-icon" class="h-5 w-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
          </button>

          <!-- Auth Buttons -->
          <a href="../auth/register.php">
            <button class="rounded-md font-semibold text-white px-4 py-1.5 bg-blue-900 border-2 border-primary-100 hover:bg-primary-100 hover:text-primary-50 dark:bg-blue-900 dark:hover:bg-yellow-500" data-translate="register">Register</button>
          </a>
          <a href="../auth/login.php">
            <button class="rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-white border-2 border-primary-100 hover:bg-blue-900 dark:bg-yellow-500 dark:hover:bg-blue-900" data-translate="log-in">Log in</button>
          </a>
        </div>
      </div>

      <!-- Mobile Controls -->
      <div class="flex items-center gap-4 md:hidden">
        <!-- Language Switch -->
        <div class="flex items-center space-x-2">
          <button class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none" data-lang="en">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="English" class="w-full h-full object-cover" />
          </button>
          <button class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none" data-lang="km">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/1200px-Flag_of_Cambodia.svg.png" alt="Khmer" class="w-full h-full object-cover" />
          </button>
        </div>

        <!-- Theme Toggle -->
        <button id="mobile-theme-toggle" class="rounded-md border border-primary-100 dark:bg-gray-900 p-2 text-primary-50 dark:text-primary-100">
          <svg id="mobile-sun-icon" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          <svg id="mobile-moon-icon" class="h-5 w-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>
        </button>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="rounded-md border border-primary-100 p-2 text-primary-50">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <line x1="4" x2="20" y1="6" y2="6" />
            <line x1="4" x2="20" y1="12" y2="12" />
            <line x1="4" x2="20" y1="18" y2="18" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 w-[80%] max-w-sm bg-white dark:bg-gray-900 shadow-lg z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
      <div class="border-b border-gray-200 dark:border-gray-700">
        <div class="mt-2 flex justify-between p-4">
          <span class="text-lg font-semibold dark:text-white">Menu</span>
          <button id="close-menu-button" class="p-2 dark:text-gray-300">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>

      <div class="flex flex-col gap-4 p-6">
        <a href="../index.php" class="text-gray-800 dark:text-white font-medium text-lg" data-translate="home">Home</a>
        <a href="./pages/aboutUs.php" class="text-gray-800 dark:text-white font-medium text-lg" data-translate="aboutus">About Us</a>
        <a href="./auth/register.php">
          <button class="mt-4 font-semibold rounded-md bg-blue-900 text-white px-4 py-2 border border-primary-100 hover:bg-primary-100 dark:bg-black dark:hover:bg-yellow-500" data-translate="register">Register</button>
        </a>
        <a href="./auth/login.php">
          <button class="mt-2 font-semibold rounded-md bg-primary-100 text-white px-4 py-2 border border-primary-100 hover:bg-blue-900 dark:bg-yellow-500 dark:hover:bg-blue-900" data-translate="log-in">Log in</button>
        </a>
      </div>
    </div>
  </header>

  <!-- Scripts -->
  <script src="../js/languages.js"></script>
  <script src="../js/dark.js"></script>

  <!-- Mobile Menu Toggle Script -->
  <script>
    const menu = document.getElementById('mobile-menu');
    const backdrop = document.getElementById('menu-backdrop');
    const openBtn = document.getElementById('mobile-menu-button');
    const closeBtn = document.getElementById('close-menu-button');

    openBtn.addEventListener('click', () => {
      menu.classList.remove('translate-x-full');
      menu.classList.add('translate-x-0');
      backdrop.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
      menu.classList.remove('translate-x-0');
      menu.classList.add('translate-x-full');
      backdrop.classList.add('hidden');
    });

    backdrop.addEventListener('click', () => {
      menu.classList.add('translate-x-full');
      menu.classList.remove('translate-x-0');
      backdrop.classList.add('hidden');
    });
  </script>
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: "Noto Sans Khmer", sans-serif;
    }
  </style>
    <title>Document</title>
</head>
<body>
    <main class="dark:bg-gray-900">
    <section class="bg-blue-900">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-col-3 mx-6 md:mx-[120px] min-w-80 ">
            <div class="mt-[100px]">
                <h2 class="text-5xl font-bold text-yellow-500 dark:text-yellow-500" data-translate="i">About Us</h2>
                <p class="text-5xl font-bold text-white dark:text-primary-50" data-translate="j">iBlog website warmly <span>welcomes all developers</span></p>
            </div>
            <div>
            <img src="../assets/about.svg" class="h-[500px] w-[500px]" alt="image writing">
             
            </div>
        </div>
    </section>
    <section class= "p-8 my-[100px]">
        <section class="relative max-w-6xl mx-auto bg-white rounded-3xl p-14 flex flex-col md:flex-row gap-12 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-100 via-yellow-400 to-yellow-100"></div>
            <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-yellow-100 via-yellow-400 to-yellow-100"></div>
            <div class="md:w-2/5 mt-[50px] mb-[50px]">
                <h2 class="text-5xl font-bold leading-tight mb-5">
                    <span class="text-yellow-400" data-translate="k">WHO</span> <span class="text-[#0e284c]" data-translate="l">WE ARE</span>
                </h2>
            </div>
            <div class="relative md:w-3/5 text-[#0e284c] text-xl md:pl-8 mt-[50px] mb-[50px]">
                <div class="hidden md:block absolute left-0 top-0 bottom-0 w-1 bg-yellow-400 rounded"></div>
                <div class="space-y-4" data-translate="m">
                    <p>
                    We are students from RUPP <br/>
                    Institute who have collaborated to turn our Project
                    </p>
                    <p>
                    into a website
                    for recent tech startups
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section >
        <?php require "../components/cardaboutus/cardourpurpose.php"; ?>
    </section>
    <section class="mt-10 my-5 m-6 md:mx-[120px]">
        <?php require "../components/cardaboutus/leader.php"; ?>
    </section>
    <section class=" my-5 m-6 md:mx-[120px]">
        <?php require "../components/cardaboutus/ourteam.php"; ?>
    </section>
    <section class="mt-10 my-5 m-6 md:mx-[120px]">
        <?php require "../components/cardaboutus/achievement.php"; ?>
    </section>
    <section>
        <?php require "../components/cardaboutus/contact.php"; ?>
    </section>

<?php require "../includes/footer.php" ?>
<script src="js/dark.js"></script>
<script src="../js/languages.js"></script>

</main>
</body>
</html>