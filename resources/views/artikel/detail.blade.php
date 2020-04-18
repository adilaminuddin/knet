
    <div class="col-lg-4 col-md-6 mb-4">

      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="{{ asset('images/'.$p->featured) }}" class="card-img-top" alt="">
          <a href="https://mdbootstrap.com/education/tech-marketing/web-push-introduction/" target="_blank">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h4 class="card-title">{{ $p->title }}</h4>
          <a href="" class="badge badge-primary">{{ $p->category->name }}</a>

          @foreach($p->tags as $t)
          <a href="" class="badge badge-success">{{ $t->name }}</a>
          @endforeach
          <!--Text-->
          <p class="card-text">
            @php echo substr($p->content,0,150); @endphp
          </p>
          <a href="{{ route('post.detail',$p->slug) }}" target="_blank" class="btn btn-primary btn-md">Start
            tutorial
            <i class="fas fa-play ml-2"></i>
          </a>
        </div>

      </div>
      <!--/.Card-->

    </div>
    <!--Grid column-->


  <!-- ***** BANNER ***** -->
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
            @foreach($posts as $p)
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
                      <img data-src="{{ asset('img/'.$p->featured) }}" class="img-responsive lazyload" alt="photo" >
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
                    <div class="heading blog"><a href="#">Choose between Dedicated or VPS Server</a></div>
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
<!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->