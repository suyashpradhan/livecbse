<?php
session_start();
if (isset($_GET['club'])) {
  $club = $_GET['club'];
} else {
  $club = 'club_18';
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="owl.carousel.min.css" />
  <link rel="stylesheet" href="owl.carousel.default.min.css" />
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
    <h1 class="section__header">Articles</h1>
    <div class="product-carousel owl-carousel owl-theme" id="articleCarousel">
    </div>

    <div class="box box_effect">
      <h1 class="tags__header">Filter by category / collection</h1>
      <div class="tags__div" id="tags">
      </div>
    </div>

    <h1 class="section__header">Quiz</h1>
    <div class="product-carousel owl-carousel owl-theme" id="quizCarousel">
      <div class="product">
        <div class="product-top">
          <div class="product-image" style="background-image: linear-gradient(to bottom, #ffffff00 0, #000 100%),url(&quot;https://www.livecbse.com/livecbse_site/cbse_360/assets/article/125834am07.jpg&quot;);background-size: cover;height: 200px;width: 100%;">
          </div>
          <div class="click"">
              <span class=" far fa-heart"></span>
          </div>
          <div class="inner_product">
            <h1 class="inner_productTitle">Article</h1>
            <p class="inner_productDescription">"How to grab attention with your design?"</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-top">
          <div class="product-image" style="background-image: linear-gradient(to bottom, #ffffff00 0, #000 100%),url(&quot;https://www.livecbse.com/livecbse_site/cbse_360/assets/article/125834am07.jpg&quot;);background-size: cover;height: 200px;width: 100%;">
          </div>
          <div class="click"">
              <span class=" far fa-heart"></span>
          </div>
          <div class="inner_product">
            <h1 class="inner_productTitle">Article</h1>
            <p class="inner_productDescription">"How to grab attention with your design?"</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-top">
          <div class="product-image" style="background-image: linear-gradient(to bottom, #ffffff00 0, #000 100%),url(&quot;https://www.livecbse.com/livecbse_site/cbse_360/assets/article/125834am07.jpg&quot;);background-size: cover;height: 200px;width: 100%;">
          </div>
          <div class="click"">
              <span class=" far fa-heart"></span>
          </div>
          <div class="inner_product">
            <h1 class="inner_productTitle">Article</h1>
            <p class="inner_productDescription">"How to grab attention with your design?"</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-top">
          <div class="product-image" style="background-image: linear-gradient(to bottom, #ffffff00 0, #000 100%),url(&quot;https://www.livecbse.com/livecbse_site/cbse_360/assets/article/125834am07.jpg&quot;);background-size: cover;height: 200px;width: 100%;">
          </div>
          <div class="click"">
              <span class=" far fa-heart"></span>
          </div>
          <div class="inner_product">
            <h1 class="inner_productTitle">Article</h1>
            <p class="inner_productDescription">"How to grab attention with your design?"</p>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-top">
          <div class="product-image" style="background-image: linear-gradient(to bottom, #ffffff00 0, #000 100%),url(&quot;https://www.livecbse.com/livecbse_site/cbse_360/assets/article/125834am07.jpg&quot;);background-size: cover;height: 200px;width: 100%;">
          </div>
          <div class="click"">
              <span class=" far fa-heart"></span>
          </div>
          <div class="inner_product">
            <h1 class="inner_productTitle">Article</h1>
            <p class="inner_productDescription">"How to grab attention with your design?"</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>
  <footer>
    <div id="footer_sub">
      <ul class="footer_sub-list">
        <li> <a href="">About Us </a> </li>
        <li> <a href=""> Franchise </a></li>
        <li> <a href=""> Join Us</a></li>
        <li> <a href="">© 2015 All Rights Reserved with domain Edutech Pvt. Ltd.<br> <img src="livecbse_logo.png" alt="" height="30"></a>
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
            <iframe width="727" height="409" src="https://www.youtube.com/embed/9ylj9NR0Lcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <iframe width="727" height="409" src="https://www.youtube.com/embed/EFafSYg-PkI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <iframe width="727" height="409" src="https://www.youtube.com/embed/5WohQijapeU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <script>
    $(document).ready(function() {
          var video_carousel = $("#videoCarousel").owlCarousel({
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

          var article_carousel = $("#articleCarousel").owlCarousel({
            loop: true,
            margin: 10,
            responsive: {
              1600: {
                items: 5,
              },
              1200: {
                items: 4,
              },
              800: {
                items: 3,
              },
              600: {
                items: 2,
              },
              300: {
                items: 1,
              }
            }
          });

          var quiz_carousel = $("#quizCarousel").owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            responsive: {
              1600: {
                items: 5,
              },
              1200: {
                items: 4,
              },
              800: {
                items: 3,
              },
              600: {
                items: 2,
              },
              300: {
                items: 1,
              }
            }
          });
        };

        $.post("../app_livecbse/student_panel_mobile.php", {
          user: '<?php echo $_SESSION['username']; ?>',
          club: '<?php if (isset($club)) {
                    echo $club;
                  } else {
                    echo 'club_18';
                  } ?> '
        }).done(
          function(post_data) {
            console.log(post_data);
            var clubs = []; //Clubs  
            var topics = []; //Topics 
            var videos = []; //Videos
            var articles = []; //Articles
            var tags = []; //Tags
            var quiz = []; //Quiz   
            var data = JSON.parse(post_data);

            $.each(data.clubs, function(key, data) {
              clubs.push("<li><a href='?club=" + data.id + "'>" + data.name + "</a></li>");
            });
            $('#clubNav').append(clubs);

            //Insert Topics
            $.each(data.topics, function(key, data) {
              topics.push(`<option value='${data.topic_id}'>${data.topic_name}</option>`);
            });
            $('#topics').append(topics);

            //Insert Videos
            $.each(data.videos, function(key, data) {
              var video_link = "https://www.youtube.com/embed/" + data.video_key;
              video_carousel.trigger('add.owl.carousel', [jQuery('<div><iframe src="' + video_link + '"></iframe></div>')]);
            });

            //Insert Articles
            $.each(data.articles, function(key, data) {
              var icon = data.icon;
              var title = data.name;
              article_carousel.trigger('add.owl.carousel', [jQuery('<div class=\'product\'><div class=\'product-top\'><div class=\'product-image\' style=\'background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #181818 100%),url("' + data.icon + '");background-size: contain;height: 200px;width: auto\' /><div class=\'click\'><span class=\'far fa-heart\' onclick=\'set_fav("' + data.article_id + '","' + data.status + '")\'></span></div><div class=\'inner_product\'><h1 class=\'inner_productTitle\'>Article</h1><p class=\'inner_productDescription\'>"' + data.name + '"</p></div></div></div></div>')]);
            });

            //Insert Quiz
            $.each(data.quiz, function(key, data) {
              quiz_carousel.trigger('add.owl.carousel', [jQuery('<div class=\'product\'><div class=\'product-top\'><div class=\'product-image\' style=\'background-color:#f7f5c4fa ;height: 200px;width: auto\'><div class=\'product_info\'><h1>Digital Design Quiz</h1><div class=\'div_start\'><a href=\'#\'>Start Quiz</a></div></div></div></div></div>')]);
            });

            //Insert Tags
            $.each(data.tags, function(key, data) {
              tags.push(`
        <div class="tags__divInner" id="${data.tag_id}">
        <h1>${data.tag_name}</h1>
        <h1><i class="fas fa-times-circle close__icon"></i></h1>
      </div>      
        `);
            });
            $('#tags').append(tags);
            video_carousel.trigger('refresh.owl.carousel');
            article_carousel.trigger('refresh.owl.carousel');
            quiz_carousel.trigger('refresh.owl.carousel');
          });
  </script>

  <script>
    function set_fav(p, q) {
      $.post("../app_livecbse/student_pin.php", {
        user_id: '<?php echo $_SESSION['username']; ?>',
        topic_id: $('#topics').val(),
        type: 'article',
        status: q,
        activity_id: p,
      }).done(
        function(post_data) {
          var data = JSON.parse(post_data);
          if (data.response_status == 'Submitted') {
            if (q == 1) {
              alert('Added to fav.');
            }
            if (q == 0) {
              alert('Removed from Fav.');
            }
          }
        });
    }
  </script>
</body>

</html>