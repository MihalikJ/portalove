<?php session_start();?>
<head>
    <title>Seriózny názov</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<div class="main-container">

    <nav class="main-nav">
        <div id="logo" class="left"><a href="#"><?php if (isset($_SESSION['uname'])){ ?>
                    <?php echo $_SESSION['uname'];?>
                    <?php
                } else {
                    ?>
                    Seriózny názov
                    <?php
                }
                ?></a></div>
        <ul class="nav right center-text">
    <?php include_once ("menu.php"); ?>

    <?php if (isset($_SESSION['uname'])){ ?>
            <li class="btn">
        <a href="logout.php">Logout</a>
            </li>
        <li class="btn">
            <a href="upload.php">+</a>
        </li>

        <?php
    } else {
        ?>
            <li class="btn">
        <a href="login.php" class="btn">Login</a>
            </li>
            <li class="btn">
        <a href="contact.php" class="btn">Register</a>
            </li>
        <?php
    }
    ?>
        </ul>
    </nav>


