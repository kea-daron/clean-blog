<?php

try{
        // host
    $host = "localhost";

    //dbname
    $dbname = "cleanblog";

    //user
    $user = "root";

    //pass
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo $e->getMessage();
}

// if($conn == true) {
//     echo "conn work fine";
// } else {
//     echo "conn error";
// }