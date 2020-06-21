@extends('frontend.common.layout')

@section('content')
    <div class="banner-top owl-carousel owl-theme">
        <div class="item">
            <img src="{{ URL::asset('public/theme/images/projects-banner.jpg') }}" alt="">
            <div class="banner-text">
                <h1>Dashboard</h1>
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
                                <div class="col-md-4">
                                    <div class="single-dashboardbox-section">
                                        <div class="single-box-header">
                                            <h5>Total Projects</h5>
                                        </div>
                                        <div class="single-box-body">
                                            
                                            <div class="row">
                                                <div class="col-md-6 col-xs-12 col-sm-12">
                                                    <h4 class="project-number">56</h4>
                                                </div>
                                                <div class="col-md-6 col-xs-12 col-sm-12">
                                                    <img class="project-rightsideimg" src="{{ URL::asset('public/theme/images/dashboard-img.png') }}" alt="img" />
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="single-dashboardbox-section">
                                        <div class="single-box-header">
                                            <h5>Ongoing Projects</h5>
                                        </div>
                                        <div class="single-box-body">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="project-number">26</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <img class="project-rightsideimg" src="{{ URL::asset('public/theme/images/dashboard-img.png') }}" alt="img" />
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="single-dashboardbox-section">
                                        <div class="single-box-header">
                                            <h5>Completed Projects</h5>
                                        </div>
                                        <div class="single-box-body">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="project-number">30</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <img class="project-rightsideimg" src="{{ URL::asset('public/theme/images/dashboard-img.png') }}" alt="img" />
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="progress-report-section">
                                        <div class="progress-report-heading">
                                            <h4 class="heading-mt44"><span class="all-heading-icon"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>Project wise Progress Report</h4>
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