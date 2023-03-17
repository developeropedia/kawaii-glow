var vid = document.getElementById("cute-video");
function playVid() {
  vid.play();
}

function pauseVid() {
  vid.pause();
}

$(".play-btn").on("click", function () {
  $(this).css("display", "none");
  $(".pause-btn").css("display", "block");

})
$(".pause-btn").on("click", function () {
  $(this).css("display", "none");
  $(".play-btn").css("display", "block");
})
$(".chat-icon").on("click", function () {
  $(".chat-blink").css("display", "block");
  $(".click-blink").css("display", "none");
})
$(".close-chat").on("click", function () {
  $(".chat-blink").css("display", "none");
  $(".click-blink").css("display", "block");
})
$(".live-chat-btn").on("click", function () {
  $(".live-chat2").css("opacity", "1");
  $(".live-chat2").css("right", "55px");
  $(".live-chat2").css("display", "block");
  $(this).css("opacity", "0");
  // $(".live-chat2").css(" z-index","100");
})
$(".close-chat2").on("click", function () {
  $(".live-chat2").css("opacity", "0");
  $(".live-chat2").css("right", "-400px");
  $(".live-chat-btn").css("opacity", "2")
  // $(".live-chat2").css(" z-index","0");
})