<?php
include_once('header.php');
include_once('config.php');
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$gallery = $db->editPost($_GET['idpost']); //uz pozor :)

if(isset($_POST['editpost'])) {

    $post = mysqli_real_escape_string($con, $_POST['message']);
    $sql_query = "UPDATE `post` SET popis = '".$post."' WHERE idpost='".$_GET['idpost']."'";
    $result = mysqli_query($con,$sql_query);

    header('Location: index.php');

}

?>
<!DOCTYPE html>
<!-- templatemo 413 flip turn -->
<!--
Flip Turn Template
http://www.templatemo.com/tm-413-flip-turn
-->
<head>

</head>
<body>

<div class="content-container">

    <div id="contact-content" class="content">


        <div id="contact-content" class="content">
            <div class="templatemo_contactmap">


                <form method="post" action="">

                    <?php
                    foreach ($gallery as $key => $Gallery) { ?>
                    <div class="templatemo_form">
                        <textarea name="message" rows="10" class="form-control" id="message" required><?php echo $Gallery['popis'];?></textarea>
                    </div>
                    <?php } ?>

                    <li class="btn">
                        <input type="submit" value="Edit Post" name="editpost">
                    </li>


                </form>

            </div>

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
