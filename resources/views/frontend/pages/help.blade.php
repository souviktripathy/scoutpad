@extends('frontend.common.layout')

@section('content')

<div class="banner-top owl-carousel owl-theme">
        <div class="item">
            <img src="{{ URL::asset('public/theme/images/help-banner.jpg') }}" alt="">
            <div class="banner-text">
                <h1>Passive Real Estate Investing</h1>
                <h5>This is not an offer of securities. Read the general disclaimer here.</h5>
            </div>
        </div>
    </div>



    <section class="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="helpheadingsegment">
                        <h2 class="helpheading">Welcome to our help center</h2>
                    </div>
                    <div class="triangle-down"></div>
                    <p class="about-text">If you don't find an answer to your question below, please contact us at help@scoutpads.com.</p>

                    <p class="about-text">FYI - the answers below don't represent investment or tax advice. The general disclaimer can be found here. </p>
                </div>
            </div>
        </div>
    </section>


    <section class="question-area">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <?php $i=1; ?>
                @foreach($faqs_data as $faq)
                <div class="card" style="margin-bottom: 20px;">
                    <div class="panel-heading card-header" id="heading{{$faq->id}}">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}"
                                aria-expanded="true" aria-controls="collapseOne" style="width: 100%;">
                                <h5 class="text-left" style="position: absolute;">{{$i}}. {{$faq->question}}</h5>
                                <i class="more-less fa fa-minus" aria-hidden="true" style="float: right;"></i>
                            </button>
                        </h2>
                    </div>
                    <div class="container questionbody-contain">
                    <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#accordionExample">
                        <div class="card-body">{{$faq->answer}}</div>
                    </div>
                </div>
                </div>
                <?php $i++; ?>
                @endforeach
            </div>

             
            <div class="last-section">
                @foreach($faqs_data_main as $faq_main)
                <h5>{{$faq_main->question}}</h5>
                <div class="last-sec-body">{{$faq_main->answer}}</div>
                @endforeach
            </div>
        </div>
    </section>


    

   

@endsection