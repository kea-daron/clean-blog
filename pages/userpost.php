<?php session_start(); ?>
<?php require "../includes/navbarUser.php"; ?>
<?php require "../config/config.php"; ?>

<?php
if (isset($_GET['post_id'])) {
    $id = $_GET['post_id'];
    $select = $conn->query("SELECT * FROM posts WHERE id = '$id'");
    $select->execute();
    $post = $select->fetch(PDO::FETCH_OBJ);
} else {
    echo "404 Not Found";
    exit();
}
?>

<section class="masthead" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/<?php echo $post->image; ?>');">
    <div class="container position-relative px-4 px-lg-5 my-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h1 class="post-title"><?php echo $post->title; ?></h1>
                <h2 class="post-subtitle"><?php echo $post->subtitle; ?></h2>
                <span class="meta">
                    <i class="fa-solid fa-user-secret text-yellow-500"></i>
                    Posted by
                    <a href="#!" class="author-link"><?php echo $post->user_name; ?></a>
                    <i class="fa-solid fa-calendar-days text-yellow-500 ms-2"></i>
                    <?php echo date('M d, Y', strtotime($post->created_at)); ?>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="post-content text-black bg-white dark:text-white dark:bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <p class="card-text"><?php echo nl2br($post->body); ?></p>

                        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id) : ?>
                            <?php if (isset($post->tags) && !empty($post->tags)): ?>
                                <div class="post-tags mt-4">
                                    <h5>Tags:</h5>
                                    <div class="d-flex flex-wrap">
                                        <?php foreach ($post->tags as $tag): ?>
                                            <span class="badge bg-light text-dark me-2 mb-2"><?php echo $tag; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                                <div class="btn-group">
                                    <a href="../pages/update.php?upd_id=<?php echo $post->id; ?>">
                                        <button type="button" class="btn btn-sm btn-outline-secondary action-btn">Update</button>
                                    </a>
                                    <a href="../pages/delete.php?del_id=<?php echo $post->id; ?>">
                                        <button type="button" class="btn btn-sm btn-outline-secondary action-btn">Delete</button>
                                    </a>
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
        font-size: 3rem;
        color: #fff;
        font-weight: 800;
        margin-bottom: 0.5rem;
    }

    .post-subtitle {
        font-size: 1.5rem;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 1rem;
    }

    .meta {
        font-size: 1rem;
        color: #f8f9fa;
    }

    .author-link {
        color: #ffc107;
        font-weight: 600;
        text-decoration: none;
    }

    .author-link:hover {
        text-decoration: underline;
        color: #ffca2c;
    }

    .post-content {
        padding: 3rem 1rem;
    }

    .card {
        border-radius: 0.75rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background-color: #fff;
    }

    .card-text {
        font-size: 1.125rem;
        line-height: 1.8;
        padding: 2rem;
        color: #212529;
    }

    .btn-group {
        padding: 0 2rem;
    }

    .action-btn {
        font-weight: 600;
        padding: 0.5rem 1.25rem;
        border-radius: 0.375rem;
        background-color: #0d6efd;
        color: white;
        border: 2px solid #0d6efd;
        transition: all 0.3s ease;
        margin-right: 0.5rem;
    }

    .action-btn:hover {
        background-color: #084298;
        border-color: #084298;
    }

    .text-muted {
        padding: 0 2rem;
    }

    .post-tags h5 {
        margin-top: 2rem;
        margin-bottom: 0.5rem;
    }

    .post-tags .badge {
        font-size: 0.875rem;
        background-color: #f1f3f5;
        color: #333;
        padding: 0.5rem 0.75rem;
        border-radius: 0.5rem;
        transition: all 0.2s ease-in-out;
    }

    .post-tags .badge:hover {
        background-color: #e2e6ea;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .masthead {
            padding: 5rem 0;
        }

        .post-title {
            font-size: 2.25rem;
        }

        .post-subtitle {
            font-size: 1.25rem;
        }

        .meta {
            font-size: 0.9rem;
        }

        .card-text,
        .btn-group,
        .text-muted {
            padding: 1rem;
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

        .card-text {
            font-size: 1rem;
        }
    }
</style>

<?php require "../includes/footer.php"; ?>
