<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <ul>
            <a href="index.html">
                <li>RECURSION</li>
            </a>
        </ul>
    </center>
    <form action="signup_script.php" method="POST">
        <div class="login-box">
            <h1>Sign up</h1>
            <div class="textbox">
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" placeholder="Username" value="">
            </div>
            <div class="textbox">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" placeholder="Password" value="">
            </div>
            <button type="btn" name="submit" class="btn btn-primary">Sign Up</button>
        </div>
    </form>
</body>

</html> 