<?php

$active = "products";

include_once "includes/header.php";

$products = findAll("products");

?>

  <main>
    <section>
      <div class="container">
          <?php if(!empty($products)): ?>
          <?php foreach ($products as $key => $product): ?>
                  <?php if($key % 2 !== 0): ?>
                      <div class="row justify-content-center pt-4">
                          <div class="col-lg-6 mb-3 d-flex flex-column justify-content-center  ">
                              <a href="product-details.php" class="no-decoration">
                                  <div class="d-flex align-items-center justify-content-start  mb-2">
                                      <?php if(!empty($product->name)): ?>
                                          <?php foreach (explode(" ", $product->name) as $key => $name): ?>
                                              <?php if($key == count(explode(" ", $product->name)) - 1): ?>
                                                  <h1 class="main-heading4">
                                                      <?php echo $name ?>
                                                  </h1>
                                              <?php else: ?>
                                                  <h1 class="main-heading3">
                                                      <?php echo $name ?> &nbsp;
                                                  </h1>
                                              <?php endif; ?>
                                          <?php endforeach; ?>
                                      <?php endif; ?>
                                  </div>
                              </a>
                              <p class="text text-ellipsis--4">
                                  <?php echo $product->description ?> <a href="product-details.php?id=<?php echo $product->id ?>" class="text-primary">Read More</a></p>
                              <div class="d-flex justify-content-center mt-3">
                                  <a href="checkout.php?id=<?php echo $product->id ?>" class="video-btn-sm mx-1">
                                      Buy
                                  </a>
                              </div>
                          </div>
                          <div class="col-lg-5    mb-3">
                              <a href="product-details.php?id=<?php echo $product->id ?>">
                                  <div class="product-img">
                                      <img src="assets/images/<?php echo $product->img ?>" alt="" class="">
                                  </div>
                              </a>
                          </div>


                      </div>
                  <?php else: ?>
                      <div class="row justify-content-center pt-4">

                          <div class="col-lg-5 order-lg-1 order-2  mb-3">
                              <a href="product-details.php">
                                  <div class="product-img">
                                      <img src="assets/images/<?php echo $product->img ?>" alt="" class="">
                                  </div>
                              </a>
                          </div>
                          <div class="col-lg-6 mb-3 d-flex flex-column justify-content-center order-lg-2 order-1 ">
                              <a href="product-details.php" class="no-decoration">
                                  <div class="d-flex align-items-center justify-content-start  mb-2">
                                      <?php if(!empty($product->name)): ?>
                                          <?php foreach (explode(" ", $product->name) as $key => $name): ?>
                                              <?php if($key == count(explode(" ", $product->name)) - 1): ?>
                                                  <h1 class="main-heading4">
                                                      <?php echo $name ?>
                                                  </h1>
                                              <?php else: ?>
                                                  <h1 class="main-heading3">
                                                      <?php echo $name ?> &nbsp;
                                                  </h1>
                                              <?php endif; ?>
                                          <?php endforeach; ?>
                                      <?php endif; ?>
                                  </div>
                              </a>
                              <p class="text text-ellipsis--4">
                                  <?php echo $product->description ?> <a href="product-details.php?id=<?php echo $product->id ?>" class="text-primary">Read More</a></p>
                              <div class="d-flex justify-content-center mt-3">
                                  <a href="checkout.php?id=<?php echo $product->id ?>" class="video-btn-sm mx-1">
                                      Buy
                                  </a>
                              </div>
                          </div>

                      </div>
                  <?php endif; ?>
          <?php endforeach; ?>
          <?php endif; ?>
      </div>
    </section>

    <div class="live-chat-btn">
      <img src="assets/images/live-chat.jpg" alt="" class="img-fluid">
    </div>
    <div class="live-chat live-chat2">

      <div class="chat-blink chat-blink2">
        <div class="container-chat">
          <div class="chatbox">
            <div class="top-bar">
              <div class="d-flex align-items-center">
                <div class="avatar">
                  <p class="mb-0 pb-0">V</p>
                </div>
                <div class="name text-white">Voldemort</div>
              </div>
              <div class="icons">
                <i class="bi bi-x-circle text-white close-chat close-chat2"></i>
              </div>
            </div>
            <div class="middle">

              <div class="voldemort">
                <div class="incoming">
                  <div class="bubble">Hi</div>
                  <div class="bubble">Hey, Father's Day is coming up..j</div>
                </div>
                <div class="outgoing ms-auto">
                  <div class="bubble ">Hello.</div>
                </div>
                <div class="incoming">

                  <div class="bubble">What are you getting.. Oh, oops sorry dude.</div>
                </div>
                <div class="outgoing ms-auto">
                  <div class="bubble ">Nah, it's cool.</div>
                  <div class="bubble">Well you should get your Dad a cologne. Here smell it. Oh wait! ...</div>
                </div>
                <div class="typing">
                  <div class="bubble">
                    <div class="ellipsis one"></div>
                    <div class="ellipsis two"></div>
                    <div class="ellipsis three"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottom-bar">
              <div class="chat">
                <input type="text" class="input" placeholder="Type a message..." />
                <button type="submit" class="button"><i class="bi bi-send"></i></button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- <div class="click-blink">
        click to Chat Live
    </div> -->
      <img src="assets/images/footer-teddy.png" alt="" class="chat-icon2" width="100">
    </div>
  </main>

<?php

include_once "includes/footer.php";

?>