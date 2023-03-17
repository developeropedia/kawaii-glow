<?php

include_once "includes/header.php";

if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    updateSettings("title", $_POST['title']);
    updateSettings("email", $_POST['email']);
    updateSettings("phone", $_POST['phone']);
    updateSettings("footer_description", $_POST['footer_description']);

    if(isset($_FILES['logo']) && !empty($_FILES['logo']['name'])) {
        $fileName = time() . uniqid() . "-" . $_FILES['logo']['name'];

        move_uploaded_file($_FILES['logo']['tmp_name'], "assets/images/" . $fileName);
        updateSettings("logo", $fileName);
    }

    if(isset($_FILES['video']) && !empty($_FILES['video']['name'])) {
        $fileName = time() . uniqid() . "-" . $_FILES['video']['name'];

        move_uploaded_file($_FILES['video']['tmp_name'], "../assets/images/" . $fileName);
        updateSettings("home_video", $fileName);
    }

    if(isset($_FILES['footer_img']) && !empty($_FILES['footer_img']['name'])) {
        $fileName = time() . uniqid() . "-" . $_FILES['footer_img']['name'];

        move_uploaded_file($_FILES['footer_img']['tmp_name'], "../assets/images/" . $fileName);
        updateSettings("footer_img", $fileName);
    }
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
                                <p class="f-20 w-400 my-2">Settings</p>
                               <div class="seprator mb-3"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label f-14 w-500">Title</label>
                                    <input required value="<?php echo getSettings('title') ?>" type="text" name="title" class="form-control" id="title" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="logo" class="form-label f-14 w-500">Logo (Optional)</label>
                                    <input type="file" name="logo" class="form-control" id="logo" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="video" class="form-label f-14 w-500">Video (Optional)</label>
                                    <input type="file" name="video" class="form-control" id="video" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="footer_img" class="form-label f-14 w-500">Footer Image (Optional)</label>
                                    <input type="file" name="footer_img" class="form-control" id="footer_img" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label f-14 w-500">Email</label>
                                    <input required value="<?php echo getSettings('email') ?>" type="email" name="email" class="form-control" id="email" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label f-14 w-500">Phone</label>
                                    <input required value="<?php echo getSettings('phone') ?>" type="text" name="phone" class="form-control" id="phone" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="footer_description" class="form-label f-14 w-500">Footer Description</label>
                                    <textarea required name="footer_description" class="form-control" id="footer_description" ><?php echo getSettings('footer_description') ?></textarea>
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