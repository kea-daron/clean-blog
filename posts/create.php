<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>

<form method="POST" action="create.php">
    <div class="max-w-lg mx-auto">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="email" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="title" required>
        </div>
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">SubTitle</label>
            <input type="text" name="subtitle" id="email" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="subtitle" required>
        </div>
        <div class="w-full mb-4 border border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 mt-5 rounded-lg ">
            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
            <label for="editor" class="sr-only">Publish post</label>
            <textarea id="editor" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required ></textarea>
        </div>
        </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div>
        <button tyoe="submit" name="submit" class="btn btn-primary mb-4 text-center">create</button>
    </div>
</form>

<?php require "../includes/footer.php"; ?>