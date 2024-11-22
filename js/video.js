function nextVideoItem(){
    var actual= $(".item-video.active");
    var passed= $(".item-video.passed");
    var next= actual.next();
    if ( next.length > 0 ){
      next.addClass("active");
      passed.removeClass("passed").addClass("passed-out");
      actual.removeClass("active").addClass("passed");
      //retira o player de video
      if (actual.find("#player").length > 0){
        actual.find("#player").remove();
        actual.find("img").css("display", "block");
        actual.find(".video-video").removeClass("noafter");
      }
      //updateEventListeners();
    }
  }
  function previousVideoItem(){
    var actual= $(".item-video.active");
    var passed= $(".item-video.passed");
    var prev= actual.prev();
    if ( prev.length > 0){
      passed.prev().removeClass("passed-out").addClass("passed");
      passed.removeClass("passed");
      actual.removeClass("active");
      prev.addClass("active");
      //retira o player de video
      if (actual.find("#player").length > 0){
        actual.find("#player").remove();
        actual.find("img").css("display", "block");
        actual.find(".video-video").removeClass("noafter");
      }
      //updateEventListeners();
    }
  }
  
  
  
  updateEventListeners();
  var code;
  var flagYoutube = false;
  
  //ajusta a altura
  var a= $(".item-video.active")[0].clientHeight+75;
  $(".video-carousel-component-items").height(a);
  
  $( window ).resize(function() {
    //ajusta a altura depois de redimensionar a pagina
    a= $(".item-video.active")[0].clientHeight+75;
    $(".video-carousel-component-items").height(a);
  });
  
  
  function updateEventListeners(){
    $(".item-video").click(function(){
      if ($(this).hasClass("active")){
        
        if ( $(this).find(".video-video #player").length == 0){
          console.log("first time");
          //substitui imagem por video
          code= $(this).find(".video-video").data("video");
          var html= '<div id="player"></div>';
          //var html= '<div id="player"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'+code+'?rel=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe></div>';
          $(this).find(".video-video img").css("display", "none");
          $(this).find(".video-video").addClass("noafter embed-responsive embed-responsive-16by9");
          $(this).find(".video-video").append(html);
  
          if(!flagYoutube){
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            flagYoutube = true;
          }else{
            onYouTubeIframeAPIReady();
          }
        }
  
      }
      else if ($(this).hasClass("passed")) {
        previousVideoItem();
      }
      else{
        nextVideoItem();
      }
    });
  }
  
  
  
  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      // height: '360',
      // width: '640',
      videoId: code,
      playerVars: {rel: 0},
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }
  
  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    event.target.playVideo();
  }
  
  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
      // setTimeout(stopVideo, 6000);
      done = true;
    }
  }
  function stopVideo() {
    player.stopVideo();
  }