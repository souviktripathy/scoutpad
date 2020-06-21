<div class="user-profile">
                        <div class="profile-userpic">
                            <img src="{{ URL::asset('public/theme/images/Headshot.jpg') }}" class="img-responsive" alt="">
                        </div>

                    </div>

                    <div class="profile-sidebar">
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Marcus Doe
                            </div>
                        </div>

                        <div class="profile-userprofilesection">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12 userprofileloginsection">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></a>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 userprofileloginsection">
                                    <form method="post" action="{{ route('user-logout') }}" enctype="multipart/form-data">
                                        @csrf
                                     <button type="submit" class="logout-btn"><i class="fa fa-power-off"></i> <span>Logout</span></button> 
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="{{ route('user-account-page') }}">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>Dashboard </a>
                                </li>
                                <li>
                                    <a href="{{ route('user-projects-page') }}">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>Projects </a>
                                </li>
                                <li>
                                    <a href="{{ route('user-contracts-page') }}">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>Contracts Management </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>Case Studies </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>Tax Reciepts </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>Reviews </a>
                                </li>
                                <li>
                                     <form method="post" action="{{ route('user-logout') }}" enctype="multipart/form-data">
                                        @csrf
                                     <button type="submit" class="left-logoutbutton"><i class="fa fa-power-off"></i> <span>Logout</span></button> 
                                    </form>
                                    
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>