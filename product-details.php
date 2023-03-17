<?php

$active = "products";

include_once "includes/header.php";

if(!isset($_GET['id'])) {
    redirect("index.php");
}

$product = findById("products", $_GET['id']);

?>

  <main>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center mt-4">
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
          </div>
        </div>
        <div class="row justify-content-center pt-3">

          <div class="col-lg-6 order-lg-1 order-2 mb-3 d-flex align-items-center justify-content-center flex-column ">

            <p class="text"><?php echo $product->description ?></p>

            <div class="d-flex justify-content-center mt-3">
              <a href="checkout.php?id=<?php echo $product->id ?>" class="video-btn-sm mx-1">
                Buy
              </a>
            </div>
          </div>
          <div class="col-lg-5 order-lg-2 order-1  mb-3">
            <div class="product-img">
              <img src="assets/images/<?php echo $product->img ?>" alt="" class="">
            </div>

          </div>


        </div>

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