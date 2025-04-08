
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NavbarUer iBlog</title>
  <!-- Google Fonts - Kantumruy Pro for Khmer -->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
</head >
<body class="bg-white dark:bg-gray-900 transition-colors duration-200 px-4">
  <header class="sticky top-0 z-50 w-full border-b bg-white dark:bg-gray-900 dark:border-gray-700 transition-colors duration-200">
    <div class="container mx-auto flex h-16 items-center justify-between px-4 md:px-6">
      <!-- Logo -->
      <a href="http://localhost/clean-blog/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="http://localhost/clean-blog/assets/logo.png" class="h-[120px] w-[150px] mt-6" alt="iBlog Logo" />
    </a>

      <!-- Desktop Navigation -->
      <nav class="hidden items-center gap-6 md:flex">
        <a href="http://localhost/clean-blog/profileUser.php" class="text-primary-50 dark:text-primary-400 text-lg nav-link active font-medium" data-translate="home">Home</a>
        <a href="http://localhost/clean-blog/posts/create.php" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white text-lg nav-link" data-translate="create">Create</a>
        <a href="http://localhost/clean-blog/posts/aboutUs.php" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white text-lg nav-link" data-translate="aboutus">About Us</a>
      </nav>

      <!-- <div class="flex flex-col gap-2 p-6">
        <a href="/" class="text-primary-50 dark:text-primary-400 font-medium text-lg" data-translate="home">Home</a>
        <a href="/create" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white text-lg" data-translate="create">Create</a>
        <a href="/aboutus" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white text-lg" data-translate="aboutus">About Us</a>
        <button class="mt-4 font-semibold rounded-md bg-white px-4 py-2 text-primary-50 border-2 border-primary-100 hover:bg-primary-100 hover:text-primary-50 dark:bg-black dark:text-white dark:hover:bg-primary-50" data-translate="register">Register</button>
        <button class="mt-4 font-semibold rounded-md bg-primary-100 px-4 py-2 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-black dark:text-white" data-translate="log-in">Log in</button>
        
      </div>  User Profile and Language Selector -->

      <div class="hidden items-center gap-4 md:flex">
      <div class="flex items-center space-x-4">
          <!-- Language Flags -->
          <div class="flex items-center space-x-2">
            <!-- English Flag -->
            <button
              class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none"
              data-lang="en"
            >
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png"
                alt="English"
                class="w-full h-full object-cover"
              />
            </button>

            <!-- Khmer Flag -->
            <button
              class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none"
              data-lang="km"
            >
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/1200px-Flag_of_Cambodia.svg.png"
                alt="Khmer"
                class="w-full h-full object-cover"
              />
            </button>
          </div>
        
        <!-- Dark Mode Toggle -->
        <button id="theme-toggle" class="rounded-md border border-primary-100 dark:bg-back dark:border-primary-100 p-2 dark:text-primary-100 text-primary-50">
          <!-- Sun icon -->
          <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          <!-- Moon icon -->
          <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>
        </button>
        <a href="http://localhost/clean-blog/auth/profile.php"><button class="rounded-md font-semibold text-primary-50   px-4 py-1.5 bg-white px-4  text-primary-50 border-2 border-primary-100 hover:bg-primary-100 hover:text-primary-50 dark:bg-gray-900 dark:text-white dark:hover:bg-primary-50" data-translate="profile">Profile</button></a>
        <a href="http://localhost/clean-blog/auth/logout.php"><button class="rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-gray-900 dark:text-white" data-translate="log-out">Log out</button></a>

        </li>
      </div>
        
      </div>
       

      <!-- Mobile Navigation -->
      <div class="flex items-center gap-4 md:hidden">
        
        <!-- Language Selector (Mobile) -->
        <!-- <div class="relative" id="mobile-language-dropdown">
          <button id="mobile-language-dropdown-btn" class="flex items-center gap-1 rounded-md border border-gray-300 dark:border-gray-600 px-2 py-1.5 text-sm dark:text-gray-300">
            <span class="text-base" id="mobile-current-flag"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
              <path d="m6 9 6 6 6-6"/>
            </svg>
          </button>
          <div id="mobile-language-menu" class="absolute right-0 mt-1 w-36 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 shadow-lg hidden">
            <div class="py-1">
              <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-300" data-lang="en" data-flag="">
                <span class="mr-2 text-base"></span> English
              </a>
              <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-300" data-lang="km" data-flag="">
                <span class="mr-2 text-base"></span> ខ្មែរ
              </a>
            </div>
          </div>
        </div> -->

        <div class="flex items-center space-x-2">
            <!-- English Flag -->
            <button
              class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none"
              data-lang="en"
            >
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png"
                alt="English"
                class="w-full h-full object-cover"
              />
            </button>

            <!-- Khmer Flag -->
            <button
              class="lang-flag w-10 h-6 rounded overflow-hidden transition transform hover:scale-105 focus:outline-none"
              data-lang="km"
            >
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/1200px-Flag_of_Cambodia.svg.png"
                alt="Khmer"
                class="w-full h-full object-cover"
              />
            </button>
          </div>
        <!-- Dark Mode Toggle (Mobile) -->
        <button id="mobile-theme-toggle" class="rounded-md border border-primary-100 dark:border-primary-100 dark:bg-gray-900  p-2 text-primary-50 dark:text-primary-100">
          <!-- Sun icon -->
          <svg id="mobile-sun-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          <!-- Moon icon -->
          <svg id="mobile-moon-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>
        </button>
        
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="rounded-md border border-primary-100 dark:border-primary-100 p-2 dark:text-primary-50 text-primary-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
            <line x1="4" x2="20" y1="12" y2="12"/>
            <line x1="4" x2="20" y1="6" y2="6"/>
            <line x1="4" x2="20" y1="18" y2="18"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 w-[80%] max-w-sm bg-white dark:bg-gray-900 shadow-lg z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
    <div class=" border-b border-gray-200 dark-border-gray-700">
    <div class="mt-2 flex justify-between p-4">
        <span class="text-lg font-semibold dark:text-white ">Menu</span>
        <button id="close-menu-button" class="p-2 dark:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
            <path d="M18 6 6 18"/>
            <path d="m6 6 12 12"/>
          </svg>
        </button>
        </div>  
      </div>
      <!-- <div class="flex flex-col gap-2 p-6">
        <a href="/" class="text-primary-50 dark:text-primary-400 font-medium text-lg" data-translate="home">Home</a>
        <a href="/create" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white text-lg" data-translate="create">Create</a>
        <a href="/aboutus" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white text-lg" data-translate="aboutus">About Us</a>
        <button class="mt-4 font-semibold rounded-md bg-white px-4 py-2 text-primary-50 border-2 border-primary-100 hover:bg-primary-100 hover:text-primary-50 dark:bg-black dark:text-white dark:hover:bg-primary-50" data-translate="register">Register</button>
        <button class="mt-4 font-semibold rounded-md bg-primary-100 px-4 py-2 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-black dark:text-white" data-translate="log-in">Log in</button>
        
      </div> -->
    </div>
  </header>
<script src="http://localhost/clean-blog/js/languages.js"></script>
<script src="http://localhost/clean-blog/js/dark.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
