<?php
    $id = $_GET['id'];
    if($id){
        include("../connect.php");
        $sqlDelete = "DELETE FROM posts WHERE `id`='$id'";
        if(mysqli_query($conn, $sqlDelete)){
            session_start();
            $_SESSION["delete"] = "Post deleted succesfully";
            header("Location: index.php");
        }else{
            die("Something went wrong Data not deleted!");
        }
    }else{
        echo "Error, could not delete post.";
    }
?>