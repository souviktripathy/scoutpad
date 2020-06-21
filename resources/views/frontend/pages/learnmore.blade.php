@extends('frontend.common.layout')

@section('content')

  <section class="login-block">
        <div class="container">
            @if (Session::has('success-message'))
              <div class="alert alert-success">
                {{ Session::get('success-message') }}
              </div>
            @endif
            @if (Session::has('error-message'))
              <div class="alert alert-danger">
                {{ Session::get('error-message') }}
              </div>
            @endif
            
            <div class="row">
                <div class="col-md-6 col-lg-6 login-sec Registration-sec">

                    <h2 class="text-center">Learn More</h2>
                    <form class="login-form registration-form" id="learn_more_form" action="{{ route('frontend-learnmore-submit') }}" method="post">
                   @csrf     
                   
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Full legal name</label>
                            <input type="text" class="form-control" placeholder="" name="lm_name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Email-Id</label>
                            <input type="email" class="form-control" placeholder="" name="lm_email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Phone Number</label>
                            <input type="number" class="form-control" placeholder="" name="lm_phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Address</label>
                            <input type="text" class="form-control" placeholder="" name="lm_address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Occupation (optional)</label>
                            <input type="text" class="form-control" placeholder="" name="lm_occupation">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Household Income (optional)</label>
                            <input type="text" class="form-control" placeholder="" name="lm_income">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Social Security Number</label>
                            <input type="text" class="form-control" placeholder="" name="lm_security">
                        </div>
                       
                        <hr class="joinus-leftsection">
                        <div class="form-group">
                            <h3>Marital Status?</h3>
                            <span class="wpcf7-form-control-wrap radio-1">
                                <span class="wpcf7-form-control wpcf7-radio">
                                    <span class="wpcf7-list-item first">
                                        <input type="radio" name="lm_mstatus" value="Married" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Married</span>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <input type="radio" name="lm_mstatus" value="Single" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Single </span>
                                    </span>
                                   
                                </span>
                            </span>
                        </div>


                        <div class="form-group">
                            <h3>Are you an accredited or sophisticated investor? *</h3>
                            <span class="wpcf7-form-control-wrap radio-1">
                                <span class="wpcf7-form-control wpcf7-radio">
                                    <span class="wpcf7-list-item first">
                                        <input type="radio" name="lm_investor" value="Yes" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Yes</span>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <input type="radio" name="lm_investor" value="No" style="outline: none;">
                                        <span class="wpcf7-list-item-label">No</span>
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input type="radio" name="lm_investor" value="Not sure" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Not sure</span>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="form-group">
                            <h3>Have you invested in stocks, bonds, startups, mutual funds, real estate etc in the past?
                                *</h3>
                            <span class="wpcf7-form-control-wrap radio-2">
                                <span class="wpcf7-form-control wpcf7-radio">
                                    <span class="wpcf7-list-item first">
                                        <input type="radio" name="lm_invested" value="Yes" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Yes</span>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <input type="radio" name="lm_invested" value="No" style="outline: none;">
                                        <span class="wpcf7-list-item-label">No</span>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="form-group">
                            <h3>How much can you invest? *</h3>
                            <span class="wpcf7-form-control-wrap radio-3">
                                <span class="wpcf7-form-control wpcf7-radio">
                                    <span class="wpcf7-list-item first">
                                        <input type="radio" name="lm_invest" value="Under $25k" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Under $25k</span>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <input type="radio" name="lm_invest" value="$25k to $50k" style="outline: none;">
                                        <span class="wpcf7-list-item-label">$25k to $50k</span>
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input type="radio" name="lm_invest" value="$100k or more" style="outline: none;">
                                        <span class="wpcf7-list-item-label">$100k or more</span>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="form-group">
                            <h3>When are you looking to invest? *</h3>
                            <span class="wpcf7-form-control-wrap radio-4">
                                <span class="wpcf7-form-control wpcf7-radio">
                                    <span class="wpcf7-list-item first">
                                        <input type="radio" name="lm_when" value="Now" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Now</span>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <input type="radio" name="lm_when" value="3-6 months" style="outline: none;">
                                        <span class="wpcf7-list-item-label">3-6 months</span>
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input type="radio" name="lm_when" value="6+ months" style="outline: none;">
                                        <span class="wpcf7-list-item-label">6+ months</span>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="form-group">
                            <h3>When are you looking to invest? *</h3>
                            <span class="wpcf7-form-control-wrap checkbox-284">
                                <span class="wpcf7-form-control wpcf7-checkbox">
                                    <span class="wpcf7-list-item first">
                                        <input type="checkbox" name="lm_hear[]" value="Blog"
                                            style="outline: none;">
                                        <span class="wpcf7-list-item-label">Blog</span>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <input type="checkbox" name="lm_hear[]" value="Friend"
                                            style="outline: none;">
                                        <span class="wpcf7-list-item-label">Friend</span>
                                    </span>
                                    <span class="wpcf7-list-item"><input type="checkbox" name="lm_hear[]"
                                            value="Google" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Google</span>
                                    </span>
                                    <span class="wpcf7-list-item"><input type="checkbox" name="lm_hear[]"
                                            value="Email" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Email</span>
                                    </span>
                                    <span class="wpcf7-list-item last"><input type="checkbox" name="lm_hear[]"
                                            value="Other" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Other</span>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="form-group">
                            <h3>Which country do you reside in?*</h3>
                            <span class="wpcf7-form-control-wrap radio-5">
                                <span class="wpcf7-form-control wpcf7-radio">
                                    <span class="wpcf7-list-item first">
                                        <input type="radio" name="lm_country" value="United States" style="outline: none;">
                                        <span class="wpcf7-list-item-label">United States</span>
                                    </span>
                                    <span class="wpcf7-list-item">
                                        <input type="radio" name="lm_country" value="Other" style="outline: none;">
                                        <span class="wpcf7-list-item-label">Other</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <hr class="joinus-leftsection">

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Any additional information we should know?</label>
                            <textarea class="form-control"  name="lm_additional"></textarea>
                        </div>
                       

                        <div class="row">
                        <div class="form-check">
                            <a href="login.html"> <button type="submit"
                                    class="btn btn-join float-right">Join Us</button> </a>
                        </div>
                    </div>

                    </form>

                </div>
                <div class="col-md-6 col-lg-6 joinus-banner-sec">
                    <h2 class="text-center">Join Scoutpads</h2>
                    <div class="line-section"></div>
                    <div class="jointext-body">
                        <p>Scoutpads introduces you to passive real estate investment opportunities. After you fill out the the form, we'll be in touch to schedule a call to learn more about you. </p><br>
                    <p>From there, you'll recieve investment opportunities that match your tolerance, risk, preferences and so forth. </p><br>
                    <p>Please note: This does not constitute an offer to sell or solicit an offer to buy securities of any sort. Any such offer will made only by the private offering relating to that investment, by the operator and after a relationship has been established with said person.</p><br>
                    <p>If you have any questions, please read through the <a herf="help.html">help</a> page, our <a href="#">general disclaimer</a> or reach out to help@scoutpads.com.</p>
                    </div>
                </div>
            </div>
    </section>

   

@endsection