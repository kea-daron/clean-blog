<?php require "../../config/config.php"; ?>
<?php require "../layouts/navbarAdmin.php"; ?>

<?php

// Delete post if ID is passed via GET
if (isset($_GET['id'])) {
    $deleteId = $_GET['id'];

   if ($deleteId) {
        $deletePost = $conn->prepare("DELETE FROM posts WHERE id = :id");
        $deletePost->execute([':id' => $deleteId]);
        echo "<script>alert('Post deleted successfully!'); window.location.href='show-posts.php';</script>";
        exit;
    } else {
        echo "<script>alert('Invalid post ID');</script>";
    }
    exit;
}

// Fetch posts with category and author info
$posts = $conn->prepare("
  SELECT posts.*, categories.name AS category_name, users.username 
  FROM posts
  JOIN categories ON posts.category_id = categories.id
  JOIN users ON posts.user_id = users.id
  ORDER BY posts.id DESC
");
$posts->execute();
$allPosts = $posts->fetchAll(PDO::FETCH_OBJ);
?>


<div class="flex">
  <!-- Sidebar -->
  <aside class="w-64 h-screen bg-blue-900 text-white p-6 hidden md:block fixed top-0">
    <nav class="space-y-4 mt-[100px]">
      <a href="../adminProfile.php" class="block hover:text-yellow-500 font-semibold">🏠 Home</a>
      <a href="../admins/admins.php" class="block hover:text-yellow-500 font-semibold">👥 Users</a>
      <a href="../categories-admins/create-category.php" class="block hover:text-yellow-500 font-semibold">📁 Categories</a>
      <a href="show-posts.php" class="block hover:text-yellow-500 font-semibold">📝 Posts</a>
    </nav>
  </aside>

  <!-- Content -->
  <div class="ml-64 w-full p-6">
    <h1 class="text-2xl font-bold text-blue-700 mb-6">📑 All Posts</h1>
    
    <div class="overflow-x-auto bg-white shadow-md rounded-md">
      <table class="min-w-full divide-y divide-gray-200 text-sm text-start">
        <thead class="bg-blue-600 text-white">
          <tr>
            <th class="px-6 py-3">#ID</th>
            <th class="px-6 py-3">📌 Title</th>
            <th class="px-6 py-3">📁 Category</th>
            <th class="px-6 py-3">✍️ Author</th>
            <th class="px-6 py-3">🕓 Created At</th>
            <th class="px-6 py-3">⚙️ Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          <?php foreach($allPosts as $post): ?>
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-blue-700 font-semibold"><?= $post->id ?></td>
            <td class="px-6 py-4"><?= htmlspecialchars($post->title) ?></td>
            <td class="px-6 py-4"><?= htmlspecialchars($post->category_name) ?></td>
            <td class="px-6 py-4"><?= htmlspecialchars($post->username) ?></td>
            <td class="px-6 py-4"><?= htmlspecialchars($post->created_at) ?></td>
            <td class="px-6 py-4 space-x-2">
              
            <a href="show-posts.php?id=<?= $post->id ?>" onclick="return confirm('Are you sure you want to delete this post?');" class="text-red-600 hover:underline">Delete</a>

          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--  -->

