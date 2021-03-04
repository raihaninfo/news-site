<?php
    include"config.php";
    if($_SESSION['user_role']=="0"){
        header("Location: {$hostname}/admin/post.php");
    }
    $catid = $_GET['id'];

    $sql = "DELETE FROM category WHERE category_id ={$catid}";

    if (mysqli_query($conn, $sql)) {
        header("Location: {$hostname}/admin/category.php");
    }else{
        echo "Can\'t Delete the Category Record.";
    }
    mysqli_close($conn);