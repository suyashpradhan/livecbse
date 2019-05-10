<?php 
session_start();
if(isset($_GET['club'])){
  $club=$_GET['club'];
}
else{
  $club='club_18';
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="owl.carousel.min.css" />
  <link rel="stylesheet" href="owl.carousel.default.min.css" />
  <link rel="stylesheet" href="slick.css" />
  <link rel="stylesheet" href="slick-theme.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <script>
    //if performance drops $.holdReady( true );
    //replace getJSON with post and student_panel_mobile.json with .php when live
    $.holdReady( true );
    $.post("../app_livecbse/student_panel_mobile.php", {
      user: '<?php echo $_SESSION['username'];?>',
      club: '<?php if(isset($club)){echo $club;}else{echo 'club_18';}?>'
    }).done(
      function (post_data) {
        console.log(post_data);
        var clubs = []; //Clubs  
        var topics = []; //Topics 
        var videos = []; //Videos
        var articles = []; //Articles
        var tags = []; //Tags
        var quiz = []; //Quiz   
        var data = JSON.parse(post_data)
        //console.log(data.clubs);
        //Insert Clubs
        $.each(data.clubs, function (key, data) {
          clubs.push("<li><a href='?club=" + data.id + "'>" + data.name + "</a></li>");
        });
        $('#clubNav').append(clubs);
        //Insert Topics
        $.each(data.topics, function (key, data) {
          topics.push(`<option value='${data.topic_id}'>${data.topic_name}</option>`);
        });
        $('#topics').append(topics);
        //Insert Videos
        $.each(data.videos, function (key, data) {
          videos.push(`<div><iframe src='https://www.youtube.com/embed/${data.video_key}'></iframe></div>`);
        });
        $('#videoCarousel').append(videos);
        //Insert Articles
        $.each(data.articles, function (key, data) {
          articles.push(`
        <div class='product'>
          <div class='product-top'>
            <div class='product-image'
              style='background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #181818 100%),url(${data.icon});background-size: contain;height: 200px;width: auto' />
            <div class='inner_product'>
              <h1 class='inner_productTitle'>Article</h1>
              <p class='inner_productDescription'>${data.name}</p>
            </div>
          </div>
        </div>
      </div>
        `);
        article_slider();
        });
        $('#articleCarousel').append(articles);
        //Insert Tags
        $.each(data.tags, function (key, data) {
          tags.push(`
        <div class="tags__divInner" id="${data.tag_id}">
        <h1>${data.tag_name}</h1>
        <h1><i class="fas fa-times-circle close__icon"></i></h1>
      </div>      
        `);
        });
        $('#tags').append(tags);
        //Insert Quiz
        $.each(data.quiz, function (key, data) {
          quiz.push(`              
          ${data.quiz_link}      
        `);
        });
        $('#quizCarousel').append(quiz);
      });
      $.holdReady( true );
    // if performance drops $.holdReady( false );
  </script>
</head>

<body>
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="#">
          <img alt="" height="35px" src="livecbse_logo.png" />
        </a>
      </div>
      <nav>
        <div class="nav-mobile">
          <a href="#!" id="nav-toggle"><span></span></a>
        </div>
        <ul class="nav-list">
          <li>
            <a href=""> <i class="fas fa-home nav-listIcons"></i> Home</a>
          </li>
          <li>
            <a href="#!"><i class="fas fa-download nav-listIcons"></i> Downloads</a>
          </li>
          <li>
            <a href="#!"><i class="fas fa-question nav-listIcons"></i> Ask Experts</a>
          </li>
          <li>
            <a href="#!"> <i class="fas fa-heart nav-listIcons"></i> Favourites</a>
          </li>
          <li>
            <a href="#!">Select Club</a>
            <ul class="nav-dropdown" id="clubNav">
  
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <div class="wrapper">
    <div class="sel sel--sub">
      <select id="topics">
        <option value="" disabled>Select Topic</option>

      </select>
    </div>
  </div>
  <div class="owl-carousel owl-theme" id="videoCarousel">
  </div>
  <div class="wrapper">
    <section class="sections">
      <h1 class="section__header">Articles</h1>
      <div class="product-carousel" id="articleCarousel">
        
  </div>
  <div class="box box_effect">
    <h1 class="tags__header">Filter by category / collection</h1>
    <div class="tags__div" id="tags">
    </div>
  </div>
  </section>
  <section class="sections">
    <h1 class="section__header">Quiz</h1>
    <div class="product-carousel" id="quizCarousel">
    
    </div>
  </section>
  </div>
  <footer>
    <div id="footer">
      <div class="footer-main">
        <div class="footer_col">
          <i class="fas fa-map-marker footerIcons"></i>
          <h1 class="footerHeader">Address</h1>
          <p class="footerDescription">472-A, Talwandi, Near Modern School,<br>Kota, Rajasthan.<br>Pin code -
            324005</p>
        </div>
        <div class="footer_col">
          <i class="fas fa-phone footerIcons"></i>
          <h1 class="footerHeader">Let's Call</h1>
          <p class="footerDescription">0744-2407128<br>+91 9571010999</p>
        </div>
        <div class="footer_col">
          <i class="far fa-envelope footerIcons"></i>
          <h1 class="footerHeader">Support</h1>
          <p class="footerDescription">contact@livecbse.com</p>
        </div>
      </div>
    </div>
    <div id="footer_sub">
      <ul class="footer_sub-list">
        <li> <a href="">About Us </a> </li>
        <li> <a href=""> Franchise </a></li>
        <li> <a href=""> Join Us</a></li>
        <li> <a href="">© 2015 All Rights Reserved with domain Edutech Pvt. Ltd.<br> <img src="livecbse_logo.png" alt=""
              height="30"></a>
        </li>
        <li> <a href=""> Privacy Policy</a></li>
        <li> <a href="">Disclaimer</a></li>
      </ul>
    </div>
  </footer>
  <div class="modal fade" id="yt-modal" tabindex="-1" role="dialog" aria-labelledby="yt-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">MySql Crash Course
          </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="727" height="409" src="https://www.youtube.com/embed/9ylj9NR0Lcg" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="yt-modal_2" tabindex="-1" role="dialog" aria-labelledby="yt-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">CSS Grid Crash Course
          </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="727" height="409" src="https://www.youtube.com/embed/EFafSYg-PkI" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="yt-modal_3" tabindex="-1" role="dialog" aria-labelledby="yt-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Javascript Frameworks, PHP In 2019 , Web Development Q&A
          </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="727" height="409" src="https://www.youtube.com/embed/5WohQijapeU" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="owl.carousel.js"></script>
  <script src="slick.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  
  <script>
    (function ($) {
      $(function () {
        $("nav ul li > a:not(:only-child)").click(function (e) {
          $(this)
            .siblings(".nav-dropdown")
            .toggle();
          $(".nav-dropdown")
            .not($(this).siblings())
            .hide();
          e.stopPropagation();
        });
        $("html").click(function () {
          $(".nav-dropdown").hide();
        });
      });
      document
        .querySelector("#nav-toggle")
        .addEventListener("click", function () {
          this.classList.toggle("active");
        });
      $("#nav-toggle").click(function () {
        $("nav ul").toggle();
      });
    })(jQuery);
  </script>

<script>
    $('.sel').each(function () {
      $(this).children('select').css('display', 'none');

      var $current = $(this);

      $(this).find('option').each(function (i) {
        if (i == 0) {
          $current.prepend($('<div>', {
            class: $current.attr('class').replace(/sel/g, 'sel__box')
          }));

          var placeholder = $(this).text();
          $current.prepend($('<span>', {
            class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
            text: placeholder,
            'data-placeholder': placeholder
          }));

          return;
        }

        $current.children('div').append($('<span>', {
          class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
          text: $(this).text()
        }));
      });
    });

    $('.sel').click(function () {
      $(this).toggleClass('active');
    });

    $('.sel__box__options').click(function () {
      var txt = $(this).text();
      var index = $(this).index();

      $(this).siblings('.sel__box__options').removeClass('selected');
      $(this).addClass('selected');

      var $currentSel = $(this).closest('.sel');
      $currentSel.children('.sel__placeholder').text(txt);
      $currentSel.children('select').prop('selectedIndex', index + 1);
    });
  </script>
  <script>
    $("#videoCarousel").owlCarousel({
      center: true,
      loop: true,
      margin: 10,
      responsive: {
        1200: {
          items: 2,
        },
        800: {
          items: 1,
        },
        600: {
          items: 1,
        },
        300: {
          items: 1,
        }
      }
    });
  </script>

  <script>
    function article_slider() {
    $(".product-carousel").slick({
      lazyLoad: "ondemand",
      slidesToShow: 4,
      slidesToScroll: 1,
      nextArrow: '<i class="arrow right">',
      prevArrow: '<i class="arrow left">',
      infinite: true,
      responsive: [{
          breakpoint: 3000,
          settings: {
            slidesToShow: 7,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 2500,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 2000,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1500,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    }
  </script>

</body>

</html>