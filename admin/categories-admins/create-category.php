<?php require "../layouts/navbarAdmin.php"; ?>
<?php require "../../config/config.php"; ?>
<?php
// Fetch all categories
$categories = $conn->prepare("SELECT * FROM categories ORDER BY id ASC");
$categories->execute();
$rows = $categories->fetchAll(PDO::FETCH_OBJ);

// Create or update category
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    if ($name == '') {
        echo "<div class='alert alert-danger text-center'>Please enter a category name.</div>";
    } else {
        if (isset($_POST['edit_id'])) {
            // Update existing category
            $editId = $_POST['edit_id'];
            $update = $conn->prepare("UPDATE categories SET name = :name WHERE id = :id");
            $update->execute([':name' => $name, ':id' => $editId]);
        } else {
            // Insert new category
            $insert = $conn->prepare("INSERT INTO categories (name) VALUES (:name)");
            $insert->execute([':name' => $name]);
        }
        // header("Location: create-category.php");
        exit;
    }
}

// Delete category
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $delete = $conn->prepare("DELETE FROM categories WHERE id = :id");
    $delete->execute([':id' => $deleteId]);
   // header("Location: create-category.php");
    exit;
}

// Edit category (load data into form)
$editMode = false;
$editName = '';
$editId = '';
if (isset($_GET['edit'])) {
    $editId = $_GET['edit'];
    $editQuery = $conn->prepare("SELECT * FROM categories WHERE id = :id");
    $editQuery->execute([':id' => $editId]);
    $editCategory = $editQuery->fetch(PDO::FETCH_OBJ);
    if ($editCategory) {
        $editMode = true;
        $editName = $editCategory->name;
    }
}
?>
<div class="flex">
  <!-- Sidebar -->
  <aside class="w-64 h-screen bg-blue-900 text-white p-6 hidden md:block fixed top-0 ">
    <nav class="space-y-4 mt-[100px]">
      <a href="../adminProfile.php" class="block hover:text-yellow-500 font-semibold">🏠 Home</a>
      <a href="../admins/admins.php" class="block hover:text-yellow-500 font-semibold">👥 Users</a>
      <a href="create-category.php" class="block hover:text-yellow-500 font-semibold">📁 Categories</a>
      <a href="../posts-admins/show-posts.php" class="block hover:text-yellow-500 font-semibold">📝 Posts</a>
    </nav>
  </aside>
  <!-- Main Content -->
  <main class="flex-1 ml-0 md:ml-64 bg-gray-50 min-h-screen p-6">
      <!-- Categories Table -->
      <div class="bg-white p-6 rounded-lg shadow-md overflow-x-auto">
        <h2 class="text-2xl font-semibold mb-4 text-blue-700">📋 Categories List</h2>
        <table class="w-full text-sm text-left border">
          <thead class="bg-blue-600 text-white">
            <tr>
              <th class="px-4 py-3">#ID</th>
              <th class="px-4 py-3">📂 Name</th>
              <th class="px-4 py-3">🕓 Created At</th>
              <th class="px-4 py-3">⚙️ Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <?php foreach($rows as $row): ?>
            <tr class="hover:bg-gray-50 transition">
              <td class="px-4 py-3 font-medium text-blue-700"><?= htmlspecialchars($row->id) ?></td>
              <td class="px-4 py-3"><?= htmlspecialchars($row->name) ?></td>
              <td class="px-4 py-3"><?= htmlspecialchars($row->created_at ?? '-') ?></td>
              <td class="px-4 py-3 space-x-3">
                <a href="create-category.php?edit=<?= $row->id ?>" class="text-yellow-500 hover:underline">Edit</a>
                <a href="create-category.php?delete=<?= $row->id ?>" onclick="return confirm('Are you sure you want to delete this category?');" class="text-red-600 hover:underline">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="grid md:grid-cols-2 gap-6">
      <!-- Category Form -->
      <div class="bg-white p-6 rounded-lg shadow-md w-full mt-6 ">
        <h2 class="text-2xl font-semibold mb-4 text-blue-700">
          <?= $editMode ? '✏️ Edit Category' : '➕ Create Category' ?>
        </h2>
        <form method="POST" action="create-category.php">
          <?php if ($editMode): ?>
            <input type="hidden" name="edit_id" value="<?= htmlspecialchars($editId) ?>">
          <?php endif; ?>
          <div class="mb-4">
            <input type="text" name="name" value="<?= htmlspecialchars($editName) ?>"
              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter category name" />
          </div>
          <button type="submit" name="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition">
            <?= $editMode ? 'Update' : 'Create' ?>
          </button>
        </form>
      </div>
  </main>
</div>