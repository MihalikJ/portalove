
<?php
include_once("class/DB.php");
use classes\DB;
$db = new DB("localhost", "root", "", "portalove", 3306);
$gallery = $db->getGallery();
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

        <div id="portfolio-content" class="center-text">

            <div class="portfolio-page" id="page-1">

                <?php
                foreach ($gallery as $key => $Gallery) {
                    ?>

                <div class="portfolio-group">

                    <a class="portfolio-item" href="<?php echo $Gallery['fotka']; ?>">
                        <img src="<?php echo $Gallery['fotka_upravena']; ?>" alt="image 1">
                        <div class="detail">
                            <h3><?php echo $Gallery['username']; ?></h3>
                            <p><?php echo $Gallery['popis']; ?></p>
                            <?php if (isset($_SESSION['uname'])){
                            if($Gallery['iduser'] == $_SESSION['user_id']) {?>
                                <span class="btn" onclick=window.location.href='edit_post.php?idpost=<?php echo $Gallery['idpost'];?>';>Edit</span>
                                <span class="btn" style="background-color:#ff6666" onclick=window.location.href='delete_post.php?idpost=<?php echo $Gallery['idpost'];?>';>Delete</span>

                            <?php }
                            }?>
                        </div>
                    </a>

                </div>
                <?php
                    }
                    ?>

        </div>
        </div>
    </div>	<!-- /.content-container -->

    <?php include_once("footer.php"); ?>

</body>
</html>