<?php

include_once "includes/header.php";

if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    insert("words", $_POST);
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
                                <p class="f-20 w-400 my-2">Add Word</p>
                               <div class="seprator mb-3"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="word" class="form-label f-14 w-500">Heading</label>
                                    <input required type="text" name="word" class="form-control" id="heading" >
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