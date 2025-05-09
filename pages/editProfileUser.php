<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>




<?php

    if(isset($_GET['prof_id'])){
        $id = $_GET['prof_id'];
        $select = $conn->query("SELECT * FROM users WHERE id = '$id'");
        $select->execute();
        $rows = $select->fetch(PDO::FETCH_OBJ);

        if($_SESSION['user_id'] !== $rows->id){
            echo "<script>window.location.href=http://localhost/clean-blog/pageUser.php</script>";
        }

        if(isset($_POST['submit'])){
            if($_POST['email'] == '' OR $_POST['username'] == '') {
            echo 'one or more inputs are empty';
        }else{

            

            $email = $_POST['email'];
            $username = $_POST['username'];
            
           

            $update = $conn->prepare("UPDATE users SET email = :email, username = :username
            WHERE id = '$id'");
            $update->execute([
                ':email' => $email,
                ':username' => $username,
            ]);

            header('Location: http://localhost/clean-blog/profileUser.php?prof_id='.$_SESSION['user_id'].'');
            
        }
        
    }
    }

?>

<form method="POST" action="userProfile.php?prof_id=<?php echo $rows->id; ?>" >
    <div class="max-w-lg mx-auto ">
        <div class="mb-7">
            <label for="title" class="block text-sm font-medium text-gray-700 text-primary-50">Title</label>
            <input type="email" name="email" value="<?php echo $rows->email; ?>" id="email" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="email" required>
        </div>
        <div class="mb-7">
            <label for="title" class="block text-sm font-medium text-gray-700 text-primary-50">SubTitle</label>
            <input type="text" name="username" value="<?php echo $rows->username; ?>" id="email" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="username" required>
        </div>
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div>
        <button type="submit" name="submit" class="mt-4 font-semibold rounded-md bg-primary-100 px-4 py-2 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-black dark:text-white" data-translate="update">Update</button>
    </div>
</form>





<body class="bg-gray-100 min-h-screen">
    

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Page header -->
        <div class="md:flex md:items-center md:justify-between mb-6">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-blue-900 sm:text-3xl sm:truncate">
                    Edit Profile
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="http://localhost/clean-blog/pages/userProfile.php" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-blue-900 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <i data-lucide="arrow-left" class="h-4 w-4 mr-2 text-blue-900"></i>
                    Back to Profile
                </a>
            </div>
        </div>

        <!-- Edit Profile Form -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <form action="# " method="POST">
                <div class="px-4 py-5 sm:p-6">
                    <!-- Profile Photo -->
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-blue-900 mb-2">
                            Profile Photo
                        </label>
                        <div class="flex items-center">
                            <div class="mr-4">
                                <img class="h-24 w-24 rounded-full" src="../assets/ron.jpg" alt="Profile picture">
                            </div>
                            <div>
                                <div class="flex items-center">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <i data-lucide="upload" class="h-4 w-4 mr-2"></i>
                                        Change Photo
                                    </button>
                                    <button type="button" class="ml-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-red-500 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <i data-lucide="trash-2" class="h-4 w-4 mr-2 text-red-500"></i>
                                        Remove
                                    </button>
                                </div>
                                <p class="mt-1 text-xs text-gray-500">
                                    JPG, GIF or PNG. 1MB max.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Basic Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium leading-6 text-blue-900 mb-4">Basic Information</h3>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-blue-900">
                                    First name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="first-name" id="first-name" value="Daron" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-blue-900">
                                    Last name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="last-name" id="last-name" value="Kea" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="username" class="block text-sm font-medium text-blue-900">
                                    Username
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                        @
                                    </span>
                                    <input type="text" name="username" id="username" value="daron3327" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="job-title" class="block text-sm font-medium text-blue-900">
                                    Job Title
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="job-title" id="job-title" value="Product Designer" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="location" class="block text-sm font-medium text-blue-900    ">
                                    Location
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="location" id="location" value="Combodia, Phnom Penh" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="bio" class="block text-sm font-medium text-blue-900">
                                    Bio
                                </label>
                                <div class="mt-1">
                                    <textarea id="bio" name="bio" rows="4" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">My name is Kea Daran. I was born in Dambang Village, Kirivong District, Takeo Province. I am currently a 4th-year student at the Royal University of Phnom Penh (RUPP) and working as a Fullstack Developer. I have a strong passion for writing code and constantly enjoy exploring new technologies.</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your profile. URLs are hyperlinked.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium leading-6 text-blue-900 mb-4">Contact Information</h3>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email address
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" value="daron.kea@gmail.com" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700">
                                    Phone number
                                </label>
                                <div class="mt-1">
                                    <input id="phone" name="phone" type="tel" value="(+855) 313-473327" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="website" class="block text-sm font-medium text-gray-700">
                                    Website
                                </label>
                                <div class="mt-1">
                                    <input id="website" name="website" type="url" value="https://github.com/kea-daron" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-blue-900 mb-4">Social Media</h3>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="twitter" class="block text-sm font-medium text-gray-700">
                                    <i data-lucide="twitter" class="h-4 w-4 inline-block mr-1"></i> Twitter
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                    https://twitter.com/kea-daron
                                    </span>
                                    <input type="text" name="twitter" id="twitter" value="daronkea" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="linkedin" class="block text-sm font-medium text-gray-700">
                                    <i data-lucide="linkedin" class="h-4 w-4 inline-block mr-1"></i> LinkedIn
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                    https://linkedin.com/in/kea-daron
                                    </span>
                                    <input type="text" name="linkedin" id="linkedin" value="daronkea" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="github" class="block text-sm font-medium text-gray-700">
                                    <i data-lucide="github" class="h-4 w-4 inline-block mr-1"></i> GitHub
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                    https://github.com/kea-daron
                                    </span>
                                    <input type="text" name="github" id="github" value="daronkea" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 p-2 border">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="dribbble" class="block text-sm font-medium text-gray-700">
                                    <i data-lucide="dribbble" class="h-4 w-4 inline-block mr-1"></i> Dribbble
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                    https://dribbble.com/kea-daron
                                    </span>
                                    <input type="text" name="dribbble" id="dribbble" value="daronkea" class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 p-2 border">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="button" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-3">
                        Cancel
                    </button>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </main>

    <?php require "../includes/footer.php"; ?>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>