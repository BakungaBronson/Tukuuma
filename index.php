<?php include_once 'assets/includes/header.php'; ?>
<main class="">
    <h1 class="variation">Welcome To Tukuuma</h1>
    <section class="landing" id="gallery" style="padding: 0;">
        <div id="carousel" class="carousel slide carousel-fade text-center" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item  active">
                        <!-- 
                        If you need more browser support use https://scottjehl.github.io/picturefill/
                        If a picture looks blurry on a retina device you can add a high resolution like this
                        <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">
    
                        What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                            -->
                        <picture>
                            <source srcset="images/responsive/logo-2000X900.png" media="(min-width: 1400px)">
                            <source srcset="images/responsive/logo-1400X900.png" media="(min-width: 769px)">
                            <source srcset="images/responsive/logo-800X900.png" media="(min-width: 577px)">
                            <img srcset="images/responsive/logo-800X900.png" alt="responsive image" class="d-block img-fluid m-auto">
                        </picture>

                        <div class="carousel-caption">
                        </div>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item ">
                        <picture>
                            <source srcset="images/responsive/ceo-2000X900.jpg" media="(min-width: 1400px)">
                            <source srcset="images/responsive/ceo-1400X900.jpg" media="(min-width: 769px)">
                            <source srcset="images/responsive/ceo-800X900.jpg" media="(min-width: 577px)">
                            <img srcset="images/responsive/ceo-800X900.jpg" alt="responsive image" class="d-block img-fluid m-auto">
                        </picture>

                        <div class="carousel-caption justify-content-center align-items-center">
                        </div>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item ">
                        <picture>
                            <source srcset="images/responsive/cleaning-2000X900.jpg" media="(min-width: 1400px)">
                            <source srcset="images/responsive/cleaning-1400X900.jpg" media="(min-width: 769px)">
                            <source srcset="images/responsive/cleaning-800X900.jpg" media="(min-width: 577px)">
                            <img srcset="images/responsive/cleaning-800X900.jpg" alt="responsive image" class="d-block img-fluid m-auto">
                        </picture>

                        <div class="carousel-caption justify-content-center align-items-center">
                        </div>
                </div>
                <!-- /.carousel-item -->
                <!-- /.carousel-item -->
                <div class="carousel-item ">
                        <picture>
                            <source srcset="images/responsive/team-2000X900.jpg" media="(min-width: 1400px)">
                            <source srcset="images/responsive/team-1400X900.jpg" media="(min-width: 769px)">
                            <source srcset="images/responsive/team-800X900.jpg" media="(min-width: 577px)">
                            <img srcset="images/responsive/team-800X900.jpg" alt="responsive image" class="d-block img-fluid m-auto">
                        </picture>

                        <div class="carousel-caption justify-content-center align-items-center">
                            <div>
                                <h2>The Team</h2>
                                <p>We monitor and optimize your site's long-term performance</p>
                                
                            </div>
                        </div>
                </div>
                <!-- /.carousel-item -->
            </div>
            <!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon back_blue" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon back_blue" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="text-center mt-2" id="socials">
            <a target="_blank" rel="noreferrer" href="#" name="YouTube"><i class='bx bxl-youtube'></i></a>
            <a target="_blank" rel="noreferrer" href="https://twitter.com/TukuumaUg" name="Twitter"><i class='bx bxl-twitter'></i></a>
            <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/company/tukuuma" name="LinkedIn"><i class='bx bxl-linkedin-square' ></i></a>
        </div>
    </section>

    <!-- <section class="partners variation" id="partners">
        <h1>Our partners</h1>
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-5 justify-content-center align-items-center text-center">
                <p class="logo">PMF LOGO</p>
            </div>
            <div class="col-5 justify-content-center align-items-center text-center">
                <img src="./mcb.svg" alt="mcb">
                <br>
                <p>Mercantile Credit Bank Limited</p>
            </div>
        </div>
    </section> -->
</main>
<?php include_once 'assets/includes/footer.php'; ?>
