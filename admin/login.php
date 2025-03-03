<?php 
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username =="admin" && $password =="pass"){
            session_start();
            $_SESSION['username']=$username;
            header("Location: index.php");

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="container mt-5" style="max-width:600px">
        <div class="login-form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-field mb-4">
                    <label for="username">Username:</label>
                    <input class= "form-control" type="text" id="username" name="username" placeholder="Username"required>
                </div>
                <div class="form-field mb-4">
                    <label for="password">Password:</label>
                    <input class= "form-control" type="password" id="password" name="password" placeholder="password"required>
                </div>
                <div class="form-field mb-4">
                    <input class= "btn btn-primary" type="submit" value="Login" name="login">
                </div>

               
            </form>
        </div>
    </div>
</body>
</html>