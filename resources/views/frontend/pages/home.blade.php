@extends('frontend.common.layout')

@section('content')
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ URL::asset('public/theme/images/bannerimg1.jpg') }}" alt="Los Angeles" width="100%">

                <div class="banner-headingtext">
                    <h1 style="position: absolute;
                bottom: 300px;
                z-index: 999999999;
                color: white;
                font-size: 49px;
                text-align: center;
                margin: 0 auto;
                display: block;
                margin-left: 30%;">Passive Real Estate Investing</h1>
                    <p style="position: absolute;
                bottom: 250px;
                z-index: 999999999;
                color: white;
                font-size: 20px;
                text-align: center;
                margin: 0 auto;
                display: block;
                margin-left: 16%;">We introduce you to passive real estate investment projects with great returns. You choose if
                        you want to invest.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('public/theme/images/bannerimg3.jpg') }}" alt="Chicago" width="100%">
                <div class="banner-headingtext">
                    <h1 style="position: absolute;
                bottom: 300px;
                z-index: 999999999;
                color: white;
                font-size: 49px;
    text-align: center;
    margin: 0 auto;
    display: block;
    margin-left: 30%;">Passive Real Estate Investing</h1>
                    <p style="position: absolute;
                bottom: 250px;
                z-index: 999999999;
                color: white;
                font-size: 20px;
    text-align: center;
    margin: 0 auto;
    display: block;
    margin-left: 16%;">We introduce you to passive real estate investment projects with great returns. You choose if
                        you
                        want to invest.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('public/theme/images/bannerimg2.jpg') }}" alt="New York" width="100%">
                <div class="banner-headingtext">
                    <h1 style="position: absolute;
                bottom: 300px;
                z-index: 999999999;
                color: white;
                font-size: 49px;
    text-align: center;
    margin: 0 auto;
    display: block;
    margin-left: 30%;">Passive Real Estate Investing</h1>
                    <p style="position: absolute;
                bottom: 250px;
                z-index: 999999999;
                color: white;
                font-size: 20px;
    text-align: center;
    margin: 0 auto;
    display: block;
    margin-left: 16%;">We introduce you to passive real estate investment projects with great returns. You choose if
                        you
                        want to invest.</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center work-heading">
                        <h2 class="heading">How it Works</h2>
                        <div class="heading-line"></div>
                        <span class="heading-icon" style="background: aliceblue;"><i class="fa fa-lightbulb-o"
                                aria-hidden="true"></i></span>
                    </div>

                    <div class="heading-text margin-bottt-70 head-1border">
                        <div class="first-heading common-box">
                            <h3>1. Join for Free</h3>
                            <div class="text-center about-text">
                                <p>Join and we'll schedule a call to better understand your goals.</p>
                            </div>
                        </div>
                    </div>

                    <div class="heading-text">
                        <div class="first-heading common-box">
                            <h3>2. Get Deals</h3>
                            <div class="text-center about-text">
                                <p>We introduce you to opportuntities that match your preferences.</p>
                            </div>
                        </div>
                    </div>

                    <div class="heading-text head-3position">
                        <div class="first-heading common-box">
                            <h3>3. Invest</h3>
                            <div class="text-center about-text">
                                <p>If you like what you see, invest! We'll be here to answer any and all questions you
                                    have.</p>
                            </div>
                        </div>
                    </div>

                    <div class="heading-text head-4position">
                        <div class="first-heading common-box">
                            <h3>4. Build Wealth</h3>
                            <div class="text-center about-text">
                                <p>Sit back and get paid on your investment journey! Your money works for you. </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">

            <div class="text-center work-heading">
                <h2 class="heading">About Us </h2>
                <div class="heading-line"></div>
                <span class="heading-icon"><i class="fa fa-indent" aria-hidden="true"></i></span>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="image-about">
                        <img src="{{ URL::asset('public/theme/images/aboutimg.jpg') }}" alt="about">
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="about-text-part">
                        <p>We're a boutique real estate investment firm based in Los Angeles. As investors first
                            ourselves, we built Scoutpads after a decade helping friends and family invest in real
                            estate. We focus on capital appreciation, wealth preservation, portfolio diversification and
                            transparent investor education.</p>
                        <br>
                        <p>Our team primarily invests in single family and multi family projects in class A and B
                            markets such as our own backyard that we consider as less volatile. We buy properties at
                            wholesale prices, often 20-30% or more below market value, then fix and flip or hold and
                            cashflow. Sometimes both.

                            We work with experienced teams and come from diverse backgrounds ourselves including real
                            estate, tech and finance who are experienced in their local markets.
                        </p>
                        <button class="btn aboutbutton">Read More ></button>

                    </div>
                </div>

            </div>
    </section>

    <section class="investing-made-easy">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="heading">Investing made easy</h3>
                        <div class="heading-line"></div>
                        <span class="heading-icon" style="background: aliceblue;"><i class="fa fa-money"
                                aria-hidden="true"></i></span>
                    </div>
                    <div class="text-center">
                        <p>We look for investments we'd invest in ourselves and when we do, we open those opportunities
                            up to our community and in many cases, invest with you. Based in Los Angeles, we invest
                            locally and across the country. Learn more about our investing strategy and about us here.
                        </p>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="cover-investing mt-4">
                        <div class="text-center">
                            <img src="{{ URL::asset('public/theme/images/dollar.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <h4 class="heading-investing">100% Passive</h4>
                        </div>
                        <div class="investing-text text-center">
                            <p>Most of us don't have time to find a property, manage it, deal with tenants, rehab it,
                                flip it etc. With Scoutpads, your money works for you.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="cover-investing middle-part">
                        <div class="text-center">
                            <img src="{{ URL::asset('public/theme/images/search.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <h4 class="heading-investing">Data Driven</h4>
                        </div>
                        <div class="investing-text text-center">
                            <p>Every deal comes with the details of the opportunity, length of investment, projected
                                returns and more information to guide your decision. </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="cover-investing mt-4">
                        <div class="text-center">
                            <img src="{{ URL::asset('public/theme/images/glitter.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <h4 class="heading-investing">Made for You</h4>
                        </div>
                        <div class="investing-text text-center">
                            <p>Before we introduce you to any investment deals, we'll get to know which opportunities
                                are of interest to you and tailor the deals you'll see. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="invesment-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h3 class="heading">Investment Portfolio </h3>
                        <div class="heading-line"></div>
                        <span class="heading-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                    </div>

                    <div class="portfolio-invest owl-carousel owl-theme">
                        @foreach($ongoing_projects as $ongoing_project)
                        <div class="item">
                            <div class="portfolio-img text-center matchHeight">
                                <div class="pic">
                                    <img src="{{ URL::asset('public/theme/images/blank-pic.png') }}" alt="Blank Image">
                                    @if($ongoing_project->image!='')
                                    <a class="holder" href="#" style="background-image:url({{ get_image_url($ongoing_project->image,'project') }});"></a>
                                   
                                    @endif
                                    
                                </div>
                                <div class="text-slier">
                                    <h4>{{ $ongoing_project->name }}</h4>
                                    <p>{{ $ongoing_project->content }}</p>
                                    <p>Strategy: {{ $ongoing_project->strategy }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>

    <section class="scoutpads">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h3 class="heading">Join Scoutpads</h3>
                        <div class="heading-line"></div>
                        <span class="heading-icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                    </div>
                </div>

                <div class="bored-text text-center">
                    <h4>5 Reasons to Join Scoutpads | No Fees, Totally Free</h4>
                </div>


                <div class="scoutpads-part owl-carousel owl-theme">
                    <div class="item">
                        <div class="cover-area">
                            <div class="text-center icon-scou">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <div class="lower-scoutpads">
                                <h5>Vetted Opportunities</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cover-area">
                            <div class="text-center icon-scou">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <div class="lower-scoutpads">
                                <h5>Vetted Opportunities</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cover-area">
                            <div class="text-center icon-scou">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <div class="lower-scoutpads">
                                <h5>Vetted Opportunities</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cover-area">
                            <div class="text-center icon-scou">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <div class="lower-scoutpads">
                                <h5>Vetted Opportunities</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="cover-area">
                            <div class="text-center icon-scou">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <div class="lower-scoutpads">
                                <h5>Vetted Opportunities</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

  

    <section class="upcomming-projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h3 class="heading">Upcomming Projects</h3>
                        <div class="heading-line"></div>
                        <span class="heading-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>

            <div class="row">
                
                    @foreach($upcoming_projects as $upcoming_project)
                    <div class="col-md-4">
                        <div class="card-counter danger">
                            <i class="fa fa-building-o"></i>
                            <span class="count-title">{{ $upcoming_project->name }}</span>
                            <span class="count-name">{{ $upcoming_project->location }}</span>
                        </div>
                    </div>
                    @endforeach
                   
                
            </div>
        </div>
    </section>





 <section class="investor">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h3 class="heading">Investor Testimony </h3>
                        <div class="heading-line"></div>
                        <span class="heading-icon"><i class="fa fa-heart" aria-hidden="true"></i></span>
                    </div>
                </div>

              <div class="row">
                      @foreach($testimonials_data as $testimonial)
                      <div class="col-md-4 col-lg-4">
                        <div class="testimonial-singlebox">
                            @if($testimonial->image!='')
                            <img src="{{ get_image_url($testimonial->image,'testimonial') }}" alt="profile-img">
                            @else 
                            <img src="{{ URL::asset('public/theme/images/Headshot.jpg') }}" alt="profile-img">
                            @endif
                            
                            <div class="testimonial-text">
                                <h3>{{ $testimonial->name }}, {{ $testimonial->designation }}</h3>
                                <h4>{{ $testimonial->location }}</h4>
                                <p>“{{ $testimonial->message }}”</p>
                            </div>
                        </div>
                      </div>
                      @endforeach 
                  
              </div>
              <div class="row">
                  <div class="col-md-12 col-lg-12">
                      <a href="#"><button class="btn button-testimonial">View More</button></a>
                  </div>
              </div>
            </div>
        </div>
    </section>











   

@endsection