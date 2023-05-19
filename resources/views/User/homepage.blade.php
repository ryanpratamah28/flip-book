@extends('Layout.header')

@section('headerApp')

<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h1 class="h1-large">Find influencers for your products</h1>
                    <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim, neque ut ultrices sollicitudin</p>
                    <a class="btn-solid-lg" href="#services">Offered services</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('images/homepage/header-image.png') }}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->

<!-- Services -->
<div id="services" class="cards-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Explore our services</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Card -->
                <div class="card">
                    <div class="card-icon">
                        <span class="fas fa-headphones-alt"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Analyse your product</h5>
                        <p>Et blandit nisl libero at arcu. Donec ac lectus sed tellus mollis viverra. Nullam pharetra ante at nunc elementum</p>
                        <a class="read-more no-line" href="#">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-icon red">
                        <span class="far fa-clipboard"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Evaluate opportunities</h5>
                        <p>Vulputate nibh feugiat. Morbi pellent diam nec libero lacinia, sed ultrices velit scelerisque. Nunc placerat justo sem</p>
                        <a class="read-more no-line" href="#">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-icon green">
                        <span class="far fa-comments"></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Find the influencers</h5>
                        <p>Ety suscipit metus sollicitudin euqu isq imperdiet nibh nec magna tincidunt, nec pala vehicula neque sodales verum</p>
                        <a class="read-more no-line" href="#">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of services -->


<!-- Details 1 -->
<div id="details" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('images/homepage/details-1.png') }}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <div class="section-title">WHAT WE DO</div>
                    <h2>The right influencer can boost your conversion</h2>
                    <p>Etiam tempus condimentum congue. In sit amet nisi eget massa condimentum lobortis eget ac eros. In hac habitasse platea dictumst. Aenean molestie mauris eget sapien sagittis, a bibendum magna tincidunt</p>
                    <a class="btn-solid-reg" href="#contact">Get quote</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->


<!-- Details 2 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <div class="section-title">ABOUT US</div>
                    <h2>We have ten years experience in marketing</h2>
                    <p>Etiam tempus condimentum congue. In sit amet nisi eget massa condimentum lobortis eget ac eros. In hac habitasse platea dictumst. Aenean molestie mauris eget sapien sagittis, a bibendum magna tincidunt</p>
                    <a class="btn-outline-reg" href="#">Details</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('images/homepage/details-2.png') }}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 2 -->


<!-- Features -->
<div id="features" class="accordion-1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="h2-heading">Online service features</h2>
                <p class="p-heading">Suspendisse vitae enim arcu. Aliquam convallis risus a felis blandit, at mollis nisi bibendum. Aliquam nec purus at ex blandit posuere nec a odio. Proin lacinia dolor justo</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->   
        <div class="row">
            <div class="col-xl-5">
                <div class="accordion" id="accordionExample">
                    
                    <!-- Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-icon">
                            <span class="fas fa-tv"></span>
                        </div> <!-- end of accordion-icon -->
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Analyse the product and design plan
                            </button>
                        </div> <!-- end of accordion-header -->
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                        </div> <!-- end of accordion-collapse -->
                    </div> <!-- end of accordion-item -->
                    <!-- end of accordion-item -->

                    <!-- Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-icon blue">
                            <span class="fas fa-microphone"></span>
                        </div> <!-- end of accordion-icon -->
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Find the market opportunities
                            </button>
                        </div> <!-- end of accordion-header -->
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                        </div> <!-- end of accordion-collapse -->
                    </div> <!-- end of accordion-item -->
                    <!-- end of accordion-item -->

                    <!-- Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-icon purple">
                            <span class="fas fa-video"></span>
                        </div> <!-- end of accordion-icon -->
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Prepare the product launch campaign
                            </button>
                        </div> <!-- end of accordion-header -->
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                        </div> <!-- end of accordion-collapse -->
                    </div> <!-- end of accordion-item -->
                    <!-- end of accordion-item -->
                    
                    <!-- Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-icon orange">
                            <span class="fas fa-tools"></span>
                        </div> <!-- end of accordion-icon -->
                        <div class="accordion-header" id="headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Evaluate the campaign and adjust
                            </button>
                        </div> <!-- end of accordion-header -->
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">Mauris ornare libero et pharetra hendrerit. Cura elementum lectus quis tellus pretium, vitae lobortis dui sagittis aliquam et enim vel semon anticus</div>
                        </div> <!-- end of accordion-collapse -->
                    </div> <!-- end of accordion-item -->
                    <!-- end of accordion-item -->

                </div> <!-- end of accordion -->
            </div> <!-- end of col -->
            <div class="col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('images/homepage/features-dashboard.png') }}" alt=alternative>
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of accordion-1 -->
<!-- end of features -->


