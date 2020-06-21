@extends('frontend.common.layout')

@section('content')
     <div class="banner-top owl-carousel owl-theme">
        <div class="item">
            <img src="{{ URL::asset('public/theme/images/projects-banner.jpg') }}" alt="">
            <div class="banner-text">
                <h1>Projects</h1>
            </div>
        </div>
    </div>

    <section class="projects-body">
        <div class="container">
            <div class="row profile">

                <div class="col-md-3">
                  @include('frontend.common.user-dashboard-menu')
                </div>
                
                
                
                 <div class="col-md-9">
                    <div class="profile-content">
                        <div class="content-heading">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-dark">Dashboard</h1>
                                </div><!-- /.col -->
                                <div class="col-md-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"
                                                    aria-hidden="true" style="color: rgb(0, 0, 0);"></i></a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div>

                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-box-section">
                                        <div class="image-section">
                                            <img src="{{ URL::asset('public/theme/images/img-singlesec.jpg') }}" alt="img" />
                                        </div>
                                        <div class="default-div" style="display:block">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">
                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <h5>City: Kolkata</h5>
                                            </div>
                                        </div>
                                        <div class="alternate-div" style="display:none">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">

                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <div class="about-text-hover">
                                                    <p><span>Risk: </span> 9%</p>
                                                    <hr>
                                                    <p><span>Projected Returns: </span>765</p>
                                                    <hr>
                                                    <p><span>STATUS:</span> Project Started</p>

                                                    <div class="progressber-section">
                                                        <div class="progress">
                                                            <div class="one success-color"></div>
                                                            <div class="two success-color"></div>
                                                            <div class="three no-color"></div>
                                                            <div class="four no-color"></div>
                                                            <div class="progress-bar progress-bar-success"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-section">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnorange">Deck</button></a>
                                                        </div>

                                                        <div class="col-md-9 col-sm-6 col-xs-12 col-lg-5">
                                                            <a href="#"><button class="btn btngreen">Financial
                                                                    Information</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnblue">PDF</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-3">
                                                            <a href="#"><button
                                                                    class="btn btnyellow">Photos</button></a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-box-section">
                                        <div class="image-section">
                                            <img src="{{ URL::asset('public/theme/images/img-singlesec.jpg') }}" alt="img" />
                                        </div>
                                        <div class="default-div">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">
                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <h5>City: Kolkata</h5>
                                            </div>
                                        </div>
                                        <div class="alternate-div">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">

                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <div class="about-text-hover">
                                                    <p><span>Risk: </span> 9%</p>
                                                    <hr>
                                                    <p><span>Projected Returns: </span>765</p>
                                                    <hr>
                                                    <p><span>STATUS:</span> Project Started</p>

                                                    <div class="progressber-section">
                                                        <div class="progress">
                                                            <div class="one success-color"></div>
                                                            <div class="two success-color"></div>
                                                            <div class="three no-color"></div>
                                                            <div class="four no-color"></div>
                                                            <div class="progress-bar progress-bar-success"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-section">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnorange">Deck</button></a>
                                                        </div>

                                                        <div class="col-md-9 col-sm-6 col-xs-12 col-lg-5">
                                                            <a href="#"><button class="btn btngreen">Financial
                                                                    Information</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnblue">PDF</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-3">
                                                            <a href="#"><button
                                                                    class="btn btnyellow">Photos</button></a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-box-section">
                                        <div class="image-section">
                                            <img src="{{ URL::asset('public/theme/images/img-singlesec.jpg') }}" alt="img" />
                                        </div>
                                        <div class="default-div" style="display:block">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">
                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <h5>City: Kolkata</h5>
                                            </div>
                                        </div>
                                        <div class="alternate-div" style="display:none">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">

                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <div class="about-text-hover">
                                                    <p><span>Risk: </span> 9%</p>
                                                    <hr>
                                                    <p><span>Projected Returns: </span>765</p>
                                                    <hr>
                                                    <p><span>STATUS:</span> Project Started</p>

                                                    <div class="progressber-section">
                                                        <div class="progress">
                                                            <div class="one success-color"></div>
                                                            <div class="two success-color"></div>
                                                            <div class="three no-color"></div>
                                                            <div class="four no-color"></div>
                                                            <div class="progress-bar progress-bar-success"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-section">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnorange">Deck</button></a>
                                                        </div>

                                                        <div class="col-md-9 col-sm-6 col-xs-12 col-lg-5">
                                                            <a href="#"><button class="btn btngreen">Financial
                                                                    Information</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnblue">PDF</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-3">
                                                            <a href="#"><button
                                                                    class="btn btnyellow">Photos</button></a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-box-section">
                                        <div class="image-section">
                                            <img src="{{ URL::asset('public/theme/images/img-singlesec.jpg') }}" alt="img" />
                                        </div>
                                        <div class="default-div" style="display:block">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">
                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <h5>City: Kolkata</h5>
                                            </div>
                                        </div>
                                        <div class="alternate-div" style="display:none">
                                            <div class="icon-section">
                                                <img src="{{ URL::asset('public/theme/images/home-icon.png') }}" alt="img" />
                                            </div>
                                            <div class="image-text-section">

                                                <div class="about-text">
                                                    <h4>Skyline</h4>
                                                    <p>Bought in July of 2017 for $1.7M and it recently appraised for
                                                        $3.5M
                                                        in December 2018</p>
                                                </div>
                                                <div class="about-text-hover">
                                                    <p><span>Risk: </span> 9%</p>
                                                    <hr>
                                                    <p><span>Projected Returns: </span>765</p>
                                                    <hr>
                                                    <p><span>STATUS:</span> Project Started</p>

                                                    <div class="progressber-section">
                                                        <div class="progress">
                                                            <div class="one success-color"></div>
                                                            <div class="two success-color"></div>
                                                            <div class="three no-color"></div>
                                                            <div class="four no-color"></div>
                                                            <div class="progress-bar progress-bar-success"
                                                                style="width: 40%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-section">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnorange">Deck</button></a>
                                                        </div>

                                                        <div class="col-md-9 col-sm-6 col-xs-12 col-lg-5">
                                                            <a href="#"><button class="btn btngreen">Financial
                                                                    Information</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-2">
                                                            <a href="#"><button class="btn btnblue">PDF</button></a>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-3">
                                                            <a href="#"><button
                                                                    class="btn btnyellow">Photos</button></a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                

               
            </div>
        </div>
        </div>
    </section>
@endsection