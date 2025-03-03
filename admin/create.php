<?php
include("templates/hearder.php");
?>

        <div class="create-form w-100 mx-auto p-4" style="max-width:700px ">
            <form method="post" action="process.php">
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                </div>
                <div class="form-field mb-4">
                    <textarea name="summary" id="" class="form-control" cols="30" rows="10" placeholder="Enter Summary"></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea name="content" id="" cols="30" class="form-control" rows="10" placeholder="Enter Post"></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("y-m-d"); ?>">
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Submit" name="create">
                </div>

            </form>
        </div>
<?php
include("templates/footer.php");
?>