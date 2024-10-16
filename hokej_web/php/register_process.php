<?php
session_start();
include "db_conn.php";

// Kontrola připojení k databázi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['uname']) && isset($_POST['password'])) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    // Kontrola, zda uživatel již existuje
    $sql_check = "SELECT * FROM users WHERE user_name='$uname'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        header("Location: register.php?error=Uživatelské jméno již existuje");
        exit();
    } else {
        // Hash hesla
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Vložení uživatele do databáze
        $sql_insert = "INSERT INTO users (user_name, password) VALUES ('$uname', '$hashed_password')";
        if (mysqli_query($conn, $sql_insert)) {
            header("Location: index.php?message=Úspěšně registrováno! Přihlašte se.");
            exit();
        } else {
            header("Location: register.php?error=Chyba při registraci");
            exit();
        }
    }
} else {
    header("Location: register.php");
    exit();
}
?>
