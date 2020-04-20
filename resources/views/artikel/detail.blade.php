@extends('layouts.frontend')
@section('breadcrumb')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="breadcrumb_box text-center">
                  <h2 class="breadcrumb-title">Blog Details</h2>
                  <!-- breadcrumb-list start -->
                  <ul class="breadcrumb-list">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active">Blog Details</li>
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
  {{-- <!-- ***** BANNER ***** -->
  <div class="top-header">
    <div class="total-grad-inverse"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="heading">Antler Blog</div>
            <div class="subheding">The latest news and announcements about our cloud services.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** BLOG DETAILS ***** -->
  <section class="shopping blog sec-normal sec-bg2 motpath">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="wrap-blog">
            @foreach($ps as $p)
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="sec-normal pt-0">
                  <div class="sec-main sec-bg1">

                    <div class="action-content">
                      <div class="action">
                        <div class="metatag">
                          <div class="kudos">
                            <a href="#"><i class="icon-favorite pl-0"></i> 33</a>
                            <a href="#"><i class="icon-talk"></i> 12</a>
                            <a href="#"><i class="icon-thumbup"></i> 99</a>
                          </div>
                          <div class="rating">
                            <i class="fas fa-star c-yellow"></i>
                            <i class="fas fa-star c-yellow"></i>
                            <i class="fas fa-star c-yellow"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>
                      <img data-src="{{ asset('img/post/'.$p->featured) }}" class="img-responsive lazyload" alt="photo" >
                    </div>

                    <div class="row text-blog">
                      <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="timer">
                          <i class="icon-calendar"></i>
                          <span class="pl-2 pr-4"> April 11, 2018</span>
                          <i class="icon-clock"></i>
                          <span class="pl-2"> 8.00 pm</span>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="social-icon">
                          <a href=""><i class="fab fa-facebook-f"></i></a>
                          <a href=""><i class="fab fa-twitter"></i></a>
                          <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="infos">
                      <i class="fa fa-thumbs-o-up"></i>
                      <span>980</span>
                      <i class="fa fa-comments-o"></i>
                      <span>79</span>
                    </div><hr>
                    <div class="heading blog"><a href="#">{{$p->title}}</a></div>
                    <div class="blog-info">
                      <span> @php echo substr($p->content,0,150); @endphp On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</span><br><br>
                      <span><strong><em>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue."</em></strong></span>
                    </div>
                    <nav class="pt-5" aria-label="navigation example">
                      <ul class="pagination pagination-sm mb-0">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="row">
              <div class="col-md-12 col-lg-12 mb-80">
                <div class="sec-main sec-bg1">
                  <div class="heading blog"><a href="#">3 Comments</a></div>
                  <div class="line"></div>
                  <div class="media">
                    <a href="#" class="plans badge badge-pill feat bg-green">Reply</a>
                    <img data-src="img/topbanner01.jpg" class="media-object lazyload" alt="photo">
                    <div class="media-body">
                      <h4 class="media-heading"><a href="">Miss Lucia</a></h4>
                      <div class="text-blog mt-0">
                        <i class="icon-calendar"></i>
                        <span class="pl-2 pr-4"> April 11, 2018</span>
                        <i class="icon-clock"></i>
                        <span class="pl-2"> 8.00 pm</span>
                      </div>
                      <div class="text-comments">
                        Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. enim ad minim
                      </div>
                    </div>
                  </div><hr>
                  <div class="media answer">
                    <a href="#" class="plans badge badge-pill feat bg-green">Reply</a>
                    <img data-src="img/topbanner04.jpg" class="media-object lazyload" alt="photo">
                    <div class="media-body">
                      <h4 class="media-heading"><a href="">Mr. White</a></h4>
                      <div class="text-blog mt-0">
                        <i class="icon-calendar"></i>
                        <span class="pl-2 pr-4"> April 11, 2018</span>
                        <i class="icon-clock"></i>
                        <span class="pl-2"> 8.00 pm</span>
                      </div>
                      <div class="text-comments">
                        Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. enim ad minim vniam, quis nostrud exercitation ullamco.
                      </div>
                    </div>
                  </div><hr>
                  <div class="media">
                    <a href="#" class="plans badge badge-pill feat bg-green">Reply</a>
                    <img data-src="img/topbanner06.jpg" class="media-object lazyload" alt="photo">
                    <div class="media-body">
                      <h4 class="media-heading"><a href="">Orlova Ekaterina</a></h4>
                      <div class="text-blog mt-0">
                        <i class="icon-calendar"></i>
                        <span class="pl-2 pr-4"> April 11, 2018</span>
                        <i class="icon-man"></i>
                        <span class="pl-2"> by Philips</span>
                      </div>
                      <div class="text-comments">
                        Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. enim ad minim
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sec-main sec-bg1">
              <div class="randomline">
                <div class="bigline"></div>
                <div class="smallline"></div>
              </div>
              <div class="cd-filter-block mb-0">
                <div class="cd-filter-content p-0 sec-bx">
                  <div class="heading blog"><a href="#">Leave a Comment</a></div>
                  <div class="row">
                    <div class="col-md-12 col-lg-6">
                      <label><i class="fas fa-user-tie"></i></label>
                      <input id="fullname" type="text" name="fullname" placeholder="Full Name" required="">
                    </div>
                    <div class="col-md-12 col-lg-6">
                      <label><i class="fas fa-envelope"></i></label>
                      <input id="email" type="email" name="email" placeholder="Email Address" required="">
                    </div>
                    <div class="col-md-12">
                      <label><i class="fas fa-file-alt"></i></label>
                      <input id="subject" type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mt-4">
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message..."></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <input name="newsletter" type="checkbox" id="checkbox" class="filter">
                      <label for="checkbox" class="checkbox-label c-grey mb-4" ><div>I have read and accept the terms of the privacy policy - <a href="legal" class="golink">RGPD</a></div></label>
                      <button type="submit" value="Submit" class="btn btn-default-yellow-fill">Submit Comment</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-md-4">
          <aside class="sidebar">
            <div class="cd-filter-block checkbox-group">
              <label><a href=""><i class="fas fa-search"></i></a></label>
              <input type="text" class="input" placeholder="Search..."/>
            </div>
            <div class="posts">
              <div class="tabs">
                <div class="tabs-header">
                  <ul class="list">
                    <li class="active">Most popular</li>
                    <li>Newest article</li>
                  </ul>
                </div>
                <div class="tabs-content">
                  <div class="tabs-item active">
                    <div class="item-wrap">
                      <a href=""><img data-src="img/topbanner06.jpg" class="img lazyload" alt=""></a>
                      <div class="heading-article"><a href="">Domains</a></div>
                      <a href="" class="c-grey"><small><i class="far fa-file-alt"></i> What can I do with a domain..</small></a>
                    </div>
                    <div class="item-wrap">
                      <a href=""><img data-src="img/topbanner05.jpg" class="img lazyload" alt=""></a>
                      <div class="heading-article"><a href="">Cloud VPS</a></div>
                      <a href="" class="c-grey"><small><i class="far fa-file-alt"></i> What is a Cloud VPS Server..</small></a>
                    </div>
                    <div class="item-wrap">
                      <a href=""><img data-src="img/topbanner03.jpg" class="img lazyload" alt=""></a>
                      <div class="heading-article"><a href="">Hosting</a></div>
                      <a href="" class="c-grey"><small><i class="far fa-file-alt"></i> Does Shared Web Hosting..</small></a>
                    </div>
                  </div>
                  <div class="tabs-item">
                    <div class="item-wrap">
                      <a href=""><img data-src="img/topbanner04.jpg" class="img lazyload" alt=""></a>
                      <div class="heading-article"><a href="">Dedicated</a></div>
                      <a href="" class="c-grey"><small><i class="far fa-file-alt"></i> How to install Control Panel..</small></a>
                    </div>
                    <div class="item-wrap">
                      <a href=""><img data-src="img/topbanner02.jpg" class="img lazyload" alt=""></a>
                      <div class="heading-article"><a href="">Cerrtificates SSL</a></div>
                      <a href="" class="c-grey"><small><i class="far fa-file-alt"></i> What are SSL certificates and..</small></a>
                    </div>
                    <div class="item-wrap">
                      <a href=""><img data-src="img/topbanner01.jpg" class="img lazyload" alt=""></a>
                      <div class="heading-article"><a href="">Cloud Reseller</a></div>
                      <a href="" class="c-grey"><small><i class="far fa-file-alt"></i> What exactly is Cloud Reseller..</small></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="categories">
              <div class="heading active">Archives</div>
              <div class="line active"></div>
              <div class="heading"><a href="">February</a> <span>2018</span></div>
              <div class="line"></div>
              <div class="heading"><a href="">April</a> <span>2017</span></div>
              <div class="line"></div>
              <div class="heading"><a href="">May</a> <span>2016</span></div>
              <div class="line"></div>
              <div class="heading"><a href="">August</a> <span>2014</span></div>
              <div class="line"></div>
              <div class="heading"><a href="">October</a> <span>2013</span></div>
              <div class="line"></div>
              <div class="heading"><a href="">December</a> <span>2012</span></div>
            </div>
            <div class="tags">
              <div class="heading active">Product tags</div>
              <div class="line active"></div>
              <a href="" class="c-grey mr-3">Hosting</a>
              <a href="" class="c-grey mr-3">Cloud</a>
              <a href="" class="c-grey mr-3">Reseller</a>
              <a href="" class="c-grey mr-3">Email</a>
              <a href="" class="c-grey mr-3">VPS</a>
              <a href="" class="c-grey mr-3">Dedicated</a>
              <a href="" class="c-grey mr-3">Domains</a>
              <a href="" class="c-grey mr-3">Certificates SSL</a>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
<!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** --> --}}
 <!--====================  Blog Area Start ====================-->
 <div class="blog-pages-wrapper section-space--ptb_100">
  <div class="container">
      <div class="row">

          <div class="col-lg-4 order-lg-2 order-2">
              <div class="page-sidebar-content-wrapper page-sidebar-right small-mt__40 tablet-mt__40">

                  <!--=== Sidebar Widget Start ===-->
                  <div class="sidebar-widget search-post wow move-up">
                      <div class="widget-title">
                          <h4 class="sidebar-widget-title">Search</h4>
                      </div>
                      <form action="#" method="post">
                          <div class="widget-search">
                              <input type="text" placeholder="Enter search keyword…">

                              <button type="submit" class="search-submit">
                                  <span class="search-btn-icon fa fa-search"></span>
                              </button>

                          </div>
                      </form>
                  </div>
                  <!--=== Sidebar Widget End ===-->


                  <!-- === Sidebar Widget Start === -->
                  <div class="sidebar-widget widget-blog-recent-post wow move-up">

                      <h4 class="sidebar-widget-title">Recent Posts</h4>

                      <ul>
                          <li>
                              <a href="#">Ideas for High Returns on Investment</a>
                          </li>
                          <li>
                              <a href="#">How Technology Made Businesses More Efficient</a>
                          </li>
                          <li>
                              <a href="#">Data Secure on Transitioning to a New Office</a>
                          </li>
                          <li>
                              <a href="#">The Keys to Persuading Customers Nowadays</a>
                          </li>
                          <li>
                              <a href="#">Blockchain Technology Effects on Logistics Sector?</a>
                          </li>
                      </ul>

                  </div>
                  <!-- === Sidebar Widget End === -->

                  <!-- === Sidebar Widget Start === -->
                  <div class="sidebar-widget widget-images wow move-up">

                      <img class="img-fluid" src="assets/images/blog/blog-sidebar-ads.jpg" alt="">

                  </div>
                  <!-- === Sidebar Widget End === -->

                  <!-- === Sidebar Widget Start === -->
                  <div class="sidebar-widget widget-tag wow move-up">
                      <h4 class="sidebar-widget-title">Tags</h4>
                      <a href="#" class="ht-btn ht-btn-xs">business</a>
                      <a href="#" class="ht-btn ht-btn-xs">featured</a>
                      <a href="#" class="ht-btn ht-btn-xs">IT Security</a>
                      <a href="#" class="ht-btn ht-btn-xs">IT services</a>

                  </div>
                  <!-- === Sidebar Widget End === -->
              </div>
          </div>

          <div class="col-lg-8 order-lg-1 order-1">
              <div class="main-blog-wrap">
                  <!--======= Single Blog Item Start ========-->
                  <div class="single-blog-item">
                      <!-- Post Feature Start -->
                      <div class="post-feature blog-thumbnail  wow move-up">
                          <img class="img-fluid" src="assets/images/blog/blog-07-770x400.jpg" alt="Blog Images">
                      </div>
                      <!-- Post Feature End -->

                      <!-- Post info Start -->
                      <div class="post-info lg-blog-post-info  wow move-up">
                          <div class="post-categories">
                              <a href="#"> Success Story, Tips</a>
                          </div>

                          <h3 class="post-title">How Wireless Technology is Changing Business</h3>

                          <div class="post-meta mt-20">
                              <div class="post-author">
                                  <a href="#">
                                      <img class="img-fluid avatar-96" src="assets/images/team/admin.jpeg" alt=""> Harry Ferguson
                                  </a>
                              </div>
                              <div class="post-date">
                                  <span class="far fa-calendar meta-icon"></span>
                                  January 14, 2019
                              </div>
                              <div class="post-view">
                                  <span class="meta-icon far fa-eye"></span>
                                  346 views
                              </div>
                              <div class="post-comments">
                                  <span class="far fa-comment-alt meta-icon"></span>
                                  <a href="#" class="smooth-scroll-link">4 Comments</a>
                              </div>
                          </div>

                          <div class="post-excerpt mt-15">
                            @foreach ($ps as $p)
                              {!!$p->content!!}
                             
                              @endforeach
                              <div class="entry-post-share-wrap  border-bottom">
                                  <div class="row align-items-center">
                                      <div class="col-lg-6 col-md-6">
                                          <div class="entry-post-tags">
                                              <div class="tagcloud-icon">
                                                  <i class="far fa-tags"></i>
                                              </div>
                                              <div class="tagcloud">
                                                  <a href="#"> business</a>, <a href="#">IT Security</a>, <a href="#">IT services</a>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-lg-6 col-md-6">
                                          <div id="entry-post-share" class="entry-post-share">
                                              <div class="share-label">
                                                  Share this post
                                              </div>
                                              <div class="share-media">
                                                  <span class="share-icon far fa-share-alt"></span>

                                                  <div class="share-list">
                                                      <a class="hint--bounce hint--top hint--primary twitter" target="_blank" aria-label="Twitter" href="#">
                                                          <i class="fab fa-twitter"></i>
                                                      </a>
                                                      <a class="hint--bounce hint--top hint--primary facebook" target="_blank" aria-label="Facebook" href="#">
                                                          <i class="fab fa-facebook-f"></i>
                                                      </a>
                                                      <a class="hint--bounce hint--top hint--primary linkedin" target="_blank" aria-label="Linkedin" href="#">
                                                          <i class="fab fa-linkedin"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="entry-author">
                                  <div class="author-info">
                                      <div class="author-avatar">
                                          <img src="assets/images/team/avatar-06-90x90.jpeg" alt="">
                                          <div class="author-social-networks">
                                              <div class="inner">
                                                  <a class="hint--bounce hint--top hint--primary" aria-label="Twitter" href="#" target="_blank">
                                                      <i class="fab fa-twitter"></i>
                                                  </a>

                                                  <a class="hint--bounce hint--top hint--primary" aria-label="Facebook" href="#" target="_blank">
                                                      <i class="fab fa-facebook-f"></i>
                                                  </a>

                                                  <a class="hint--bounce hint--top hint--primary" aria-label="Instagram" href="#" target="_blank">
                                                      <i class="fab fa-instagram"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="author-description">
                                          <h6 class="author-name">Owen Christ</h6>

                                          <div class="author-biographical-info">
                                              Harry Ferguson is an author, blogger, and designer living in a suburb of Washington, DC. When he’s not designing, blogging, or writing, Ferguson can be found with his head in a book or pinning like a madman.
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="related-posts-wrapper">

                                  <div class="row">
                                      <div class="col-lg-6">
                                          <!-- Single Valid Post Start -->
                                          <a class="single-valid-post-wrapper" href="#">
                                              <div class="single-blog__item">
                                                  <div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-03-370x120.jpg">
                                                  </div>

                                                  <div class="post-content">
                                                      <h6 class="post-title font-weight--bold">Designers’ Identities & Social Unconscious Bias</h6>
                                                  </div>

                                              </div>
                                          </a>
                                          <!-- Single Valid Post End -->
                                      </div>
                                      <div class="col-lg-6">
                                          <!-- Single Valid Post Start -->
                                          <a class="single-valid-post-wrapper" href="#">
                                              <div class="single-blog__item">
                                                  <div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-05-370x120.jpg">
                                                  </div>

                                                  <div class="post-content">
                                                      <h6 class="post-title font-weight--bold">Designers’ Identities & Social Unconscious Bias</h6>
                                                  </div>

                                              </div>
                                          </a>
                                          <!-- Single Valid Post End -->
                                      </div>
                                  </div>
                              </div>

                              {{-- <div class="comment-list-wrapper">

                                  <div class="row">
                                      <div class="col-lg-12">
                                          <h4 class="widget-title section-space--mb_50">Comments (3) </h4>
                                      </div>
                                      <div class="col-lg-12">

                                          <ol class="comment-list">
                                              <li class="comment border-bottom">
                                                  <div class="comment-2">
                                                      <div class="comment-author vcard">
                                                          <img alt="" src="assets/images/team/coment.jpeg">
                                                      </div>
                                                      <div class="comment-content">
                                                          <div class="meta">
                                                              <h6 class="fn">Edna Watson</h6>
                                                          </div>
                                                          <div class="comment-text">
                                                              <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                          </div>

                                                          <div class="comment-actions">
                                                              <div class="comment-datetime"> November 16, 2018 at 4:31 am </div><span> | </span>
                                                              <a class="comment-reply-link" href="#">Reply</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </li><!-- comment End-->
                                              <li class="comment border-bottom">
                                                  <div class="comment-2">
                                                      <div class="comment-author vcard">
                                                          <img alt="" src="assets/images/team/comment-2.jpeg">
                                                      </div>
                                                      <div class="comment-content">
                                                          <div class="meta">
                                                              <h6 class="fn">Owen Christ</h6>
                                                          </div>
                                                          <div class="comment-text">
                                                              <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                          </div>

                                                          <div class="comment-actions">
                                                              <div class="comment-datetime"> November 19, 2018 at 4:31 am </div><span> | </span>
                                                              <a class="comment-reply-link" href="#">Reply</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </li><!-- comment End-->
                                              <li class="comment">
                                                  <div class="comment-5">
                                                      <div class="comment-author vcard">
                                                          <img alt="" src="assets/images/team/comment-3.jpeg">
                                                      </div>
                                                      <div class="comment-content">
                                                          <div class="meta">
                                                              <h6 class="fn">James Scott</h6>
                                                              <div class="comment-datetime">
                                                                  November 13, 2018 at 4:50 am </div>
                                                          </div>
                                                          <div class="comment-text">
                                                              <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                          </div>

                                                          <div class="comment-actions">
                                                              <div class="comment-datetime"> February 12, 2018 at 6:31 am </div><span> | </span>
                                                              <a class="comment-reply-link" href="#">Reply</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <ol class="children">
                                                      <li class="comment ">
                                                          <div class="comment-6">
                                                              <div class="comment-author vcard">
                                                                  <img alt="" src="assets/images/team/reply-comm.jpg">
                                                              </div>
                                                              <div class="comment-content">
                                                                  <div class="meta">
                                                                      <h6 class="fn">Harry Ferguson</h6>
                                                                      <div class="comment-datetime">
                                                                          February 13, 2019 at 4:51 am </div>
                                                                  </div>
                                                                  <div class="comment-text">
                                                                      <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                  </div>

                                                                  <div class="comment-actions">
                                                                      <div class="comment-datetime"> November 13, 2018 at 4:31 am </div><span> | </span>
                                                                      <a class="comment-reply-link" href="#">Reply</a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li><!-- comment End -->
                                                  </ol><!-- children End -->
                                              </li><!-- comment End-->
                                          </ol>
                                      </div>
                                  </div>
                              </div>

                              <div class="comment-list-wrapper">

                                  <div class="row">

                                      <div class="col-lg-12">
                                          <h4 class="widget-title mb-20">Leave your thought here </h4>
                                          <p>Your email address will not be published. Required fields are marked *</p>
                                      </div>

                                      <div class="col-lg-12">
                                          <div class="contact-from-wrapper section-space--mt_30">
                                              <form action="#" method="post">
                                                  <div class="contact-page-form">
                                                      <div class="contact-input">
                                                          <div class="contact-inner">
                                                              <input name="name" type="text" placeholder="Your Comment *">
                                                          </div>
                                                          <div class="contact-inner">
                                                              <input name="email" type="email" placeholder="Your Email *">
                                                          </div>

                                                      </div>
                                                      <div class="contact-inner contact-message">
                                                          <textarea name="comment" placeholder="Your Comment"></textarea>
                                                      </div>
                                                      <p class="comment-form-cookies-consent">
                                                          <input type="checkbox">
                                                          <label>Save my name, email, and website in this browser for the next time I comment.</label>
                                                      </p>
                                                      <div class="comment-submit-btn">
                                                          <button class="ht-btn ht-btn-md" type="submit">Submit</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div> --}}
                          </div>

                      </div>
                      <!-- Post info End -->
                  </div>
                  <!--===== Single Blog Item End =========-->
              </div>
          </div>
      </div>
  </div>
</div>
<!--====================  Blog Area End  ====================-->

@endsection