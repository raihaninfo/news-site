<?php
if($_SESSION['user_role']=="0"){
    header("Location: {$hostname}/admin/post.php");
}






?>