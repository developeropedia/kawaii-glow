<?php

include_once "includes/header.php";

if(isset($_GET['id'])) {
    delete("sections", "id", $_GET['id']);
}

$sections = findAllByQuery("SELECT * FROM sections WHERE page = 'about'");

?>


<!-- -----------Main Contents----------- -->
<main class="content pb-4">
    <div class="p-20">
        <div class="d-flex justify-content-end align-items-center flex-wrap">
            <div class="d-flex align-items-center btns-row">
                <a href="add-section.php"><button class="panel-button">+&nbsp;&nbsp;Add Section</button></a>

            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row m-0 -0">
            <div class="col-lg-12 mt-4">
                <div class="panel-card">
                    <div class="">
                        <p class="f-20 w-400 my-3">About Sections</p>
                       <div class="seprator"></div>
                    </div>
                    <div class="products-table-wrapper">
                        <table id="dashboard-table" class="products-table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="products-table-head">S.No</th>
                                    <th class="products-table-head">Section</th>
                                    <th class="products-table-head">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($sections)): ?>
                                <?php foreach ($sections as $key => $section): ?>
                                    <tr>
                                        <td class="product-table-text"><?php echo $key + 1 ?></td>
                                        <td class="product-table-text"><?php echo $section->heading ?></td>
                                        <td class="icons">
                                            <div class="d-flex">
                                                <a href="edit-section.php?id=<?php echo $section->id ?>"> <i
                                                            class="bi bi-pencil-square"></i></a>
                                                <a href="?id=<?php echo $section->id ?>"> <i
                                                            class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php

include_once "includes/footer.php";

?>