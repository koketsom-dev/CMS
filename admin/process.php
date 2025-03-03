<?php
if(isset($_POST["create"])){
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sql = "INSERT INTO posts(date, title, summary, content)
    VALUES ('$date', '$title', '$summary', '$content')";

    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["create"] = "Post added succesfully";
        header("Location:index.php");
    }else{
        die("Post not Inserted!");
    }
}
?>
<?php
if(isset($_POST["update"])){
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlUpdate = "UPDATE posts SET title = '$title' , summary = '$summary', content = '$content', date = '$date' WHERE id ='$id'";

    if(mysqli_query($conn, $sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Post updated succesfully";
        header("Location:index.php");
    }else{
        die("Unfortunetely, Post is not Edit!");
    }
}
?>