// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
// after the API code downloads.
var playerList = [];

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

$(document).ready(function () {
  $(document).on("click", ".btn-play", function (event) {
    event.preventDefault();
    for (var i = 0; i < playerList.length; i++) {
      playerList[i].stopVideo();
    }
    targetDiv = $(this).parent(".box-video");
    videoId = $(this).attr("data-video-id");
    var player;
    player = new YT.Player(targetDiv[0], {
      // height: '390',
      // width: '1006',
      videoId: videoId,
      playerVars: {
        playsinline: 1,
      },
      events: {
        onReady: onPlayerReady,
        onStateChange: function (event) {
          var currentUrl = event.target.getVideoUrl();
          if (event.data == YT.PlayerState.PLAYING) {
            for (var i = 0; i < playerList.length; i++) {
              if (currentUrl != playerList[i].getVideoUrl()) {
                playerList[i].stopVideo();
              }
            }
          }
        },
      },
    });
    playerList.push(player);
    // $(this).remove();
  });

  var viewportWidth = $(window).width();
  $(window).on("resize", function () {
    viewportWidth = $(window).width();
  });

  const lazyContent = new LazyLoad({
    // use_native: true // <-- there you go
  });

    // menu-scroll
    $(window).scroll(function () {
      var yTop = $(this).scrollTop();
      if (viewportWidth > 1023) {
        if (yTop != 0) {
          $("header").addClass("scroll");
          $(".block-hide").addClass("block-hide-small");
        } else {
          $("header").removeClass("scroll");
          $(".block-hide").removeClass("block-hide-small");
        }
      }
    });

    //show menu
    $('header .toggle-menu').on('click', function() {
      $('header .menu').addClass('menu-show');
      $('header .overflow').addClass('overflow-show');
      $('body').css('overflow', 'hidden');      
    });

    $('header .close').on('click', function() {
      $('header .menu').removeClass('menu-show');
      $('header .overflow').removeClass('overflow-show');
      $('body').css('overflow', 'unset');      
    });

      //accordion menu footer
  if (viewportWidth < 768) {
    $("footer .title-menu-wrap").on("click", function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).next(".menu").slideUp();
        $(this).removeClass("img-rotate");
      } else {
        $("footer .title-menu-wrap").removeClass("active");
        $(this).addClass("active");
        $("footer .menu").slideUp();
        $("footer .title-menu-wrap").removeClass("img-rotate");
        $(this).next(".menu").slideDown();
        $(this).addClass("img-rotate");
      }
    });
  }

  // slide discovery
  $('.discovery .slide').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    arrows: false,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
      }
    },
    ]
  });

  // slide feelings
  $('.feelings .slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,

  });

  if ( $('.slick-dots li').length < 2 ) {
    $('.slick-dots').css('display', 'none')
  };

  // submit search
  var $el = $(".form-search");
  $el.click(function(e){
    e.stopPropagation();
    $el.addClass('form-search-show');
  });
  $(document).on('click',function(e){
    if(($(e.target) != $el) && ($el.hasClass('form-search-show'))){
        $el.removeClass('form-search-show');
    }
  });
  $('.icon-submit').on('click', function() {
    $('#search-form').submit();
  });

  //tab video
  $('.describe .nav-tabs .nav-item:first-child .nav-link').addClass('active');
  $('.describe .tab-content .tab-pane:first-child').addClass('show active');

  // masonry
  $('.members-wrap, .row-news').masonry({
    itemSelector: '.member, .col-news-child',
  });

  // handle events
  var slideGallerys = $(".discovery-video .slide-inner");
  var videoPopup = $(".video-modal");

  slideGallerys.on("click", function () {
    var datasrc = $(this).children(".image").attr("data-src");
    var linkYoutube = "https://www.youtube.com/embed/"
    videoPopup.children("iframe").attr("src", linkYoutube.concat(datasrc));
  });
  
  //load-more post
  if (viewportWidth > 1440) {
    if ($('.post-all .all-post-wrap').children().length <= 12){
      $("#load-more").css('display', 'none');
    };
    $(".post-all .all-post-wrap .post-item").slice(0, 12).show();
    $("#load-more").on('click', function (e) {
        e.preventDefault();
        $(".post-all .all-post-wrap .post-item:hidden").slice(0, 4).slideDown();
        if ($(".post-all .all-post-wrap .post-item:hidden").length == 0) {
            $("#load-more").fadeOut('slow');
        }
    });
  }
  else if (viewportWidth > 767 && viewportWidth < 1441) {
    if ($('.post-all .all-post-wrap').children().length <= 9){
      $("#load-more").css('display', 'none');
    };
    $(".post-all .all-post-wrap .post-item").slice(0, 9).show();
    $("#load-more").on('click', function (e) {
        e.preventDefault();
        $(".post-all .all-post-wrap .post-item:hidden").slice(0, 3).slideDown();
        if ($(".post-all .all-post-wrap .post-item:hidden").length == 0) {
            $("#load-more").fadeOut('slow');
        }
    });
  }
  else {
    if ($('.post-all .all-post-wrap').children().length <= 5){
      $("#load-more").css('display', 'none');
    };
    $(".post-all .all-post-wrap .post-item").slice(0, 5).show();
    $("#load-more").on('click', function (e) {
        e.preventDefault();
        $(".post-all .all-post-wrap .post-item:hidden").slice(0, 1).slideDown();
        if ($(".post-all .all-post-wrap .post-item:hidden").length == 0) {
            $("#load-more").fadeOut('slow');
        }
    });
  }

  if (viewportWidth >1023) {
    $('.scrollreveal-bottom').attr({
        "data-aos": "fade-up",    
    });
    $('.scrollreveal-top').attr({
        "data-aos": "fade-down",    
    });
    $('.scrollreveal-right').attr({
        "data-aos": "fade-left",    
    });
    $('.scrollreveal-left').attr({
        "data-aos": "fade-right",    
    });
    $('.scrollreveal-scale').attr({
        "data-aos": "zoom-in",    
    });
    $('.scrollreveal-interval').attr({
        "data-aos": "zoom-in",    
    });
    $('.scrollreveal-flip').attr({
        "data-aos": "flip-left",    
    });
    AOS.init({
        duration: 1500,
        once: true,
        delay: 400
    });
}

});
