<?php 
// Start the session immediately, before any output
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Then require config and navbar
require "../../config/config.php"; 
require "../layouts/navbarAdmin.php"; 

// Redirect if not logged in
if(!isset($_SESSION['adminname'])) {
    require "../../admin/admins/login-admins.php";
    exit();
}


// Prepare and execute query to fetch admins
$admins = $conn->prepare("SELECT * FROM admins LIMIT 7");
$admins->execute();
$rows = $admins->fetchAll(PDO::FETCH_OBJ);
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Admins</h5>
                <a href="http://localhost/clean-blog/admin/admins/create-admins.php" class="btn btn-primary mb-4 float-right">Create Admins</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">admin name</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row): ?>
                            <tr>
                                <th scope="row"><?php echo htmlspecialchars($row->id); ?></th>
                                <td><?php echo htmlspecialchars($row->adminname); ?></td>
                                <td><?php echo htmlspecialchars($row->email); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>

<?php 
require "../layouts/footerAdmin.php"; 
?>
