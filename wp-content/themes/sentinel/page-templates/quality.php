<?php /* Template Name: Quality */ 
 get_header(); 

$page_slug = 'site-general-settings';
  $generalsettingsid = get_id_by_slug($page_slug);
 ?>

<section class="banner innerBanner" style="background: url(images/topbanner.jpg) no-repeat top left;">
        <div class="container">
            <div class="row relative">
                <div class="col-sm-12 col-md-8">
                    <h1 class="banner_heading mb-4">asa100<span class="text-primary"> quality</span>
                        <span class="aeroplane"><img src="images/icons/3.png" alt="" class="img-fluid"></span>
                    </h1>    
                </div>
            </div>
        </div>
    </section>

    <section class="aircraftparts p-v-200" style="background: url(images/aircraftpartsbg.jpg) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                <div class="relative aircraftpartsImg">
                    <span class="flyplane"><img src="images/1.png" alt="" class="img-fluid"></span>
                    <span class="aircraftpartsImgTop"><img src="images/aircraftparts2.jpg" alt="" class="w-100"></span>
                    <img src="images/aircraftparts1.jpg" alt="" class="w-100">
                    <span class="aircraftpartsImgBtm"><img src="images/aircraftparts3.jpg" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Quality <span class="text-primary">Aircraft Parts </span></h2>
                    <p>Sentinel Aerospace provides only the highest quality aircraft parts and spares. We operate under the ASA100 Quality Assurance standard and are fully compliant under the provisions of FAA Advisory Circular No. 00-56B. Sentinel’s Quality Assurance System is developed to meet and exceed the requirements of ATA, FAA, and EASA and is always continuing to improve all internal processes.<br><br> Our secure, climate-controlled warehousing facility in the dry air of Arizona, provides us with the ideal place to store your climate-sensitive aircraft parts.</p>   
                        
                </div>
            </div>
        </div>
    </section>

    <section class=" pt-5 pb-5 text-white" style="background: url(images/support.jpg) no-repeat top left; background-size: cover;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6 col-md-12 relative text-center">
                    <h3 class="text-primary mb-4">Working For You</h3>
                    <p>We continue to be indispensable to aviators, both large and small, all across the globe.</p>
                    <ul class="row lists justify-content-between mb-3 text-start">
                        <li class="col-md-4">Decrease Aircraft Downtime</li>
                        <li class="col-md-4">Increase Profitability</li>
                        <li class="col-md-4">Solidify Your Parts Chain</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="recertifiedparts p-v-200" style="background: url(images/recertifiedbg.jpg) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5 flex-lg-row-reverse">
                <div class="col-md-6">
                <div class="relative recertifiedpartsImg">
                    <span class="flyplane"><img src="images/2.png" alt="" class="img-fluid"></span>
                    <span class="recertifiedpartsImgTop"><img src="images/recertified2.jpg" alt="" class="w-100"></span>
                    <img src="images/recertified1.jpg" alt="" class="w-100">
                    <span class="recertifiedpartsImgBtm"><img src="images/aircraftparts3.jpg" alt="" class="w-100"></span>
                </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-5">Consistent <span class="text-primary">and Reliable Parts</span></h2>
                    <p>Sentinel Aerospace is committed to the most stringent quality controls. We continuously monitor and audit our supply chain, to ensure that we are obtaining and stocking only the highest quality rotables, expendables, and avionics. When selecting our repair partners, we select only the finest 145 repair facilities, that provide the highest quality work and longest warranties in the industry.<br><br>All materials supplied by Sentinel Aerospace are provided with applicable FAA 8130-3, EASA, and CAAC certifications, and are fully traceable to OEMs, major FAA 121/129, and other national carriers.

                        </p>   
                </div>
            </div>
        </div>
    </section>

    <section class="justabusiness p-v-60 text-white text-center" style="background: url(images/justabusiness.jpg) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 text-center mt-5 mb-4 relative">
                    <span class="quote1"><img src="images/4.png" alt="" class="img-fluid"></span>
                    <span class="quote2"><img src="images/5.png" alt="" class="img-fluid"></span>
                    <h2 class="text-primary" class="mb-5">Client Testimonials</h2>
                        
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>Thanks for all these close follow-ups you’re a great<br>help for our OPS team!</p>
                                <h3 class="mt-2">Jon O</h3>
                            </div>
                            <div class="carousel-item">
                                <p>Thank you so much for your prompt service. We averted an AOG<br>and we cannot say thank you enough!</p>
                                <h3 class="mt-2">Elena M</h3>
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>    