<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="el" id="body">
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>OOP PHP</title>
    </head>
    <body>
        <section class="nav-bar">
            <h3>SIGNUP</h3>
            <h3>LOGIN</h3>
            
        </section>
        <section class="container">
            <div class="contact-form">
                <form action="includes/signup.inc.php" method="post">
                    <div class="divide">
                        <h4>Signup</h4>
                        <div class="item">
                            <h4>Username</h4>
                            <input type="text" name="uid" placeholder="Username" class="box-forms">
                        </div>

                        <div class="item">
                            <h4>Password</h4>
                            <input type="password" name="pwd" placeholder="Password" class="box-forms" autocomplete="on">
                        </div>

                        <div class="item">
                            <h4>Repeat Password</h4>
                            <input type="password" name="pwdrepeat" placeholder="Repeat Password" class="box-forms" autocomplete="on">
                        </div>

                        <div class="item">
                            <h4>Email</h4>
                            <input type="text" name="email" placeholder="E-mail" class="box-forms">
                        </div>

                        <div class="send-form">
                            <button type="submit" name="submit">Signup</button>
                        </div>
                    </div>
                </form>
            </div>        
            <div class="contact-form">
                <form action="includes/login.inc.php" method="post">
                    <div class="divide">
                        <h4>Login</h4>
                        <div class="item">
                            <h4>Username</h4>
                            <input type="text" name="uid" placeholder="Username" class="box-forms">
                        </div>

                        <div class="item">
                            <h4>Password</h4>
                            <input type="password" name="pwd" placeholder="Password" class="box-forms" autocomplete="on">
                        </div>

                        <div class="send-form">
                            <button type="submit" name="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>