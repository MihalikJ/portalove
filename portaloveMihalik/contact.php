<?php
include "config.php";

if(isset($_POST['btn_reg'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $surname = mysqli_real_escape_string($con,$_POST['surname']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['pw']);


        $sql_query = "select count(*) as cntUser from user where username='".$username."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        if($count == 0) {
            $sql_query = "INSERT INTO `user` (`iduser`, `meno`, `priezvisko`, `username`, `password`, `email`) 
                      VALUES (NULL, '".$name."','".$surname."','".$username."','".$password."','".$email."')";
            $result = mysqli_query($con,$sql_query);
            header('Location: index.php');
        }else{
            echo "Username is already taken";
        }
}
?>
<!DOCTYPE html>
<!-- templatemo 413 flip turn -->
<!--
Flip Turn Template
http://www.templatemo.com/tm-413-flip-turn
-->
<head>
    <?php include_once("header.php"); ?>
</head>
<body>

    <div class="content-container">

        <div id="contact-content" class="content">



            <form role="form" method="post" action="">
                <div class="templatemo_form">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" maxlength="40" required>
                </div>
                <div class="templatemo_form">
                    <input name="surname" type="text" class="form-control" id="surname" placeholder="Your Surname" maxlength="40" required>
                </div>
                <div class="templatemo_form">
                    <input name="username" type="text" class="form-control" id="username" placeholder="Your username" maxlength="40" required>
                </div>
                <div class="templatemo_form">
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required>
                </div>
                <div class="templatemo_form">
                    <input name="pw" type="password" class="form-control" id="pw" placeholder="Your password" required>
                </div>

                <div class="templatemo_form"><button type="submit" id="btn_reg" name="btn_reg" class="btn btn-primary">Register</button></div>
                <address class="content-description">
                    <i class="fa fa-phone"></i> 010-010-0110<br>
                    <i class="fa fa-map-marker"></i> 110 Proin eu erat vitae, mauris ullamcorper luctus 10110<br>
                    <i class="fa fa-envelope"></i> <a href="#">info@company.com</a><br>
                </address>
            </form>
        </div>
    </div> <!-- /.content-container -->

    <?php include_once("footer.php"); ?>

</div>
<script type="text/javascript" src="js/templatemo_script.js"></script>
<script type="text/javascript">
    loadScript();
</script>
</body>
</html>