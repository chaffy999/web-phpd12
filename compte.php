<?php
    session_start();
    require('includes/config.php');
    require('includes/functions.php');
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        if(login($_POST['username'],$_POST['password'])==false){
            header('Location: login.php?error=1');
        }
    }
    else{
        if(empty($_SESSION['username'])){
            header('Location: login.php');
        }
    }
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?> - Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php require('includes/header.php'); ?>
    <div class="container">
        <h1>Hello <?php echo $_SESSION['username'] ?>, this is your dashboard</h1>
        <a href="participants.php" type="button" class="btn btn-dark">See the participants</a>
    </div>
</body>

</html>