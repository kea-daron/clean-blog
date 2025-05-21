<?php
session_start();
require "../config/config.php";

$error = "";

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email and password are required.";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $login->execute([':email' => $email]);

        if ($login->rowCount() > 0) {
            $row = $login->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];
                header('Location: ../pageUser.php');
                exit;
            } else {
                $error = "The email or password is incorrect!";
            }
        } else {
            $error = "The email or password is incorrect!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="bg-whitesmoke flex items-center justify-center min-h-screen w-full">
    <div class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden w-full h-full">
        <div class="md:w-1/2 p-6 flex items-center justify-center">
            <img src="../assets/login.svg" class="w-full max-w-sm" alt="Login">
        </div>
        <div class="md:w-1/2 p-6 flex items-center justify-center w-full h-full">
            <div class="w-full max-w-md">
                <div class="flex items-center">
                    <a href="../index.php"><img src="../assets/logoIB.jpg" class="h-[70px] w-[70px] mb-3" alt="Logo"></a>
                    <h2 class="text-blue-700 font-bold text-4xl mx-3"><span class="text-red-500">i</span>Blog</h2>
                </div>
                <p class="text-3xl text-blue-700 font-bold">Welcome Back</p>
                <p class="text-gray-600">Log in to your account</p>

                <?php if (!empty($error)): ?>
                    <div class="bg-red-500 text-white rounded-lg py-3 px-4 mt-4 text-sm font-medium">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="login.php" class="space-y-4 mt-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Your email</label>
                        <input type="email" name="email" id="email" class="h-[50px] mt-1 block w-full p-2 border border-blue-600 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email" required>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Your password</label>
                        <input type="password" name="password" id="password" class="h-[50px] mt-1 block w-full p-2 border border-blue-600 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password" required>
                    </div>

                    <button type="submit" name="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg px-4 py-2">Log in</button>

                    <p class="text-gray-700 text-sm text-center">Don't have an account? 
                        <a href="../auth/register.php" class="text-blue-600 font-semibold">Sign up now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
