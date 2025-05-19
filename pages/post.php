<?php require "../includes/navbar.php"; ?>
<?php require "../config/config.php"; ?>

<?php
    if (isset($_GET['post_id'])) {
        $id = $_GET['post_id'];

        // Use prepared statement to avoid SQL injection
        $stmt = $conn->prepare("SELECT * FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $post = $stmt->fetch(PDO::FETCH_OBJ);

        if (!$post) {
            echo "404 Not Found - Post does not exist.";
            exit;
        }
    } else {
        echo "404 Not Found - Missing post_id.";
        exit;
    }
?>

<!-- Blog Post Section -->
<section class="masthead" style="background-image: url('images/<?php echo $post->image ?: 'default.jpg'; ?>');">
    <div class="container position-relative px-4 px-lg-5 my-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h1 class="post-title"><?php echo htmlspecialchars($post->title); ?></h1>
                <h2 class="post-subtitle"><?php echo htmlspecialchars($post->subtitle); ?></h2>
                <span class="meta">
                    <i class="fa-solid fa-user-secret text-yellow-500"></i> Posted by
                    <a href="../pages/bloggerDashboard.php" class="author-link"><?php echo htmlspecialchars($post->user_name); ?></a>
                    <br>
                    <i class="fa-solid fa-calendar-days text-yellow-500"></i>
                    <?php echo date('M d, Y', strtotime($post->created_at)); ?>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="post-content dark:text-white dark:bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($post->body)); ?></p>

                        <!-- Optional Tags -->
                        <?php if (isset($post->tags) && !empty($post->tags)): ?>
                        <div class="post-tags mt-4">
                            <h5>Tags:</h5>
                            <div class="d-flex flex-wrap">
                                <?php foreach ((array) $post->tags as $tag): ?>
                                <span class="badge bg-light text-dark me-2 mb-2"><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Footer Buttons -->
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mt-4 pt-3 border-top gap-2">
                            <div class="btn-group">
                                <a href="#"><button class="mt-4 font-semibold rounded-md bg-blue-900 text-white px-4 py-2 border border-primary-100 hover:bg-primary-100 dark:bg-black dark:hover:bg-yellow-500" data-translate="share">Share</button></a>
                                <a href="#"><button class="mt-4 font-semibold rounded-md bg-blue-900 text-white px-4 py-2 border border-primary-100 hover:bg-primary-100 dark:bg-black dark:hover:bg-yellow-500" data-translate="comment">Comment</button></a>
                            </div>
                            <small class="text-muted"><?php echo date('M d, Y', strtotime($post->created_at)); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Styles -->
<style>
    .masthead {
        position: relative;
        background-color: #6c757d;
        background-size: cover;
        background-position: center;
        padding: 8rem 0;
    }

    .masthead::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .masthead .container {
        position: relative;
        z-index: 1;
    }

    .post-title {
        font-size: 2.5rem;
        font-weight: 900;
        color: white;
        margin-bottom: 0.5rem;
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
        font-weight: 600;
        text-decoration: none;
    }

    .author-link:hover {
        text-decoration: underline;
    }

    .post-content {
        padding: 2rem 0;
    }

    .card {
        border-radius: 0.5rem;
    }

    .card-text {
        font-size: 1.1rem;
        line-height: 1.7;
        padding: 1rem;
    }

    .btn-group .btn {
        margin-right: 0.5rem;
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
            font-size: 0.95rem;
        }
        .card-text {
            padding: 0.5rem;
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
        .meta {
            font-size: 0.85rem;
        }
    }
</style>

<?php require "../includes/footer.php"; ?>
