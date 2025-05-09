<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>

<?php

if (isset($_GET['prof_id'])) {
    $id = $_GET['prof_id'];
    $select = $conn->query("SELECT * FROM users WHERE id = '$id'");
    $select->execute();
    $rows = $select->fetch(PDO::FETCH_OBJ);

    if ($_SESSION['user_id'] !== $rows->id) {
        echo "<script>window.location.href=../pageUser.php</script>";
    }

    if (isset($_POST['submit'])) {
        if ($_POST['email'] == '' or $_POST['username'] == '') {
            echo 'one or more inputs are empty';
        } else {


            $email = $_POST['email'];
            $username = $_POST['username'];
            
        }
    }
}

?>

<form method="POST" action="userProfile.php?prof_id=<?php echo $rows->id; ?>" >
            
            


<body class="bg-whitesmoke dark:bg-black min-h-screen">

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Profile header -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                <div class="flex items-center">
                    <img class="h-24 w-24 rounded-full mr-4" src="../assets/ron.jpg" alt="Profile picture">
                    <div>
                        <h3 class="text-2xl leading-6 font-bold text-blue-900">
                        <input type="text" name="username" value="<?php echo $rows->username; ?>" id="email" placeholder="username" required>
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        <input type="email" name="email" value="<?php echo $rows->email; ?>" id="email" placeholder="email" required>
                        <br>• FullStack Developer
                        </p>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            <i data-lucide="map-pin" class="inline h-4 w-4 mr-1"></i> Combodia, Phnom Penh
                        </p>
                    </div>
                </div>
                <!-- <a href="./pages/editProfileUser.php"><button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-red-500 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <i data-lucide="edit-2" class="h-4 w-4 mr-2 text-red-500"></i>
                    Edit Profile
                </button></a> -->
                <a href="./pages/editProfileUser.php">
                    <i data-lucide="edit-2" class="h-4 w-4 mr-2 text-red-500"></i>
                    Edit Profile
                </a>
            </div>
            <div class="border-t border-gray-200">
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Bio
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        My name is Kea Daran. I was born in Dambang Village, Kirivong District, Takeo Province. I am currently a 4th-year student at the Royal University of Phnom Penh (RUPP) and working as a Fullstack Developer. I have a strong passion for writing code and constantly enjoy exploring new technologies.
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="email" name="email" value="<?php echo $rows->email; ?>" id="email" placeholder="email" required>
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Phone number
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        (+855) 313-473-327
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Website
                    </dt>
                    <dd class="mt-1 text-sm text-indigo-600 hover:text-indigo-500 sm:mt-0 sm:col-span-2">
                        <a href="https://github.com/kea-daron" class="underline">https://github.com/kea-daron</a>
                    </dd>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 mb-6">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Projects
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-blue-900">
                        48
                    </dd>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Followers
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-blue-900">
                        12.5k
                    </dd>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Following
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-blue-900">
                        243
                    </dd>
                </div>
            </div>
        </div>

        <!-- Recent Projects -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-blue-900">
                    Recent Projects
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Latest work and contributions.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <ul role="list" class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6 hover:bg-gray-50">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1zwhySGCEBxRRFYIcQgvOLOpRGqrT3d7Qng&s" alt="">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-indigo-600">
                                        The Future of Remote Work
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Updated 2 days ago
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <!-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    UI Design
                                </span> -->
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Poster
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6 hover:bg-gray-50">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2XEWvyObeMa70CJxSbM-Uku9WoNMGF0wxprkupywonkBr7UylJTLiDczs_V2sg3L6idQ&usqp=CAU" alt="">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-indigo-600">
                                        The Rise of Remote Work
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Updated 1 week ago
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <!-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                    Dashboard
                                </span> -->
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Poster
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6 hover:bg-gray-50">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKguOF_MKgv44H_8KJRkLatwY8i_J_oSz428VOEjAdg3kig2wbmQaIucMZEDI5OGJU76U&usqp=CAU" alt="">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-indigo-600">
                                        Artificial Intelligence in Everyday Life
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        Updated 3 weeks ago
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <!-- <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    UI Design
                                </span> -->
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Poster
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Activity Feed -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-blue-900">
                    Activity Feed
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Recent actions and updates.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <ul role="list" class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex space-x-3">
                            <img class="h-10 w-10 rounded-full" src="../assets/sokny.jpg" alt="">
                            <div class="flex-1 space-y-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm font-medium text-blue-900">Sarah Johnson</h3>
                                    <p class="text-sm text-gray-500">1h ago</p>
                                </div>
                                <p class="text-sm text-gray-500">Commented on your project <span class="font-medium text-blue-900">"The Future of Remote Work"</span></p>
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <i data-lucide="star" class="h-10 w-10 text-yellow-400 p-2"></i>
                            </div>
                            <div class="flex-1 space-y-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm font-medium text-blue-900">Achievement Unlocked</h3>
                                    <p class="text-sm text-gray-500">3h ago</p>
                                </div>
                                <p class="text-sm text-gray-500">You've reached <span class="font-medium text-yellow-500">50 followers</span> milestone!</p>
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex space-x-3">
                            <img class="h-10 w-10 rounded-full" src="../assets/ling.jpg" alt="">
                            <div class="flex-1 space-y-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm font-medium text-blue-900">Michael Roberts</h3>
                                    <p class="text-sm text-gray-500">1d ago</p>
                                </div>
                                <p class="text-sm text-gray-500">Started following you</p>
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex space-x-3">
                            <img class="h-10 w-10 rounded-full" src="../assets/heng.jpg" alt="">
                            <div class="flex-1 space-y-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm font-medium text-blue-900">Sarah Johnson</h3>
                                    <p class="text-sm text-gray-500">1h ago</p>
                                </div>
                                <p class="text-sm text-gray-500">Commented on your project <span class="font-medium text-blue-900">"Artificial Intelligence in Everyday Life"</span></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <?php require "../includes/footer.php"; ?>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</form>
</html>