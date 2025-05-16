<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>

<?php
$categories = $conn->query("SELECT * FROM categories ");
$categories->execute();
$category = $categories->fetchAll(PDO::FETCH_OBJ);

if (isset($_POST['submit'])) {
    if (
        $_POST['title'] == '' || $_POST['subtitle'] == '' ||
        $_POST['body'] == '' || $_POST['category_id'] == ''
    ) {
        echo '<div class="text-red-600 font-semibold text-center mt-4">⚠️ All fields are required.</div>';
    } else {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $body = $_POST['body'];
        $category_id = $_POST['category_id'];
        $image = $_FILES['image']['name'];
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['username'];

        $dir = './images/' . basename($image);

        $insert = $conn->prepare("INSERT INTO posts (title, subtitle, body, category_id, image, user_id, user_name)
            VALUES (:title, :subtitle, :body, :category_id, :image, :user_id, :user_name )");
        $insert->execute([
            ':title' => $title,
            ':subtitle' => $subtitle,
            ':body' => $body,
            ':category_id' => $category_id,
            ':image' => $image,
            ':user_id' => $user_id,
            ':user_name' => $user_name,
        ]);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $dir)) {
            echo "<script>window.location.href='../profileUser.php'</script>";
        } else {
            echo '<div class="text-red-500 text-center mt-4">Image upload failed. Try again.</div>';
        }
    }
}
?>

<!-- Form UI -->
<section class="relative py-16 px-4 sm:px-6 lg:px-8 min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('https://d2r4787i3zn8dn.cloudfront.net/site_images/images/79fc06f676773547f5ae99ed5042ad3d1cf27081.jpg?1511795330v');">
  
  <!-- Background overlay for better readability -->
  <div class="absolute inset-0 bg-black/30 z-0"></div>

  <!-- Glass-style container -->
  <div class="relative z-10 max-w-4xl mx-auto bg-white/30 backdrop-blur-lg shadow-2xl rounded-2xl p-10 border border-white/40">
    
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-t-3xl"></div>

    <h2 class="text-4xl font-extrabold text-center text-blue-900 dark:text-white mb-10 tracking-tight">
      ✍️ Create a New Blog Post
    </h2>

    <form method="POST" action="create.php" enctype="multipart/form-data" class="space-y-8">

      <!-- Title -->
      <div>
        <label for="title" class="block mb-2 text-sm font-medium text-blue-900 dark:text-gray-300">Post Title</label>
        <input type="text" name="title" id="title" required
          class="w-full p-4 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-100 dark:bg-gray-800 dark:text-white dark:border-gray-600 transition-all duration-300"
          placeholder="Amazing Title Here">
      </div>

      <!-- Subtitle -->
      <div>
        <label for="subtitle" class="block mb-2 text-sm font-medium text-blue-900 dark:text-gray-300">Subtitle</label>
        <input type="text" name="subtitle" id="subtitle" required
          class="w-full p-4 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 dark:bg-gray-800 dark:text-white dark:border-gray-600 transition-all duration-300"
          placeholder="Something catchy...">
      </div>

      <!-- Body -->
      <div>
        <label for="body" class="block mb-2 text-sm font-medium text-blue-900 dark:text-gray-300">Content</label>
        <textarea name="body" id="body" rows="6" required
          class="w-full p-4 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-500 dark:bg-gray-800 dark:text-white dark:border-gray-600 transition-all duration-300"
          placeholder="Share your thoughts..."></textarea>
      </div>

      <!-- Category -->
      <div>
        <label for="category_id" class="block mb-2 text-sm font-medium text-blue-900 dark:text-gray-300">Category</label>
        <select name="category_id" id="category_id" required
          class="w-full p-4 text-base border border-gray-300 rounded-xl bg-white dark:bg-gray-800 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all duration-300">
          <option disabled selected>Select category</option>
          <?php foreach ($category as $cat): ?>
            <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- Image Upload -->
      <div>
        <label for="user_avatar" class="block mb-2 text-sm font-medium text-blue-900 dark:text-gray-300">Upload Featured Image</label>
        <input type="file" name="image" id="user_avatar" accept="image/*"
          class="w-full p-3 text-base border border-gray-300 rounded-xl bg-white dark:bg-gray-800 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">
        <div class="mt-2">
          <img id="imagePreview" class="hidden mt-4 w-48 h-auto rounded-lg border-2 border-gray-300 dark:border-gray-600" />
        </div>
      </div>

      <!-- Submit -->
      <div class="text-center pt-4">
        <button type="submit" name="submit"
          class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl shadow-lg hover:from-purple-600 hover:to-pink-600 transition-all duration-300 text-lg">
          🚀 Publish Post
        </button>
      </div>
    </form>
  </div>
</section>

<!-- JavaScript for Image Preview -->
<script>
  const fileInput = document.getElementById('user_avatar');
  const preview = document.getElementById('imagePreview');

  fileInput.addEventListener('change', (event) => {
    const [file] = event.target.files;
    if (file) {
      preview.src = URL.createObjectURL(file);
      preview.classList.remove('hidden');
    }
  });
</script>

<?php require "../includes/footer.php"; ?>
