<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Yohanes Mikhael </title>
        <link rel="website icon" type="png" href="{{ asset('assets/img/logo1.png') }}">

        <!-- CSS-->
        <link rel="stylesheet" href="{{ asset('assets/css/web.css') }}">

        <!-- Box icons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- AOS-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    </head>
    <body>
        <header class="header">
            <a onclick="back()" class="back-link"><i class='bx bx-arrow-back'></i> Back </a>
            <a onclick="back()" class="back-link2"><i class='bx bx-arrow-back'></i></a>
            <h1 class="header-title">Website <span> Project </span> </h1>
        </header>

        <section>
            <div class="android" id="android">
                <div class="box-container">
                    <div class="blog-post" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="blog-post__img">
                            <img src="{{ asset('assets/img/portofolio.png') }}">
                        </div>
                        <div class="blog-post__info">
                            <div class="blog-post__date">
                                <span class="date">March 2023</span>
                            </div>
                            <h1 class="blog-post__title">My Portofolio</h1>
                            <p class="blog-post__text">
                            The website that what are you looking at now is my portfolio website. 
                            Explore more to know anything about my portfolio.
                            </p>
                            <a href="/" class="btn">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- scroll reveal-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!-- AOS Js-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- Custom JS-->
        <script src="{{ asset('assets/js/detail.js')  }}"></script>

        <!-- tombol back-->
        <script>
            function back() {
                window.history.back();
            }
        </script>
        
    </body>
</html>