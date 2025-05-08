<?php require "../includes/navbar.php"; ?>
<main class="dark:bg-gray-900">
    <section class="bg-center bg-no-repeat bg-[url('https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/2uQRrnlUBwOoqlNbcQSpYr/a4fbb0dbc1a6b5ba696410ff091039a8/GettyImages-2170485830.jpg?w=1500&h=680&q=60&fit=fill&f=faces&fm=jpg&fl=progressive&auto=format%2Ccompress&dpr=1&w=1000')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">About <span class="text-yellow-500">iBlog</span></h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 ">iblog can allows users to easily write and post blogs, helping them share their ideas and stories with others.</p>
        </div>
    </section>
    <section class="mt-10 my-5 m-6 md:mx-[120px]">
        <?php require "../components/cardaboutus/cardourpurpose.php"; ?>
    </section>
    <section class="mt-10 my-5 m-6 md:mx-[120px]">
        <?php require "../components/cardaboutus/mentor.php"; ?>
    </section>
    <section class="mt-10 my-5 m-6 md:mx-[120px]">
        <?php require "../components/cardaboutus/ourteam.php"; ?>
    </section>
    <section class="mt-10 my-5 m-6 md:mx-[120px]">
        <?php require "../components/cardaboutus/achievement.php"; ?>
    </section>
    <section>
        <?php require "../components/cardaboutus/contact.php"; ?>
    </section>

<?php require "../includes/footer.php" ?>
</main>