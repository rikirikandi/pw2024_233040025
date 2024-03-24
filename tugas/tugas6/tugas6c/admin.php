<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6c</title>

    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="card" id="admin">
            <h2>Selamat Datang di Halaman Admin</h2>
            <form action="" method="POST">
                <button class="btn btn-logout" type="submit" name="logout" value="logout">
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>

</html>