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
                          <h2 class="breadcrumb-title">Artikel</h2>
                          <!-- breadcrumb-list start -->
                          <ul class="breadcrumb-list">
                              <li class="breadcrumb-item"><a href="{{route('publik')}}">Home</a></li>
                              <li class="breadcrumb-item active">All Category</li>
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

<!--===========  feature-icon-wrapper  Start =============-->
<div class="feature-icon-wrapper section-space--ptb_100">
  <div class="container">

      {{-- <div class="row">
          <div class="col-lg-12">
              <div class="section-title-wrap text-center section-space--mb_40">
                  <h3 class="heading">Kategori Artikel <br> we provide <span class="text-color-primary"> truly prominent IT solutions.</span></h3>
              </div>
          </div>
      </div> --}}

      <div class="row">
          <div class="col-12">
              <div class="feature-list__one">
                  <div class="row">
                    @foreach ($category as $i)
                    <div class="col-lg-3 col-md-6">
                        <!-- ht-box-icon Start -->
                        <div class="ht-box-icon style-01 single-svg-icon-box">
                            <div class="icon-box-wrap">
                                <div class="icon">
                                    <img class="svg-icon" id="svg-icon-1" src="{{asset('assets/images/svg/'.$i->image)}}" alt="">
                                    {{-- <img class="svg-icon" id="svg-icon-1" data-svg-icon="{{asset('assets/images/svg/'.$i->image)}}" alt=""> --}}

                                    {{-- <div  data-svg-icon="{{asset('assets/images/svg/'.$i->image)}}"></div> --}}
                                </div>
                                <div class="content">
                                    <h5 class="heading">{{$i->name}} </h5>
                                    <div class="text">{{$i->deskripsi}}
                                    </div>
                                    <div class="feature-btn">
                                    <a href="{{route('artikel.category',$i->slug)}}">
                                            <span class="button-text">Discover now</span>
                                            <i class="far fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ht-box-icon End -->
                    </div>
                    @endforeach
                      
                      <div class="col-lg-3 col-md-6">
                          <!-- ht-box-icon Start -->
                          <div class="ht-box-icon style-01 single-svg-icon-box">
                              <div class="icon-box-wrap">
                                  <div class="icon">
                                      <div class="svg-icon" id="svg-icon-2" data-svg-icon="assets/images/svg/linea-basic-case.svg"></div>
                                  </div>
                                  <div class="content">
                                      <h5 class="heading">IT Management</h5>
                                      <div class="text">It’s possible to simultaneously manage and transform information from one server to another.
                                      </div>
                                      <div class="feature-btn">
                                          <a href="#">
                                              <span class="button-text">Discover now</span>
                                              <i class="far fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ht-box-icon End -->
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <!-- ht-box-icon Start -->
                          <div class="ht-box-icon style-01 single-svg-icon-box">
                              <div class="icon-box-wrap">
                                  <div class="icon">
                                      <div class="svg-icon" id="svg-icon-3" data-svg-icon="assets/images/svg/linea-basic-alarm.svg"></div>
                                  </div>
                                  <div class="content">
                                      <h5 class="heading">Data Security</h5>
                                      <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                      </div>
                                      <div class="feature-btn">
                                          <a href="#">
                                              <span class="button-text">Discover now</span>
                                              <i class="far fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ht-box-icon End -->
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <!-- ht-box-icon Start -->
                          <div class="ht-box-icon style-01 single-svg-icon-box">
                              <div class="icon-box-wrap">
                                  <div class="icon">
                                      <div class="svg-icon" id="svg-icon-4" data-svg-icon="assets/images/svg/linea-basic-geolocalize-05.svg"></div>
                                  </div>
                                  <div class="content">
                                      <h5 class="heading">Business Reform</h5>
                                      <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                      </div>
                                      <div class="feature-btn">
                                          <a href="#">
                                              <span class="button-text">Discover now</span>
                                              <i class="far fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ht-box-icon End -->
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <!-- ht-box-icon Start -->
                          <div class="ht-box-icon style-01 single-svg-icon-box">
                              <div class="icon-box-wrap">
                                  <div class="icon">
                                      <div class="svg-icon" id="svg-icon-5" data-svg-icon="assets/images/svg/linea-ecommerce-money.svg"></div>
                                  </div>
                                  <div class="content">
                                      <h5 class="heading">Infrastructure Plan</h5>
                                      <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                      </div>
                                      <div class="feature-btn">
                                          <a href="#">
                                              <span class="button-text">Discover now</span>
                                              <i class="far fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ht-box-icon End -->
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <!-- ht-box-icon Start -->
                          <div class="ht-box-icon style-01 single-svg-icon-box">
                              <div class="icon-box-wrap">
                                  <div class="icon">
                                      <div class="svg-icon" id="svg-icon-6" data-svg-icon="assets/images/svg/linea-basic-spread-text-bookmark.svg"></div>
                                  </div>
                                  <div class="content">
                                      <h5 class="heading">Firewall Advance</h5>
                                      <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                      </div>
                                      <div class="feature-btn">
                                          <a href="#">
                                              <span class="button-text">Discover now</span>
                                              <i class="far fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ht-box-icon End -->
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <!-- ht-box-icon Start -->
                          <div class="ht-box-icon style-01 single-svg-icon-box">
                              <div class="icon-box-wrap">
                                  <div class="icon">
                                      <div class="svg-icon" id="svg-icon-7" data-svg-icon="assets/images/svg/linea-music-headphones.svg"></div>
                                  </div>
                                  <div class="content">
                                      <h5 class="heading">Desktop Computing</h5>
                                      <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                      </div>
                                      <div class="feature-btn">
                                          <a href="#">
                                              <span class="button-text">Discover now</span>
                                              <i class="far fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ht-box-icon End -->
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <!-- ht-box-icon Start -->
                          <div class="ht-box-icon style-01 single-svg-icon-box">
                              <div class="icon-box-wrap">
                                  <div class="icon">
                                      <div class="svg-icon" id="svg-icon-8" data-svg-icon="assets/images/svg/linea-basic-gear.svg"></div>
                                  </div>
                                  <div class="content">
                                      <h5 class="heading">Software Engineering</h5>
                                      <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                      </div>
                                      <div class="feature-btn">
                                          <a href="#">
                                              <span class="button-text">Discover now</span>
                                              <i class="far fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ht-box-icon End -->
                      </div>
                      {{-- <div class="col-12">
                          <div class="section-under-heading text-center section-space--mt_60">Can’t find your industry? <a href="#"> Contact us now!</a></div>
                      </div> --}}
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--===========  feature-icon-wrapper  End =============-->
@endsection

@section('js')
    
@endsection