<?php
include_once('config.php');
include_once("header.php");
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

    $post = mysqli_real_escape_string($con, $_POST['message']);


    $sql_query = "INSERT INTO `post` (`idpost`, `fotka_upravena`, `user_iduser`, `popis`, `fotka`)
                          VALUES (NULL, 'uploads/".$_FILES["fileToUpload"]["name"]."','".$_SESSION['user_id']."','".$post."','uploads/".$_FILES["fileToUpload"]["name"]."')";


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


                <form action="upload.php" method="post" enctype="multipart/form-data">

                <div class="templatemo_form">
                    <textarea name="message" rows="10" class="form-control" id="message" placeholder="Message" required></textarea>
                </div>

                <li class="btn">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </li>


                <li class="btn">
                    <input type="submit" value="Upload Image" name="upload">
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