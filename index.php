<?php 
    include 'header.php';
?>
<aside class="p-3">
    <span class="hide">Follow Us:</span>
    <i class='bx bxl-facebook-circle bx-rotate-270'></i>
    <i class='bx bxl-twitter bx-rotate-270'></i>
    <i class='bx bxl-linkedin-square bx-rotate-270' ></i>
    <i class='bx bxl-instagram-alt bx-rotate-270' ></i>
</aside>
<main class="container">
    <section class="landing ">
        <img src="image-003.png" alt="logo">
        <div>
            <span class="greenColor"><h3>We Love, Protect, Nurture</h3></span>
        </div>
    </section>
    
    <section class="us display variation" id="us">
        <h1>About Us</h1>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-8 justify-content-center align-items-center text-center">
                <i class='bx bxs-tree bx-md'></i>
                <p>
                    TUKUUMA is a youth founded initiative focused on providing lasting solutions.
                </p>  
                <i class='bx bxs-tree bx-md'></i>
                <p>   
                    Our goal is to facilitate, lead and advocate for environmental conservation and sustainability through project implementation and research.
                </p>
            </div>
        </div>
    </section>

    <section class="whatWeDo display" id="whatWeDo">
        <h1>What We Do</h1>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-8 justify-content-center align-items-center text-center">
                <i class='bx bxs-tree bx-md'></i>
                <p>
                    We partner with different companies and stakeholders with a heart for environmental stewardship to implement key environmental projects in Uganda and Africa.
                </p>
                <i class='bx bxs-tree bx-md'></i>
                <p>
                    Our current projects include; Entasesa tree planting project, and Clean Uganda (a sanitation, and waste disposal project engaging children (schools) to take the lead role in protecting and preserving their environment).
                </p>
            </div>
        </div>
    </section>

    <section class="gallery display variation" id="gallery">
        <h1>Images</h1>
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <a href="https://bootstrapcreative.com/">
                        <!-- 
                        If you need more browser support use https://scottjehl.github.io/picturefill/
                        If a picture looks blurry on a retina device you can add a high resolution like this
                        <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">
    
                        What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                            -->
                            <picture>
                            <source srcset="https://dummyimage.com/2000x900/007aeb/4196e5" media="(min-width: 1400px)">
                            <source srcset="https://dummyimage.com/1400x900/#007aeb/4196e5" media="(min-width: 769px)">
                            <source srcset="https://dummyimage.com/800x900/007aeb/4196e5" media="(min-width: 577px)">
                            <img srcset="https://dummyimage.com/600x900/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
                        </picture>
    
                        <div class="carousel-caption">
                            <div>
                                <h2>Digital Craftsmanship</h2>
                                <p>We meticously build each site to get results</p>
                                <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="https://bootstrapcreative.com/">
                            <picture>
                            <source srcset="https://dummyimage.com/2000x900/007aeb/4196e5" media="(min-width: 1400px)">
                            <source srcset="https://dummyimage.com/1400x900/007aeb/4196e5" media="(min-width: 769px)">
                            <source srcset="https://dummyimage.com/800x900/007aeb/4196e5" media="(min-width: 577px)">
                            <img srcset="https://dummyimage.com/600x900/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
                        </picture>
    
                        <div class="carousel-caption justify-content-center align-items-center">
                            <div>
                                <h2>Every project begins with a sketch</h2>
                                <p>We work as an extension of your business to explore solutions</p>
                                <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="https://bootstrapcreative.com/">
                            <picture>
                            <source srcset="https://dummyimage.com/2000x900/007aeb/4196e5" media="(min-width: 1400px)">
                            <source srcset="https://dummyimage.com/1400x900/007aeb/4196e5" media="(min-width: 769px)">
                            <source srcset="https://dummyimage.com/800x900/007aeb/4196e5" media="(min-width: 577px)">
                            <img srcset="https://dummyimage.com/600x900/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
                        </picture>
    
                        <div class="carousel-caption justify-content-center align-items-center">
                            <div>
                                <h2>Performance Optimization</h2>
                                <p>We monitor and optimize your site's long-term performance</p>
                                <span class="btn btn-sm btn-secondary">Learn How</span>
                            </div>
                        </div>
                    </a>
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
                <p class="logo">MERCHANTILE CREDIT BANK LOGO</p>
            </div>
        </div>
    </section>
</main>
<?php 
    include 'footer.php';
?>
