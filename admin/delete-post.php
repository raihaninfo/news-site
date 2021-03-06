<?php
    include"config.php";
    if($_SESSION['user_role']=="0"){
        header("Location: {$hostname}/admin/post.php");
    }
    $postid = $_GET['id'];

    $sql = "DELETE FROM post WHERE post_id ={$postid}";

    if (mysqli_query($conn, $sql)) {
        header("Location: {$hostname}/admin/post.php");
    }else{
        echo "Can\'t Delete the Category Record.";
    }
    mysqli_close($conn);