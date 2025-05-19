<?php require "../includes/navbar.php"; ?>

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
                <h2 class="text-5xl font-bold text-yellow-500 dark:text-yellow-500">About Us</h2>
                <p class="text-5xl font-bold text-white dark:text-primary-50 ">Codecam website warmly <span>welcomes all developers</span></p>
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
                    <span class="text-yellow-400">WHO</span> <span class="text-[#0e284c]">WE ARE</span>
                </h2>
            </div>
            <div class="relative md:w-3/5 text-[#0e284c] text-xl md:pl-8 mt-[50px] mb-[50px]">
                <div class="hidden md:block absolute left-0 top-0 bottom-0 w-1 bg-yellow-400 rounded"></div>
                <div class="space-y-4">
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
        <?php require "../components/cardaboutus/mentor.php"; ?>
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
<script src="../js/dark.js"></script>
<script src="../js/languages.js"></script>

</main>
</body>
</html>