<?php

include_once "includes/header.php";

if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    $fileName = time() . uniqid() . "-" . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "../assets/images/" . $fileName);
    $_POST['img'] = $fileName;

    insert("products", $_POST);
}

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
                                <p class="f-20 w-400 my-2">Add Product</p>
                               <div class="seprator mb-3"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label f-14 w-500">Name</label>
                                    <input required type="text" name="name" class="form-control" id="name" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="price" class="form-label f-14 w-500">Price</label>
                                    <input required type="number" min="1" name="price" class="form-control" id="price" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="image" class="form-label f-14 w-500">Image</label>
                                    <input required type="file" name="img" class="form-control" id="image" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                               <div class="d-flex flex-column mb-3">
                                <label for="description" class="form-label f-14 w-500">Description </label>
                                <textarea required name="description" width="100%" rows="3"  id="description" class="text-area"></textarea>
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