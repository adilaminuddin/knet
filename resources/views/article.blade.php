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
                    <h2 class="breadcrumb-title">Grid Masonry</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Grid Masonry</li>
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
<!--====================  Blog Area Start ====================-->
<div class="blog-pages-wrapper section-space--pt_100 section-space--pb_70">
    <div class="container masonry-activation">
        <div class="row clearfix masonry-wrap">
            @foreach ($posts as $i)
            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-masonry">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="assets/images/blog/blog-01-370x370.jpg" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info text-center">
                        <div class="post-meta justify-content-center">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                {{$i->created_at}}
                            </div>
                            <div class="post-view">
                                <span class="meta-icon far fa-eye"></span>
                                {{$i->view_count}} views
                            </div>
                        </div>


                        <h5 class="post-title font-weight--bold">
                        <a href="artikel/{{$i->slug}}">{{$i->title}}</a>
                        </h5>

                        <div class="post-excerpt mb-20">
                            {!!$i->body!!}
                        </div>

                        <div class="post-read-more">
                        <a href="artikel/.{{$i->slug}}" class="btn-read-more">
                                Read more
                                <i class="far fa-long-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>
            @endforeach
            
            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-masonry">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="assets/images/blog/blog-08-370x247.jpg" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info text-center">
                        <div class="post-meta justify-content-center">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                January 14, 2019
                            </div>
                            <div class="post-view">
                                <span class="meta-icon far fa-eye"></span>
                                526 views
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="#">How Technology Made Businesses More Efficient</a>
                        </h5>

                        <div class="post-excerpt mb-20">
                            <p>They play a role in making operations more seamless, bridging the gap between authorities, consumers and businesses. …</p>
                        </div>

                        <div class="post-read-more">
                            <a href="#" class="btn-read-more">
                                Read more
                                <i class="far fa-long-arrow-right ml-1"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>


            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-masonry">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail video-popup">
                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link">
                            <div class="single-popup-wrap">
                                <img class="img-fluid" src="assets/images/blog/blog-07-370x230.jpg" alt="">
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
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info text-center">
                        <div class="post-meta justify-content-center">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                January 14, 2019
                            </div>
                            <div class="post-view">
                                <span class="meta-icon far fa-eye"></span>
                                287 views
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="#">Data Secure on Transitioning to a New Office</a>
                        </h5>

                        <div class="post-excerpt mb-20">
                            <p>It is far wiser to do your own installations and ensure that all data flowing through the organization …</p>
                        </div>

                        <div class="post-read-more">
                            <a href="#" class="btn-read-more">
                                Read more
                                <i class="far fa-long-arrow-right ml-1"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>

            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-masonry">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="assets/images/blog/blog-02-370x246.jpg" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info text-center">
                        <div class="post-meta justify-content-center">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                January 22, 2019
                            </div>
                            <div class="post-view">
                                <span class="meta-icon far fa-eye"></span>
                                56 views
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="#">How Wireless Technology is Changing Business</a>
                        </h5>

                        <div class="post-excerpt mb-20">
                            <p>They play a role in making operations more seamless, bridging the gap between authorities, consumers and businesses. …</p>
                        </div>

                        <div class="post-read-more">
                            <a href="#" class="btn-read-more">
                                Read more
                                <i class="far fa-long-arrow-right ml-1"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>


            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-masonry">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="assets/images/blog/blog-07-370x230.jpg" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info text-center">
                        <div class="post-meta justify-content-center">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                January 10, 2019
                            </div>
                            <div class="post-view">
                                <span class="meta-icon far fa-eye"></span>
                                336 views
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="#">The Keys to Persuading Customers Nowadays</a>
                        </h5>

                        <div class="post-excerpt mb-20">
                            <p>They play a role in making operations more seamless, bridging the gap between authorities, consumers and businesses. …</p>
                        </div>

                        <div class="post-read-more">
                            <a href="#" class="btn-read-more">
                                Read more
                                <i class="far fa-long-arrow-right ml-1"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>

            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-masonry">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="assets/images/blog/blog-05-370x208.jpg" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info text-center">
                        <div class="post-meta justify-content-center">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                January 10, 2019
                            </div>
                            <div class="post-view">
                                <span class="meta-icon far fa-eye"></span>
                                336 views
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="#">Blockchain Technology Effects on Logistics Sector?</a>
                        </h5>

                        <div class="post-excerpt mb-20">
                            <p>They play a role in making operations more seamless, bridging the gap between authorities, consumers and businesses. …</p>
                        </div>

                        <div class="post-read-more">
                            <a href="#" class="btn-read-more">
                                Read more
                                <i class="far fa-long-arrow-right ml-1"></i>
                            </a>
                        </div>

                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>

        </div>
    </div>
</div>
<!--====================  Blog Area End  ====================-->
@endsection

@section('js')
    
@endsection