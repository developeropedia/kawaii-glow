<?php

$active = "home";

include_once "includes/header.php";

?>

  <main>
    <section class="video-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center mt-3 mb-2">
              <h1 class="main-heading">
                  <?php $title = explode(" ", getSettings("title")); ?>
                <?php echo isset($title[0]) && !empty($title[0]) ? $title[0] : '' ?> &nbsp;
              </h1>
              <h1 class="main-heading2">
                  <?php echo isset($title[1]) && !empty($title[1]) ? $title[1] : '' ?> &nbsp;
              </h1>
            </div>
          </div>
          <div class="col-lg-10 mx-auto">
            <div class="cute-video-div">
              <video width="100%" class="cute-video" id="cute-video">
                <source src="assets/images/<?php echo getSettings('home_video') ?>"
                  type="video/mp4">
              </video>
              <div class="play-btn" onclick="playVid()">
              </div>
              <div class="pause-btn" onclick="pauseVid()">

              </div>
            </div>

          </div>
          <div class="col-lg-7 my-5 mx-auto">
            <div class="d-flex justify-content-around align-items-center">
              <button class="video-btn mx-1">
                START
              </button>
              <button onclick="location.href = 'product.php'" class="video-btn2 mx-1">
                Buy now
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="live-chat">

      <div class="chat-blink">
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
                <i class="bi bi-x-circle text-white close-chat"></i>
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
      <div class="click-blink">
        click to Chat Live
      </div>
      <img src="assets/images/footer-teddy.png" alt="" class="chat-icon" width="100">
    </div>
  </main>

<?php

include_once "includes/footer.php";

?>