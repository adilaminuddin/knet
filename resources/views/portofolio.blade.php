@extends('layouts.frontend')

@section('css')
    
@endsection
@section('breadcrumb')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="breadcrumb_box text-center">
                  <h1 class="breadcrumb-title text-color-primary">Popup Video</h1>
                  <!-- breadcrumb-list start -->
                  <ul class="breadcrumb-list">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="index.html">Elements</a></li>
                      <li class="breadcrumb-item active">Popup Video</li>
                  </ul>
                  <!-- breadcrumb-list end -->
              </div>
          </div>
      </div>
  </div>
</div>
<!-- breadcrumb-area end -->
@endsection

@section('content')
<!--======== Popup Video Wrapper Start ==========-->
<div class="popup-video-wrapper section-space--pb_120 section-space--pt_90 ">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 video-popup text-center wow move-up">
              <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link mt-30">
                  <div class="single-popup-wrap">
                      <img class="img-fluid" src="assets/images/bg/home-processing-video-intro-slider-slide-01-image-01-570x420.jpg" alt="">
                      <div class="ht-popup-video video-overlay">
                          <div class="video-button__one">
                              <div class="video-play">
                                  <span class="video-play-icon"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-6 video-popup text-center wow move-up">
              <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                  <div class="single-popup-wrap">
                      <img class="img-fluid" src="assets/images/bg/home-processing-video-intro-slider-slide-01-image-01-570x420.jpg" alt="">
                      <div class="ht-popup-video video-button">
                          <div class="video-mark">
                              <div class="wave-pulse wave-pulse-1"></div>
                              <div class="wave-pulse wave-pulse-2"></div>
                          </div>
                          <div class="video-button__two">
                              <div class="video-play">
                                  <span class="video-play-icon"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>
      </div>
  </div>
</div>
<!--======== Popup Video Wrapper End ==========-->

@endsection

@section('js')
    
@endsection