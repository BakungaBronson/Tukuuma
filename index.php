<?php include_once 'header.php'; ?>
<main class="container">
    <section class="landing ">
        <img src="image-003.png" alt="logo">
        <div>
            <span class="greenColor"><h3>We Love, Protect, Nurture</h3></span>
        </div>
    </section>
    
    <section class="us display variation" id="us">
        <h1>Who We Are</h1>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-8 justify-content-center align-items-center text-center">
                <i class='bx bxs-tree bx-sm'></i><i class='bx bxs-tree bx-md'></i><i class='bx bxs-tree bx-sm'></i>
                <p>
                    Tukuuma is a youth founded initiative focused on providing lasting solutions that tackle the present environmental challenges of communities in Uganda and Africa.
                </p>  
                <i class='bx bxs-tree bx-sm'></i><i class='bx bxs-tree bx-md'></i><i class='bx bxs-tree bx-sm'></i>
                <p>   
                    Our goal is to facilitate, lead and advocate for environmental conservation and sustainability through project implementation and research.
                </p>
            </div>
        </div>
    </section> 

    <section id="twitter" style="display: flex; justify-content: center;">
        <a class="twitter-timeline" data-width="600"
  data-height="600" href="https://twitter.com/TukuumaUg?ref_src=twsrc%5Etfw">Tweets by TukuumaUg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </section>

    <section class="gallery display variation mt-4" id="gallery">
        <h1>Images</h1>
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <!-- 
                    If you need more browser support use https://scottjehl.github.io/picturefill/
                    If a picture looks blurry on a retina device you can add a high resolution like this
                    <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                    What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                        -->
                        <picture>
                            <source srcset="./images/cleanug2000.jpg" media="(min-width: 1400px)">
                            <source srcset="./images/cleanug1400.jpg" media="(min-width: 768px)">
                            <source srcset="./images/cleanug800.jpg" media="(min-width: 576px)">
                            <img srcset="./images/cleanug600.jpg" alt="responsive image" class="img-fluid">
                        </picture>

                    <div class="carousel-caption justify-content-center align-items-center hide">
                        <div>
                            <h2 class="blue">Environmental Wellness</h2>
                            <p class="blue">Residents of Masaka District Clean The Environment</p>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                        <picture>
                            <source srcset="./images/youth2000.jpg" media="(min-width: 1400px)">
                            <source srcset="./images/youth1400.jpg" media="(min-width: 768px)">
                            <source srcset="./images/youth800.jpg" media="(min-width: 576px)">
                            <img srcset="./images/youth600.jpg" alt="responsive image" class="img-fluid">
                        </picture>

                    <div class="carousel-caption justify-content-center align-items-center hide">
                        <div>
                            <h2>Every project begins with a sketch</h2>
                            <p>We work as an extension of your business to explore solutions</p>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                        <picture>
                            <source srcset="./images/clean2000.jpg" media="(min-width: 1400px)">
                            <source srcset="./images/clean1400.jpg" media="(min-width: 768px)">
                            <source srcset="./images/clean800.jpg" media="(min-width: 576px)">
                            <img srcset="./images/clean600.jpg" alt="responsive image" class="img-fluid">
                        </picture>
    
                    <div class="carousel-caption justify-content-center align-items-center hide">
                        <div>
                            <h2>Nurturing the next generation.</h2>
                            <p>Instruction in youth is like engraving in stone. ~African Proverb</p>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->
            </div>
            <!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="partners" id="partners">
        <h1>Our partners</h1>
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-5 justify-content-center align-items-center text-center">
                <p class="logo">PMF LOGO</p>
            </div>
            <div class="col-5 justify-content-center align-items-center text-center">
                <img src="./mcb.svg" alt="mcb">
                <br>
                <p>Merchentile Credit Bank Limited</p>
            </div>
        </div>
    </section>
</main>
<?php include_once 'footer.php'; ?>
