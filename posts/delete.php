<?php require "../config/config.php"; ?>
<?php
    if(isset($_GET['del_id'])){
        $id = $_GET['del_id'];

        $select = $conn->query("SELECT * FROM posts WHERE id = '$id'");
        $select->execute();
        $posts = $select->fetch(PDO::FETCH_OBJ);

        unlink("images/".$posts->image."");

        $delete = $conn->prepare("DELETE FROM posts WHERE id = :id");
        $delete->execute([
            ':id' => $id
        ]);
        header('Location: http://localhost/clean-blog/profileUser.php');
    }
?>