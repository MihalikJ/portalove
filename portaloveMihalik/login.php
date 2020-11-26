<?php
include "config.php";
if(isset($_POST['btn_log'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['pw']);


        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            //SELECT CONCAT(meno,' ', priezvisko) AS 'cele_meno', email FROM `user`
            $sql_query = "SELECT iduser, CONCAT(meno,' ', priezvisko) AS cele_meno, email FROM `user` WHERE username='".$uname."' and password='".$password."'";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);

            $user_id = $row['iduser'];
            $full_name = $row['cele_meno'];
            $email = $row['email'];

            session_start();

            $_SESSION['user_id'] = $user_id;
            $_SESSION['uname'] = $uname;
            $_SESSION['full_name'] = $full_name;
            $_SESSION['email'] = $email;



            header('Location: index.php');
        }else{
            echo "<script>alert('Invalid username or password');</script>";
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
                <input name="username" type="text" class="form-control" id="username" placeholder="Your username" maxlength="40" required>
            </div>

            <div class="templatemo_form">
                <input name="pw" type="password" class="form-control" id="pw" placeholder="Your password" required>
            </div>

            <div class="templatemo_form"><button type="submit" id="btn_log" name="btn_log" class="btn btn-primary">Login</button></div>
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