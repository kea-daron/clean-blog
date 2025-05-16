<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"); -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>footer iBlog</title>
</head>
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

<body>


    <footer class="bg-blue-900 dark:bg-blue-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://github.com/kea-daron" class="flex items-center">
                        <img src="./assets/2222.png" class="w-[300px]" alt="iBlog Logo" />
                    </a>

                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 md:grid-cols-4">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white hover:text-primary-50 dark:hover:text-primary-50">Explore</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="../index.php" class="hover:underline hover:text-primary-50 text-white">Home</a>
                            </li>
                            <li>
                                <a href="../pages/aboutUs.php" class="hover:underline hover:text-primary-50 text-white">About us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white hover:text-primary-50 dark:hover:text-primary-50">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/kea-daron" class="hover:underline hover:text-primary-50 text-white">Github</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/share/18oXHR6M5b/?mibextid=wwXIfr" class="hover:underline hover:text-primary-50 text-white">Facebook</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="mb-4 text-sm font-semibold text-white uppercase dark:text-white hover:text-primary-50 dark:hover:text-primary-50">Sponsors by</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="https://www.rupp.edu.kh/">
                                    <img src="https://www.rupp.edu.kh/logo/rupp_logo.png" class="h-20" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2025 <a href="https://github.com/kea-daron" class="hover:underline text-white">iBlog™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0 gap-3 text-xl">

                    <a href="https://github.com/kea-daron" class="text-white hover:text-primary-50 dark:hover:text-primary-50">
                        <i class="fa-brands fa-github"></i>
                        <span class="sr-only">Github page</span>
                    </a>
                    <a href="https://www.facebook.com/share/18oXHR6M5b/?mibextid=wwXIfr" class="text-white hover:text-primary-50 dark:hover:text-primary-50">
                        <i class="fa-brands fa-facebook"></i>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="https://t.me/kea_daron" class="text-white hover:text-primary-50 dark:hover:text-primary-50 mb-5">
                        <i class="fa-brands fa-telegram"></i>
                        <span class="sr-only">Telegram page</span>
                    </a>

                </div>
            </div>
        </div>
    </footer>

</body>

</html>