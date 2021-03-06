<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
    <title>Log in</title>
</head>

<body>
    <div class="container">
        <div class="nav"></div>
        <div class="flex-1">
            <img src="<?= base_url() ?>assets/img/logo.png">
            <p>Tiket Kita</p>
        </div>
        <div class="flex-2">
            <div class="login-box">
                <form method="POST" action="">
                    <div class="text-first">
                        <p>Log In</p>
                        <p>to Your Account</p>
                    </div>
                    <div class="text-two">
                        <p>Log in to your <span>Tiket Kita</span> Account</p>
                    </div>
                    <div class="login-input">
                        <div class="user">
                            <h4>Email</h4>
                            <input class="input" type="email" name="email">
                        </div>
                        <div class="pass">
                            <h4>Password</h4>
                            <input class="input" type="password" name="password">
                        </div>
                    </div>
                    <div class="box-bottom">
                        <input type="submit" class="btn" value="Login">
                        <p>click here if you don't have face account</p>
                        <a href="register">
                            <input type="button" class="btn" value="SignUp">
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>