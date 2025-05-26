<?php 

// Then require config and navbar
require "../../config/config.php"; 
require "../layouts/navbarAdmin.php"; 

$admins = $conn->prepare("SELECT * FROM users");
$admins->execute();
$rows = $admins->fetchAll(PDO::FETCH_OBJ);

$delete = $conn->prepare("DELETE FROM users WHERE id = :id");
if (isset($_GET['id'])) {
    $delete->execute([':id' => $_GET['id']]);
    echo "<script>alert('Admin deleted successfully!'); window.location.href='admins.php';</script>";
}
?>

<div class="flex" >
    <div>
  <aside class="w-64 h-screen bg-blue-900 text-white p-6 hidden md:block fixed top-0">
    <nav class="space-y-4 mt-[100px]">
      <a href="../adminProfile.php" class="block hover:text-yellow-500 font-semibold">🏠 Home</a>
      <a href="../admins/admins.php" class="block hover:text-yellow-500 font-semibold">👥 Users</a>
      <a href="../categories-admins/create-category.php" class="block hover:text-yellow-500 font-semibold">📁 Categories</a>
      <a href="show-posts.php" class="block hover:text-yellow-500 font-semibold">📝 Posts</a>
    </nav>
  </aside>
    </div>
    <div class="ml-64 flex-1 px-6 py-6">
       <div class="p-6">
  <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b">
      <h2 class="text-2xl font-bold text-blue-700">👑 Admins List</h2>
    </div>
    
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200 text-sm text-center">
        <thead class="bg-blue-600 text-white">
          <tr>
            <th class="px-6 py-3 text-left font-semibold tracking-wider">#ID</th>
            <th class="px-6 py-3 text-left font-semibold">👤 Username</th>
            <th class="px-6 py-3 text-left font-semibold">📧 Email</th>
            <th class="px-6 py-3 font-semibold">⚙️ Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 bg-white">
          <?php foreach($rows as $row): ?>
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium text-blue-700"><?php echo htmlspecialchars($row->id); ?></td>
            <td class="px-6 py-4"><?php echo htmlspecialchars($row->username); ?></td>
            <td class="px-6 py-4"><?php echo htmlspecialchars($row->email); ?></td>
            <td class="px-6 py-4 space-x-2">
              <a href="admins.php?id=<?php echo $row->id; ?>"
                onclick="return confirm('Delete this admin?');"
                class="inline-block bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-xs font-medium transition">
                Delete
                </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


    </div>
</div>

