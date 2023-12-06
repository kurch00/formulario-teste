<?php

    session_start();
    // print_r($_SESSION);

    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sistema</title>

    <style>
        body{
            background: linear-gradient(to right, rgb(20,147,220), rgb(17,57,71));
        }
    </style>

</head>
<body>
    <nav class="navbar">
        <div></div>
    </nav>
    <h1>Acessou o sistema!</h1>
</body>
</html>