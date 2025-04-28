
<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>

<?php

    if(isset($_POST['submit'])){
        if($_POST['title'] == '' OR $_POST['subtitle'] == '' OR 
        $_POST['body'] == '') {
            echo 'one or more inputs are empty';
        }else{
            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $body = $_POST['body'];
            $image = $_FILES['image']['name'];
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['username'];
            
            $dir = './images/' . basename($image);

            $insert = $conn->prepare("INSERT INTO posts (title, subtitle, body, image, user_id, user_name)
            VALUES (:title, :subtitle, :body, :image, :user_id, :user_name )");
            $insert->execute([
                ':title' => $title,
                ':subtitle' => $subtitle,
                ':body' => $body,
                ':image' => $image,
                ':user_id' => $user_id,
                ':user_name' => $user_name,
            ]);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $dir)){
                echo "<script>window.location.href=http://localhost/clean-blog/profileUser.php</script>";
                // header('Location: http://localhost/clean-blog/profileUser.php');
            }else {
                echo "File upload failed.";
            }
                
        }
    }

?>
<form method="POST" action="create.php" enctype="multipart/form-data" class="mt-10">
    <div class="max-w-lg mx-auto ">
        <div class="mb-7">  
            <label for="title" class="block text-sm font-medium text-gray-700 text-primary-50">Title</label>
            <input type="text" name="title" id="email" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="title" required>
        </div>
        <div class="mb-7">
            <label for="title" class="block text-sm font-medium text-gray-700 text-primary-50">SubTitle</label>
            <input type="text" name="subtitle" id="email" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="subtitle" required>
        </div>
        <div class="form-outline mb-7">
            <label for="title" class="block text-sm font-medium text-gray-700 text-primary-50 mb-2">Description</label>
            <div class="w-full mb-4 border border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 rounded-lg">
                <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                <label for="editor" class="sr-only">Publish post</label>
                <textarea type="text" name="body" id="email" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required ></textarea>
            </div>
        </div>
        </div>
            <label class="block mb-2 text-sm font-medium text-primary-50 dark:text-white text-primary-50" for="user_avatar">Upload file</label>
            <input name="image" class="block w-full text-sm text-primary-50 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help"  id="user_avatar" type="file" >
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div>
        <button type="submit" name="submit" class="mt-4 font-semibold rounded-md bg-primary-100 px-4 py-2 text-primary-50 border-2 border-primary-100 hover:bg-white dark:bg-primary-50 dark:hover:bg-black dark:text-white" data-translate="create">Create</button>
    </div>
</form>

<?php require "../includes/footer.php"; ?>
