<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    meta tags
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="refresh" content="2"> --}}

    <!--
    title tag
    -->
    <title>BraiTech</title>

    <!--
    favicon
    -->
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">

    <!--
    stylesheets
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/overlay-scrollbars.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <style>
        #container {
            width: 1200px;
            margin: 20px auto;
        }
        
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 500px;
        }
        
        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
</head>

<body>

    <div class="main-wrapper">

        <!--
    navigation - start
    -->
        <div class="navigation navigation-1">
            <div class="navigation-wrapper">
                <div class="container">
                    <div class="navigation-inner">
                        <div class="navigation-logo">
                            <a class="logo" href="index.html">
                                <img src="assets/images/logo_braitech.png" alt="orions-logo">
                            </a>
                            <a class="logo-white" href="index.html">
                                <img src="assets/images/logo_braitech.png" alt="orions-logo">
                            </a>
                        </div>
                        <div class="navigation-menu">
                            <div class="mobile-header">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo_braitech.png" alt="image">
                                    </a>
                                </div>
                                <ul>
                                    <li class="close-button">
                                        <i class="fas fa-times"></i>
                                    </li>
                                </ul>
                            </div>
                            <ul class="parent">
                                <li>
                                    <a href="/" class="link-underline link-underline-1">
                                        <span>Back</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="social">
                                <h6>Follow</h6>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="background-pattern">
                                <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                                <div class="background-pattern-gradient"></div>
                            </div>
                        </div>
                        <div class="navigation-bar">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    navigation - end
    -->


    @yield('content')

     <!--
    footer - start
    -->
    <footer class="footer">
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="footer-row">
                            <div class="footer-detail">
                                <a href="#">
                                    <img src="assets/images/logo_braitech.png" alt="footer-logo">
                                </a>
                                <p class="c-grey-1">BraiTech yaitu sebuah teknologi yang bertujuan membantu tunanetra untuk mengetik sebuah teks dengan lebih mudah dan efisien.</p>
                                <div class="links">
                                    <a class="link-underline" href="mailto:hello@orions.com">
                                        <span>braitech20@gmail.com</span>
                                    </a>
                                    <a class="link-underline" href="tel:+1-234-567-890">
                                        <span>+62 8952 1441 520</span>
                                    </a>
                                </div>
                            </div>
                            <div class="footer-list footer-social social-gradient">
                                <h6>Follow</h6>
                                <ul>
                                    <li class="twitter">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-facebook"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-linkedin-in"></i>
                                            <span>Linkedin</span>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#" class="link-underline">
                                            <i class="fab fa-youtube"></i>
                                            <span>Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-list">
                                <h6>Menu</h6>
                                <ul>
                                    <li>
                                        <a href="about.html" class="link-underline">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="link-underline">
                                            <span>Features</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="features-1.html" class="link-underline">
                                            <span>Tutorial</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-1.html" class="link-underline">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="footer-copyright c-grey-1">
                            <br><h6>&copy; braitech2022</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-pattern" style="background-image: url(assets/images/patterns/pattern-1.jpg)"></div>
        </div>
    </footer>
    <!--
    footer - end
    -->

    </div>

    <!--
    scripts
    -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=zPTed1H5"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#txt'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
    function getAudio(){
        var txt=jQuery('#txt').val()
        jQuery.ajax({
            url:'/tts',
            type:'post',
            data:'txt='+txt,
            success:function(result){
                jQuery('#player').html(result);
            }
        });
    }
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/overlay-scrollbars.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/main.js"></script>
    

</body>

</html>

