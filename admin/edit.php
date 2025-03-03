<?php
include("templates/hearder.php");
?>

<?php
    $id = $_GET['id'];
    if($id){
        include("../connect.php");
        $sqlEdit = "SELECT * FROM posts WHERE id= $id";
        $result = mysqli_query($conn, $sqlEdit);

    }else{
        echo "No Post to edit";
    }
    
?>

        <div class="create-form w-100 mx-auto p-4" style="max-width:700px ">
            <form method="post" action="process.php">
                <?php
                   while($data = mysqli_fetch_array($result)){
                ?>
               
                    <div class="form-field mb-4">
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="<?php echo $data['title']; ?>">

                    </div>
                    <div class="form-field mb-4">
                        <textarea name="summary" id="" class="form-control" cols="30" rows="10" placeholder="Enter Summary" ><?php echo $data['summary']; ?></textarea>
                    </div>
                    <div class="form-field mb-4">
                        <textarea name="content" id="" cols="30" class="form-control" rows="10" placeholder="Enter Post"><?php echo $data['content']; ?></textarea>
                    </div>
                    <input type="hidden" name="date" value="<?php echo date("y-m-d"); ?>">
                    <input type="hidden" name="id" value= "<?php  echo $id; ?>">

                    <div class="form-field">
                        <input type="submit" class="btn btn-primary" value="Submit" name="update">
                    </div>

                <?php
                 }
                ?>

            </form>
        </div>

<?php
include("templates/footer.php");
?>