<?php

$words = findAll("words");

?>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ticker-wrap">
                    <div class="ticker">
                        <?php if(!empty($words)): ?>
                        <?php foreach ($words as $word): ?>
                            <div class="ticker__item"><?php echo $word->word ?></div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container mt-3">
        <div class="row align-items-center">
            <div class="col-lg-6 d-flex align-items-center mb-3">
                <img src="assets/images/<?php echo getSettings('footer_img') ?>" alt="" class="footer-teddy" width="200">
                <div>
                    <h1 class="footer-heading">Description</h1>
                    <p class="footer-text"><?php echo getSettings('footer_description') ?></p>

                </div>
            </div>
            <div class="col-lg-2 ms-auto mb-3">
                <h1 class="footer-heading">Pages</h1>
                <a href="index.html" class="footer-text">Home</a><br>
                <a href="product.html" class="footer-text">Products</a><br>
                <a href="about-us.html" class="footer-text">About</a><br>
                <a href="our-story.html" class="footer-text">Our Story</a><br>
            </div>
            <div class="col-lg-3 mb-3">
                <h1 class="footer-heading">Contact</h1>
                <a href="" class="footer-text"><?php echo getSettings('email') ?></a><br>
                <a href="" class="footer-text"><?php echo getSettings('phone') ?></a><br>

            </div>

        </div>
    </div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="assets/js/app.js"></script>
</body>

</html>