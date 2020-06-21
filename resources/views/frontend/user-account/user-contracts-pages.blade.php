@extends('frontend.common.layout')

@section('content')
    <div class="banner-top owl-carousel owl-theme">
        <div class="item">
            <img src="{{ URL::asset('public/theme/images/projects-banner.jpg') }}" alt="">
            <div class="banner-text">
                <h1>Contracts Managment</h1>
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
                                        <li class="breadcrumb-item active">Contracts Managment</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div>

                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contract-table-section">
                                        <div class="contract-heading">
                                            <h4 class="heading-mt44"><span class="all-heading-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>All Contracts</h4>
                                        </div>

                                        <div class="table table-body-section" style="overflow-x:auto;">
                                            <table>
                                                <thead style="background-color: #79b9fd;">
                                                    <tr>
                                                        <th width="50%">Project Title</th>
                                                        <th width="20%">Start Date</th>
                                                        <th width="20%">Status</th>
                                                        <th width="10%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="question-section">Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
                                                        <td style="text-align: center;">23-02-20</td>
                                                        <td style="text-align: center;">Sent to investor</td>
                                                        <td style="text-align: center;"><a href="#"><button class="btn sign-button"><span class="sign-icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>Sign</button></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="question-section">Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
                                                        <td style="text-align: center;">23-02-20</td>
                                                        <td style="text-align: center;">Sent to investor</td>
                                                        <td style="text-align: center;"><a href="#"><button class="btn sign-button"><span class="sign-icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>Sign</button></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="question-section">Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
                                                        <td style="text-align: center;">23-02-20</td>
                                                        <td style="text-align: center;">Sent to investor</td>
                                                        <td style="text-align: center;"><a href="#"><button class="btn sign-button"><span class="sign-icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>Sign</button></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="question-section">Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
                                                        <td style="text-align: center;">23-02-20</td>
                                                        <td style="text-align: center;">Sent to investor</td>
                                                        <td style="text-align: center;"><a href="#"><button class="btn sign-button"><span class="sign-icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>Sign</button></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="question-section">Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
                                                        <td style="text-align: center;">23-02-20</td>
                                                        <td style="text-align: center;">Sent to investor</td>
                                                        <td style="text-align: center;"><a href="#"><button class="btn sign-button"><span class="sign-icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>Sign</button></a></td>
                                                    </tr>
                                                </tbody>

                                            </table>

                                           
                                            <div class="pagination-section">
                                                <ul class="pagination">
                                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
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