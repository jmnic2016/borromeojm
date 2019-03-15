<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Token Validation</title>
</head>
<body>

    <form class="form" role="form" autocomplete="off" id="formLogin" method="post" action = "www/login.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control form-control-lg rounded-0" id="password" name = "password" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-lg btn-info float-right" id="btnLogin">Login</button>
    </form>
    
</body>
</html>