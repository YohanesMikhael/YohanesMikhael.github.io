<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Yohanes Mikhael </title>
        <link rel="website icon" type="png" href="assets/img/logo1.png">

        <!-- Box icons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <!-- CSS-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


        <!-- Devicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    </head>


    <body>
        <section id="loader">
            <div class="spinner-widget">
                <span class="loading">Loading ....</span>
                <div class="spinner" style="--var:0; z-index: 2"></div>
                <div class="spinner" style="--var:1; z-index: 3"></div>
                <div class="spinner" style="--var:2; z-index: 4"></div>
                <div class="spinner" style="--var:3; z-index: 5"></div>
                <div class="spinner" style="--var:4; z-index: 4"></div>
                <div class="spinner" style="--var:5; z-index: 3"></div>
                <div class="spinner" style="--var:6; z-index: 2"></div>
                <div class="spinner" style="--var:7; z-index: 1"></div>
                <div class="spinner" style="--var:8; z-index: 1"></div>
                <div class="spinner" style="--var:9; z-index: 1"></div>
                <div class="spinner" style="--var:10; z-index: 1"></div>
                <div class="spinner" style="--var:11; z-index: 1"></div>
            </div>
        </section>

        <!-- Header-->

        <header class="header">
            <a href="#" class="logo">Yohanes Mikhael</a>

            <i class='bx bx-menu-alt-right' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#home" class="active" >Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#portofolio">Portofolio</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>


        <!-- Home Section-->
        <section class="home" id="home">
            <div class="home-content">
                <h3> Hello, It's Me </h3>
                <h1> Yohanes Mikhael </h1>
                <h3> And I'm a <span class="multiple-text"> </span></h3>

                <div class="social-media">
                    @foreach($sosmed as $s)
                        <a href="{{ $s -> Link }}"><i class='{{ $s -> Icon }}'></i></a>
                    @endforeach
                </div>

                <a href="{{ asset('assets/CV_Yohanes Mikhael.pdf') }}" class="btn" download> Download CV</a>
            </div>

            @foreach($home as $h)
                <div class="home-img">
                    <img src="{{ asset( 'storage/' . $h->Profil_1) }}" alt="">
                </div>
            @endforeach
        </section>


        <!-- About Section-->
        <section class="about" id="about">
            @foreach($home as $h)
                <div class="about-img">
                    <img src="{{ asset( 'storage/' . $h->Profil_2) }}" alt="">
                </div>

                <div class="about-content">
                    <h2 class="heading">
                        About <span> Me </span>
                    </h2>
                    <h3> Web Programmer </h3>
                    <p> 
                        {{ $h -> About_me }} 
                    </p>
                </div>
            @endforeach
        </section>


        <!-- Skills Section-->
        <section class="skills" id="skills">
            <h2 class="heading">
                My <span> Skills </span>
            </h2>

            <h3 class="animate"> <span> Programming Language & Database </span> 

            <div class="logo-container">
                <ul>
                    @foreach($language as $l)
                        <li>
                            <img src="{{ asset( 'storage/' . $l->Logo_1) }}" alt="">
                            <img src="{{ asset( 'storage/' . $l->Logo_2) }}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>

            <h3 class="animate"> <span> Framework, Library & Tools </span> 

            <div class="logo-container">
                <ul>
                    @foreach($framework as $f)
                        <li>
                            <img src="{{ asset( 'storage/' . $f->Logo_1) }}" alt="">
                            <img src="{{ asset( 'storage/' . $f->Logo_2) }}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>


        <!-- Portofolio Section-->
        <section class="portofolio" id="portofolio">
            <h2 class="heading">
                My <span> Portofolio </span>
            </h2>

            <div class="portofolio-container">
                <div class="portofolio-box">
                    <i class='bx bx-code-alt'></i>
                    <h3> Web Projects </h3>
                    <p> in this menu there are several website projects that I have completed. 
                        Click the read more button to view the project </p>
                    <a href="/website" class="btn" > Read More </a>
                </div>

                <div class="portofolio-box">
                    <i class='bx bx-mobile-alt'></i>
                    <h3> Mobile Projects </h3>
                    <p> in this menu there are several Mobile projects that I have completed. 
                        Click the read more button to view the project </p>
                    <a href="/mobile" class="btn" > Read More </a>
                </div>

                <!-- <div class="portofolio-box">
                    <i class="devicon-arduino-plain"></i>
                    <h3> Mobile Projects </h3>
                    <p> Lorem ipsum dolor sit, amet consectetur 
                        adipisicing elit. Velit, vero. </p>
                    <a href="404.html" class="btn" > Read More </a>
                </div> -->
            </div>
        </section>


        <!-- Contact Section-->
        <section class="contact" id="contact">
            <h2 class="heading">
                Contact <span> Me! </span>
            </h2>

            <form action="/feedback" method="post">
                @csrf
                <div class="input-box">
                    <input class= "feedback" type="text" name="Nama" placeholder="Full Name" >
                    <input class= "feedback" type="email" name="Email" placeholder="Email Address">
                    <input class= "feedback" type="number" name="Telp" placeholder="Phone Number">
                </div>
                <textarea name="Pesan" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </section>


        <!-- Footer-->
        <footer class="footer">
            <div class="footer-text">
                <p>Copyright &copy; 2023 by Yohanes Mikhael</p>
            </div>

            <div class="footer-iconTop">
                <a href="#home"><i class='bx bxs-up-arrow'></i></a>
            </div>
        </footer>



        <!-- scroll reveal-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!-- typed js-->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script type="text/javascript" > 
            var loader 
            function loadNow(opacity) {
                if(opacity <= 0) {
                    displayContent();
                }
                else {
                    loader.style.opacity = opacity;
                    window.setTimeout(function() {
                        loadNow(opacity - 0.05)
                    }, 150);
                }
            }
            


            function displayContent() {
                loader.style.display = 'none';
                document.getElementById('header').style.display = 'block';
            }

            document.addEventListener("DOMContentLoaded", function() {
                loader = document.getElementById('loader');
                loadNow(1);
            })
        </script>

        <!-- Custom JS-->
        <script src="{{ asset('assets/js/script.js')  }}"></script>
    </body>
</html>