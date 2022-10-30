<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    include "config.php"
    error_reporting(0);
    session_start();

    if(isset($_SESSION["username"])){
        header("location: index.php")
    }

    if(isset($_POST["subtmit"])){
        $username=$_POST["username"]
        
    }
    ?>
    <div class="container">
        <div class="box">
            <div class="form">
                <form autocomplete="off">
                    <h2>Register</h2>
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span>Userame</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" required="required">
                        <span>Mail</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <input type="submit" value="Register">
                </form>
            
        </div>
    </div>
</div>
</body>
</html>