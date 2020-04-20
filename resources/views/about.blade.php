@extends('layouts.frontend')

@section('css')
    
@endsection

@section('content')
<div class="about-banner-wrap banner-space about-us-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <div class="about-banner-content text-center">
                    <h1 class="mb-15 text-white">About Us</h1>
                    <h5 class="font-weight--normal text-white">Kami menyediakan layanan jaringan Provider di daerah tertentu untuk menjangkau wilayah terpencil sekalipun</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===========  feature-large-images-wrapper  Start =============-->
<div class="feature-large-images-wrapper section-space--ptb_100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_60">
                    <h6 class="section-sub-title mb-20">Our company</h6>
                    <h3 class="heading">We run all kinds of IT services that <br> vow your <span class="text-color-primary"> success</span></h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>

        @include('frontpart.cyber38th')


        @include('frontpart.abtus3')
    </div>
</div>
<!--===========  feature-large-images-wrapper  End =============-->
@include('frontpart.brosurdlnd')
<!--========= About Delivering Wrapper Start ===========-->
@include('frontpart.layananoptimal')
@include('frontpart.counterblu')
@include('frontpart.testimoni1')

@include('frontpart.brndlgsldr')
@include('frontpart.contkp1')

@endsection

@section('js')
    
@endsection