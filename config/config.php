<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    //Redireeciona
    header('location:http://localhost/limpio/index.php');
    exit;
}

try {
    //host
    define("HOST", "localhost:3305"); // Incluye el puerto 3305
    //dbname
    define("DBNAME", "be");
    //user
    define("USER", "root");
    //pass
    define("PASS", ""); // Asegúrate de poner aquí la contraseña si es necesaria

    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
