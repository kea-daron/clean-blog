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
            <img src="../assets/login.svg" class="w-full max-w-sm" alt="Register">
        </div>
        <div class="md:w-1/2 p-6 flex items-center justify-center w-full h-full">
            
            <div class="w-full max-w-md"> 
                <div class="flex items-center ">
                    <img src="../assets/sidelogo.png" class="h-[70px] w-[70px] mb-3" alt="sidelogo">
                    <h2 class="text-blue-900 font-bold text-4xl mx-3"><span class="text-red-500">i</span>Blog</h2>
                </div>
                <p class="text-3xl text-black font-bold">Welcome Back</p>
                <p class="text-gray-600">Log in to your account</p>
                <?php require "../config/config.php"; ?>
                <?php
                    if(isset($_POST['submit'])){
                        if($_POST['email'] == '' OR $_POST['password'] == ''){
                            echo "one input or more are empty";
                        }else{
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $login = $conn->query("SELECT * FROM users WHERE email = '$email'");

                            $login->execute();

                            $row = $login->FETCH(PDO::FETCH_ASSOC);

                            if($login->rowCount() > 0){
                                if(password_verify($password, $row['password'])){
                                    $_SESSION['username'] = $row['username'];
                                    header('location: http://localhost/clean-blog/profileUser.php');
                                }
                            }
                        }
                    }
                ?>
                
                <form method="POST" action="login.php" class="space-y-4 mt-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700"> Your email</label>
                        <input type="email" name="email" id="email" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email" required>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Your password</label>
                        <input type="password" name="password" id="password" class="h-[50px] mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" name="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg px-4 py-2">Log in</button>
                    <p class="text-gray-700 text-sm text-center">Don't have an account? <a href="#" class="text-blue-600 font-semibold">Sign now</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
