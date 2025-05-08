<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body class="bg-whitesmoke flex items-center justify-center min-h-screen w-full h-screen">
    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden w-full h-full">
        <div class="md:w-1/2 p-6 flex items-center justify-center">
            <img src="../assets/register.svg" class="w-full max-w-sm" alt="Register">
        </div>
        <div class="md:w-1/2 p-6 flex items-center justify-center w-full h-full">
            
            <div class="w-full max-w-md">
                <div class="flex items-center">
                    <a href="http://localhost/clean-blog/index.php"><img src="../assets/logoIB.jpg" class="h-[70px] w-[70px] mb-3" alt="sidelogo"></a>
                    <h2 class="text-blue-700 font-bold text-4xl mx-3"><span class="text-red-600">i</span>Blog</h2>
                </div>
                <p class="text-3xl text-blue-700 font-bold">Join as a Blog</p>
                <p class="text-gray-600">Create your account to get started</p>
                <?php require "../config/config.php"; ?>
                <?php
                    if(isset($_POST['submit'])){
                        if(empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])) {
                            echo "<p class='text-red-500 text-sm'>Error, all fields are required!</p>";
                        } else {
                            $email = $_POST['email'];
                            $username = $_POST['username'];
                            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                            $insert = $conn->prepare("INSERT INTO users (email, username, password) VALUES (:email, :username, :password)");
                            $insert->execute([
                                ':email' => $email,
                                ':username' => $username,
                                ':password' => $password
                            ]);
                            header("location: login.php");
                        }
                    }
                ?>
                
                <form method="POST" action="register.php" class="space-y-4 mt-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700"> Your email</label>
                        <input type="email" name="email" id="email" class="h-[50px] mt-1 block w-full p-2 border border-blue-500 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="your email" required>
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Your Username</label>
                        <input type="text" name="username" id="username" class="h-[50px] mt-1 block w-full p-2 border border-blue-500 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="your username" required>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Your password</label>
                        <input type="password" name="password" id="password" class="h-[50px] mt-1 block w-full p-2 border border-blue-500 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="your password" required>
                    </div>
                    <button type="submit" name="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg px-4 py-2">Create Account</button>
                    <p class="text-gray-700 text-sm text-center">Already have an account? <a href="http://localhost/clean-blog/auth/login.php" class="text-blue-600 font-semibold">Login now</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
