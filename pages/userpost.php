<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>

<?php

    if(isset($_GET['post_id'])){
        $id = $_GET['post_id'];
        $select = $conn->query("SELECT * FROM posts WHERE id = '$id'");
        $select->execute();
        $post = $select->fetch(PDO::FETCH_OBJ);
    } else {
        echo "404 Not Found";
    }
?>

<section class="masthead" style="background-image: url('images/<?php echo $post->image; ?>');">
    <div class="container position-relative px-4 px-lg-5 my-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <h1 class="post-title"><?php echo $post->title; ?></h1>
                <h2 class="post-subtitle"><?php echo $post->subtitle; ?></h2>
                <span class="meta">
                    <i class="fa-solid fa-user-secret text-yellow-500 dark:text-yellow-500"></i>
                    Posted by
                    <a href="#!" class="author-link"><?php echo $post->user_name; ?>, </a>
                    <i class="fa-solid fa-calendar-days text-yellow-500 dark:text-yellow-500"></i>
                    <?php 
                    
                    echo date('M d,', strtotime($post->created_at)) . ' ' . date('Y', strtotime($post->created_at)); 
                    ?>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="post-content dark:text-white dark:bg-black text-black bg-white">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto ">
                <div class="card shadow-sm ">
                    <div class="card-body ">
                        <p class="card-text"><?php echo $post->body; ?></p>
                        
                        <?php if(isset($_SESSION['user_id']) AND $_SESSION['user_id'] == $post->user_id) : ?>

                            <?php if(isset($post->tags) && !empty($post->tags)): ?>
                                <div class="post-tags mt-4">
                                    <h5>Tags:</h5>
                                    <div class="d-flex flex-wrap">
                                        <?php foreach($post->tags as $tag): ?>
                                        <span class="badge bg-light text-dark me-2 mb-2"><?php echo $tag; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        
                            <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                                <div class="btn-group">
                                    <a href="http://localhost/clean-blog/pages/update.php?upd_id=<?php echo $post->id; ?>"><button type="button" class="btn btn-sm btn-outline-secondary rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-white border-2 border-primary-100 hover:bg-blue-900 dark:bg-yellow-500 dark:hover:bg-gray-900 dark:text-white">Update</button></a>
                                    <a href="http://localhost/clean-blog/pages/delete.php?del_id=<?php echo $post->id; ?>"><button type="button" class="btn btn-sm btn-outline-secondary rounded-md font-semibold bg-primary-100 px-4 py-1.5 text-white border-2 border-primary-100 hover:bg-blue-900 dark:bg-yellow-500 dark:hover:bg-gray-900 dark:text-white">Delete</button></a>
                                </div>
                                <small class="text-muted">
                                    <?php echo date('M d', strtotime($post->created_at)); ?>
                                </small>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .masthead {
        position: relative;
        background-color: #6c757d;
        background-size: cover;
        background-position: center;
        padding: 8rem 0;
        
    }
    
    .masthead:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
    }
    
    .masthead .container {
        position: relative;
        z-index: 1;
    }
    
    .post-title {
        font-size: 2.5rem;
        color: white;
        margin-bottom: 0.5rem;
        font-weight: 900;
    }
    
    .post-subtitle {
        font-size: 1.5rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 1rem;
    }
    
    .meta {
        font-size: 1.1rem;
        color: white;
    }
    
    .author-link {
        color: white;
        text-decoration: none;
        font-weight: 600;
    }
    
    .author-link:hover {
        text-decoration: underline;
    }
    
    .post-content {
        padding: 2rem 0;
    }
    
    .card {
        border-radius: 0.5rem;
        overflow: hidden;
    }
    
    .card-text {
        font-size: 1.1rem;
        line-height: 1.7;
        padding: 0rem 10rem;
    }

    .btn-group {
        padding: 0rem 10rem;
    }

    .text-muted{
        padding: 0rem 10rem;
    }

    @media (max-width: 768px) {
        .masthead {
            padding: 6rem 0;
        }
        
        .post-title {
            font-size: 2rem;
        }
        
        .post-subtitle {
            font-size: 1.2rem;
        }
        
        .meta {
            font-size: 0.9rem;
        }
        
        .card-text {
            font-size: 1rem;
            line-height: 1.6;
        }

    }
    
    @media (max-width: 576px) {
        .masthead {
            padding: 4rem 0;
        }
        
        .post-title {
            font-size: 1.75rem;
        }
        
        .post-subtitle {
            font-size: 1.1rem;
        }
    }
</style>

<?php require "../includes/footer.php" ?>