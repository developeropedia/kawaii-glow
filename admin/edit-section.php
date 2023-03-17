<?php

include_once "includes/header.php";

if(!isset($_GET['id'])) {
    redirect("index.php");
}

if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    if(isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
        $fileName = time() . uniqid() . "-" . $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "../assets/images/" . $fileName);
        $_POST['img'] = $fileName;
    }

    update("sections", $_POST, "id", $_GET['id']);
}

$section = findById("sections", $_GET['id']);

?>


<!-- -----------Main Contents----------- -->
<main class="content pb-4">
    <div class="container-fluid">
        <div class="row m-0 p-0">
            <div class="col-lg-12 mt-4 ">
                <div class="panel-card">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="f-20 w-400 my-2">Edit Section</p>
                               <div class="seprator mb-3"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="heading" class="form-label f-14 w-500">Heading</label>
                                    <input required type="text" value="<?php echo $section->heading ?>" name="heading" class="form-control" id="heading" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="image" class="form-label f-14 w-500">Image (Optional)</label>
                                    <input type="file" name="img" class="form-control" id="image" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                               <div class="d-flex flex-column mb-3">
                                <label for="description" class="form-label f-14 w-500">Description </label>
                                <textarea required name="description" width="100%" rows="3"  id="description" class="text-area"><?php echo $section->description ?></textarea>
                               </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center justify-content-between ">
                                  <button type="submit" name="submit" class="panel-button2">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

</main>

<?php

include_once "includes/footer.php";

?>