<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>

<?php
if (isset($_GET['upd_id'])) {
    $id = $_GET['upd_id'];
    $select = $conn->query("SELECT * FROM posts WHERE id = '$id'");
    $select->execute();
    $rows = $select->fetch(PDO::FETCH_OBJ);

    if (isset($_POST['submit'])) {
        if ($_POST['title'] == '' || $_POST['subtitle'] == '' || $_POST['body'] == '') {
            echo 'One or more inputs are empty';
        } else {
            unlink("./images/" . $rows->image);

            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $body = $_POST['body'];
            $image = $_FILES['image']['name'];
            $dir = './images/' . basename($image);

            $update = $conn->prepare("UPDATE posts SET title = :title, subtitle = :subtitle, body = :body, image = :image WHERE id = '$id'");
            $update->execute([
                ':title' => $title,
                ':subtitle' => $subtitle,
                ':body' => $body,
                ':image' => $image
            ]);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $dir)) {
                echo "<script>window.location.href='../pageUser.php'</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://img.freepik.com/premium-photo/bridge-with-light-it-is-lit-up-night_605423-146351.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            max-width: 700px;
            margin: 5rem auto;
            color: white;
        }

        label {
            color: #f0f0f0;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            background-color: rgba(255, 255, 255, 0.9);
            color: #000;
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 100%;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        button[type="submit"] {
            background-color: #3490dc;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            border: none;
            transition: 0.3s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #2779bd;
            cursor: pointer;
        }

        .uploaded-image {
            margin-top: 1rem;
            border-radius: 8px;
            max-width: 100%;
            height: auto;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>

<form method="POST" action="update.php?upd_id=<?php echo $id; ?>" enctype="multipart/form-data">
    <div class="form-container">
        <h2 class="text-2xl font-bold mb-6 text-center">Update Your Post</h2>

        <div class="mb-5">
            <label for="title">Title</label>
            <input type="text" name="title" value="<?php echo $rows->title; ?>" placeholder="Title" required>
        </div>

        <div class="mb-5">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" value="<?php echo $rows->subtitle; ?>" placeholder="Subtitle" required>
        </div>

        <div class="mb-5">
            <label for="body">Description</label>
            <textarea name="body" rows="6" placeholder="Write your post..." required><?php echo $rows->body; ?></textarea>
        </div>

        <div class="mb-5">
            <label>Current Image</label><br>
            <img src="images/<?php echo $rows->image; ?>" class="uploaded-image">
        </div>

        <div class="mb-5">
            <label for="image">Upload New Image</label>
            <input type="file" name="image" id="image">
        </div>

        <button type="submit" name="submit">Update</button>
    </div>
</form>

<?php require "../includes/footer.php"; ?>

</body>
</html>
