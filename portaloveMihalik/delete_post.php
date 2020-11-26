<?php
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$db->deletePost($_GET['idpost']); //getuje podla urlky, nie podla db parametra pozor

header('Location: index.php');
?>

