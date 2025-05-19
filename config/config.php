<?php

try {
    $host = "dpg-d0l9r88gjchc73et7s4g-a.oregon-postgres.render.com";
    $port = "5432";
    $dbname = "darom";
    $user = "darom_user";
    $pass = "gwhJ7RnFXOAeL8XYq8Fw0SuxR4l5mBkE";

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connection successful!";   
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
