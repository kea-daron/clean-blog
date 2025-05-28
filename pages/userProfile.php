<?php 
session_start(); 
require "../config/config.php";
require "../includes/navbarUser.php";  

if (!isset($_SESSION['user_id'])) {
    header("Location: /login.php");
    exit();
}

$userId = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindParam(':id', $userId);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_OBJ);

$userId = $_SESSION['user_id'];
$postStmt = $conn->prepare("
    SELECT posts.*, categories.name AS category_name 
    FROM posts 
    LEFT JOIN categories ON posts.category_id = categories.id 
    WHERE posts.user_id = :user_id 
    ORDER BY posts.created_at DESC
");
$postStmt->bindParam(':user_id', $userId);
$postStmt->execute();
$posts = $postStmt->fetchAll(PDO::FETCH_OBJ);


?>
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

<body class="bg-whitesmoke dark:bg-black min-h-screen">
    <form method="POST" action="userProfile.php?prof_id=<?php echo $user->id; ?>">
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                    <div class="flex items-center">
                        <img class="h-24 w-24 rounded-full mr-4" src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Profile picture">
                        <div>
                            <h3 class="text-2xl leading-6 font-bold text-blue-900">
                                <input type="text" name="username" value="<?php echo htmlspecialchars($user->username); ?>" class="font-bold text-blue-900">
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                <input type="email" name="email" value="<?php echo htmlspecialchars($user->email); ?>" required>
                                <br>FullStack Developer
                            </p>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                <i data-lucide="map-pin" class="inline h-4 w-4 mr-1"></i> Cambodia, Phnom Penh
                            </p>
                        </div>
                    </div>

                    <a href="../pages/editProfileUser.php" class="inline-flex items-center">
                        <i data-lucide="edit-2" class="h-4 w-4 mr-2 text-red-500"></i>
                        Edit Profile
                    </a>
                </div>

                <div class="border-t border-gray-200">
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Bio</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            My name is <?php echo htmlspecialchars($user->username); ?> I was born in Dambang Village, Kirivong District, Takeo Province. I am currently a 4th-year student at the Royal University of Phnom Penh (RUPP) and working as a Fullstack Developer. I have a strong passion for writing code and constantly enjoy exploring new technologies.
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Email address</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="email" name="email" value="<?php echo htmlspecialchars($user->email); ?>" required>
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Phone number</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            (+855) 313-473-327
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Website</dt>
                        <dd class="mt-1 text-sm text-indigo-600 hover:text-indigo-500 sm:mt-0 sm:col-span-2">
                            <a href="https://github.com/kea-daron" class="underline">https://github.com/kea-daron</a>
                        </dd>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 mb-6">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">Projects</dt>
                        <dd class="mt-1 text-3xl font-semibold text-blue-900">48</dd>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">Followers</dt>
                        <dd class="mt-1 text-3xl font-semibold text-blue-900">12.5k</dd>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">Following</dt>
                        <dd class="mt-1 text-3xl font-semibold text-blue-900">243</dd>
                    </div>
                </div>
            </div>

                        <!-- Recent Projects Section -->
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-6">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-blue-900">My Posts</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Posts created by you.</p>
                </div>
                <div class="border-t border-gray-200 divide-y divide-gray-200">
                    <?php if (count($posts) > 0): ?>
                        <?php foreach ($posts as $post): ?>
                            <div class="px-4 py-5 sm:px-6 hover:bg-gray-50">
                                <h4 class="text-xl font-bold text-blue-800"><?php echo htmlspecialchars($post->title); ?></h4>
                                <p class="text-sm italic text-gray-600 mb-1"><?php echo htmlspecialchars($post->subtitle); ?></p>
                                <p class="text-sm text-gray-500 mb-2">
                                    Category: <?php echo htmlspecialchars($post->category_name); ?> |
                                    Date: <?php echo date("F j, Y", strtotime($post->created_at)); ?>
                                </p>
                                <?php if ($post->image): ?>
                                    <img src="uploads/<?php echo htmlspecialchars($post->image); ?>" alt="Post Image" class="w-full max-w-md rounded mb-3">
                                <?php endif; ?>
                                <p class="text-gray-800"><?php echo nl2br(htmlspecialchars(substr($post->body, 0, 200))) . '...'; ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="px-4 py-5 sm:px-6 text-gray-500 text-sm">You haven’t posted anything yet.</div>
                    <?php endif; ?>
                </div>
            </div>



        </main>
    </form>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