<!-- Testimonials -->
<div class="cards-2 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Customer testimonials</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card">
                    <img class="quotes" src="{{ asset('images/homepage/quotes.svg') }}" alt="alternative">
                    <div class="card-body">
                        <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                        <div class="testimonial-author">Roe Smith</div>
                        <div class="occupation">General Manager, Presentop</div>
                    </div>
                    <div class="gradient-floor red-to-blue"></div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="quotes" src="{{ asset('images/homepage/quotes.svg') }}" alt="alternative">
                    <div class="card-body">
                        <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                        <div class="testimonial-author">Sam Bloom</div>
                        <div class="occupation">General Manager, Presentop</div>
                    </div>
                    <div class="gradient-floor blue-to-purple"></div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="quotes" src="{{ asset('images/homepage/quotes.svg') }}" alt="alternative">
                    <div class="card-body">
                        <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                        <div class="testimonial-author">Bill McKenzie</div>
                        <div class="occupation">General Manager, Presentop</div>
                    </div>
                    <div class="gradient-floor purple-to-green"></div>
                </div>
                <!-- end of card -->
                
                <!-- Card -->
                <div class="card">
                    <img class="quotes" src="{{ asset('images/homepage/quotes.svg') }}" alt="alternative">
                    <div class="card-body">
                        <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                        <div class="testimonial-author">Vanya Dropper</div>
                        <div class="occupation">General Manager, Presentop</div>
                    </div>
                    <div class="gradient-floor red-to-blue"></div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="quotes" src="{{ asset('images/homepage/quotes.svg') }}" alt="alternative">
                    <div class="card-body">
                        <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                        <div class="testimonial-author">Lefty Brown</div>
                        <div class="occupation">General Manager, Presentop</div>
                    </div>
                    <div class="gradient-floor blue-to-purple"></div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <img class="quotes" src="{{ asset('images/homepage/quotes.svg') }}" alt="alternative">
                    <div class="card-body">
                        <p class="testimonial-text">Suspendisse vitae enim arcu. Aliqu convallis risus a felis blandit, at mollis nisi bibendum aliquam noto ricos</p>
                        <div class="testimonial-author">Susane Blake</div>
                        <div class="occupation">General Manager, Presentop</div>
                    </div>
                    <div class="gradient-floor purple-to-green"></div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of testimonials -->


<!-- Customers -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Trusted by over <span class="blue">5000</span> customers worldwide</h4>
                <hr class="section-divider">

                <!-- Image Slider -->
                <div class="slider-container">
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{ asset('images/homepage/customer-logo-1.png') }}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{ asset('images/homepage/customer-logo-2.png') }}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{ asset('images/homepage/customer-logo-3.png') }}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{ asset('images/homepage/customer-logo-4.png') }}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{ asset('images/homepage/customer-logo-5.png') }}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{ asset('images/homepage/customer-logo-6.png') }}" alt="alternative">
                            </div>
                        </div> <!-- end of swiper-wrapper -->
                    </div> <!-- end of swiper container -->
                </div> <!-- end of slider-container -->
                <!-- end of image slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of customers -->


<!-- Invitation -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <h2>Find the right influencer for your product</h2>
                    <p class="p-large">Eu convallis arcu ultrices in. Mauris ornare libero et pharetra hendrerit. Curabitur elementum lectus quis vioc tellus</p>
                    <a class="btn-solid-lg" href="#contact">Get free quote</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of invitation -->


<!-- Contact -->
<div id="contact" class="form-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <div class="section-title">GET QUOTE</div>
                    <h2>Submit the form for quote</h2>
                    <p>Aliquam et enim vel sem pulvinar suscipit sit amet quis lorem. Sed risus ipsum, egestas sed odio in, pulvinar euismod ipsum. Sed ut enim non nunc fermentum dictum et sit amet erat. Maecenas</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="d-flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-grow-1">Vel maximus nunc aliquam ut. Donec semper, magna a pulvinar</div>
                        </li>
                        <li class="d-flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-grow-1">Suscipit sit amet quis lorem. Sed risus ipsum, egestas mare</div>
                        </li>
                        <li class="d-flex">
                            <i class="fas fa-square"></i>
                            <div class="flex-grow-1">Sem pulvinar suscipit sit amet quis lorem. Sed risus</div>
                        </li>
                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Contact Form -->
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Industry" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Your product" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Submit</button>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-1 -->
<!-- end of contact -->

<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="{{ asset('images/homepage/up-arrow.png') }}" alt="alternative">
</button>
<!-- end of back to top button -->

@endsection