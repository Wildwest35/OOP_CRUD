<?php
    session_start();
    if(isset($_SESSION["userid"])) {
?>
<!DOCTYPE html>
<html lang="el" id="body">
    <head>
        <meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title><?php echo $_SESSION["useruid"];?> | Personal Information</title>
    </head>
    <body>
        <section class="nav-bar">
            <h3><?php echo $_SESSION["useruid"] ?></h3>
            <h3>Personal Information</h3>
            <h3><a href="includes/logout.inc.php">LOGOUT</a></h3>
        </section>
        <div class="delete-container"><button id="ins">New Info</button></div>
        <div id="fetch"></div>
        <?php require_once './modal/updatePersonalinfo.php'; ?>
        <?php require_once './modal/insertPersonalinfo.php'; ?>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="js/personalinfo.js"></script>
    </body>
</html>
<?php
    } else {
        header("location: index.php?error=pleaselogin");
        exit();
    }
?>