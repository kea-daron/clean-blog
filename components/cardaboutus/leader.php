<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Section</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/lucide-icons/dist/umd/lucide.css" rel="stylesheet">
  <script src="https://unpkg.com/lucide-icons"></script>
</head>
<body>
  <section class="w-full bg-gray-50 py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-4">
      <div class="flex flex-col items-center justify-center">
        <!-- Profile Image with Gradient Border -->
        <div class="relative h-40 w-40 md:h-48 md:w-48 lg:h-56 lg:w-56">
          <div class="absolute inset-0 rounded-full bg-gradient-to-r from-yellow-400 to-teal-400"></div>
          <div class="absolute inset-1 overflow-hidden rounded-full bg-white">
            <img 
              src="../assets/ron.jpg" 
              alt="Profile" 
              class="h-full w-full object-cover"
            >
          </div>
        </div>

        <!-- Gradient Button -->
        <div class="mt-6">
          <button class="rounded-full bg-gradient-to-r from-yellow-400 to-teal-400 px-8 py-2 text-white shadow-md transition-transform hover:scale-105">
            Leader
          </button>
        </div>

        <!-- Name -->
        <h1 class="mt-6 text-center text-3xl font-bold md:text-4xl">
          <span class="text-yellow-500">Kea</span> <span class="text-yellow-600">Daron</span>
          <!-- <span class="text-teal-500">ron</span> -->
        </h1>

        <!-- Role -->
        <p class="mt-2 text-center text-lg text-gray-600">Coding</p>

        <!-- Underline -->
        <div class="mt-2 h-1 w-16 bg-gradient-to-r from-yellow-400 to-teal-400"></div>

        <!-- Social Icons -->
        <div class="mt-6 flex space-x-4 ">
          <a 
            href="https://t.me/kea_daron" 
            class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-200 bg-white text-blue-900 transition-colors hover:bg-gray-100"
            aria-label="Telegram"
            
          >
            <i class="fa-brands fa-telegram"></i>
          </a>
          <a 
            href="https://www.facebook.com/share/18oXHR6M5b/?mibextid=wwXIfr" 
            class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-200 bg-white text-blue-900 transition-colors hover:bg-gray-100"
            aria-label="Facebook"
          >
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a 
            href="https://github.com/kea-daron" 
            class="flex h-12 w-12 items-center justify-center rounded-full border border-gray-200 bg-white text-blue-900 transition-colors hover:bg-gray-100"
            aria-label="Github"
          >
            <i class="fa-brands fa-github"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Initialize Lucide icons
    lucide.createIcons();
  </script>
</body>
</html>