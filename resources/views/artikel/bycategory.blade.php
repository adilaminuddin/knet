@extends('layouts.frontend')

@section('css')
    
@endsection

@section('content')
      <!-- ***** BANNER ***** -->
  <div class="top-header scrollme">
    <img class="svg pattern" src="patterns/promo-w.svg" alt="promos">
    <div class="total-grad-pink-blue-intense"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1" data-translatey="-50">
            <div class="float-right"><a href="https://themeforest.net/item/antler-hosting-provider-whmcs-template/23139614" target="_blank" class="btn btn-default-pink-fill">Buy Antler Now</a></div>
            <div class="heading">Black Friday <b class="c-pink">Sale*</b></div>
            <div class="subheding">Antler template was build in HTML5 and CSS3 technology based on Bootstrap Framework and developed to directly integrate with the WHMCS Client Area, through login, domain search and Hosting e VPS plans (already integrated).</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** COUNTDOWN ***** -->
  <div class="pt-4 pb-4 sec-bg2 m-0 alert">
    <button type="button" class="close p" data-dismiss="alert">×</button>
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h4 class="count-txt pr-2"><span class="c-pink">*</span> Special Offer - 50% Off Antler Template </h4>
        </div>
        <div class="col-md-5">
          <div class="count-content float-right">
            <h4><strong id="specialclock" class="clock c-pink"></strong></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ***** PROMO PLANS ***** -->
  @include('frontpart.artpost')
  <!-- ***** PROMOS ***** -->
  <section class="services sec-normal exapath sec-bg4 scrollme">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section-heading">Smart Main Features Available</h2>
            <p class="section-subheading">Check all powerfull highlights through the item page <a href="https://themeforest.net/item/antler-hosting-provider-whmcs-template/23139614" target="_blank" class="golink"><b>here</b></a></p>
          </div>
          <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatex="-60" data-easeinout="0">
            <div class="service-section">
              <div class="plans badge feat bg-pink">i18next</div>
              <img class="svg" src="{{asset('fonts/svg/location.svg')}}" alt="">
              <div class="title">i18n Language Translation</div>
              <p class="subtitle">
                i18next is a Internationalisation framework written in and for JavaScript.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="60" data-easeinout="0">
            <div class="service-section">
              <div class="plans badge feat bg-pink">contact form</div>
              <img class="svg" src="{{asset('fonts/svg/emailopen.svg')}}" alt="">
              <div class="title">Working PHP Contact Form</div>
              <p class="subtitle">
                Send the form contents to your email address easily through a well-written php code.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatex="60" data-easeinout="0">
            <div class="service-section">
              <div class="plans badge feat bg-grey">live chat</div>
              <img class="svg" src="{{asset('fonts/svg/livechat.svg')}}" alt="">
              <div class="title">Tawk.to Modern Live Chat</div>
              <p class="subtitle">
                Tawk.to is a free messaging app to monitor and chat with the visitors on your website.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js')
    
@endsection