<?php
include "config.php";
// if($_SESSION['user_role']=="0"){
//     header("Location: {$hostname}/admin/post.php");
// }
$postid = $_GET['id'];
$cat_id = $_GET['catid'];

$sql = "DELETE FROM post WHERE post_id ={$postid};";
$sql .= "UPDATE category SET post = post-1 WHERE category_id={$cat_id}";

if (mysqli_multi_query($conn, $sql)) {
    header("Location: {$hostname}/admin/post.php");
} else {
    echo "Query Faild.";
}
mysqli_close($conn);
