<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="slick.css" />
    <link rel="stylesheet" href="slick-theme.css" />
    <link rel="stylesheet" href="slick.css" />
    <link rel="stylesheet" href="slick-theme.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.4.0.js"
        integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="slick.min.js"></script>
    <style>
        .card-out {
            height: 200px;
            width: 100%;
            position: relative;
        }

        .card-bg {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-size: cover;
        }

        .card-title {
            position: absolute;
            bottom: 10px;
            left: 10px;
        }
    </style>

</head>

<body>
    <div class="top-posts-slider">

        <div class="loadspan"></div>
        <div class="product-carousel" id="articleCarousel">
    </div>
    </div>

    <script>
     function top_posts(el) {
            var reqUrl = 'https://jsonplaceholder.typicode.com/users';
            el.children('.loadspan').html('<i class="fa fa-circle-o-notch fa-spin fa-fw" style="padding: 0;"></i>');
            $.ajax({
                url: reqUrl,
                dataType: 'json',
            }).done(function (data) {
                el.children('.loadspan').hide();
                if (data != "") {
                    console.log(data);
                    $.each(data, function (index) {
                        var output = `
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
      </div>`;
                        el.append(output);
                    });
                    top_slider_init();
                } else {
                    el.children('.loadspan').html(
                        '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>');
                }

            }).fail(function (jqXHR, textStatus) {
                el.children('.loadspan').html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>');
                console.log("Request failed: " + textStatus);
            });
            return false;
        }

        var el = $('.top-posts-slider');
        top_posts(el);


        function top_slider_init() {
            $('.top-posts-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                speed: 300,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                dots: false,
                arrows: false,
            });
        }
    </script>
</body>

</html>