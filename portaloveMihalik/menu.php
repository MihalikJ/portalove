<?php
include_once("class/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$menuItems = $db->getMenuItems();
?>


        <?php
        foreach ($menuItems as $key => $menuItem) {
        ?>
        <li class="btn">
            <a href="<?php echo $menuItem['file_path']; ?>"><?php echo $menuItem['nazov']; ?></a>
        </li>
            <?php
        }
        ?>
