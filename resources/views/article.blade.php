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
              <img class="svg" src="fonts/svg/location.svg" alt="">
              <div class="title">i18n Language Translation</div>
              <p class="subtitle">
                i18next is a Internationalisation framework written in and for JavaScript.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="60" data-easeinout="0">
            <div class="service-section">
              <div class="plans badge feat bg-pink">contact form</div>
              <img class="svg" src="fonts/svg/emailopen.svg" alt="">
              <div class="title">Working PHP Contact Form</div>
              <p class="subtitle">
                Send the form contents to your email address easily through a well-written php code.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatex="60" data-easeinout="0">
            <div class="service-section">
              <div class="plans badge feat bg-grey">live chat</div>
              <img class="svg" src="fonts/svg/livechat.svg" alt="">
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
<!-- ***** COUPONS ***** -->
<section class="getready sec-bg3 scrollme">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="column-support-txt animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatex="-60" data-easeinout="0">
          <div class="column-support-title">Get Antler now and save 50% off</div>
          <div class="column-support-subtitle">This all features and more makes Antler the Most Complete Hosting Template on the Market</div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="btn-floats">
          <a href="https://themeforest.net/item/antler-hosting-provider-whmcs-template/23139614" target="_blank" class="btn btn-default-pink-fill">Buy antler Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** PAYMENT TYPES ***** -->
<section class="services sec-normal sec-bg2">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 text-left">
          <h2 class="section-heading">Multiple Payment Types</h2>
          <p class="section-subheading">Different customers like to pay in different ways, and Antler lets you embrace them all. From international payment card providers like Visa and American Express to digital wallets and platforms like PayPal and WeChat Pay, <a href="payments" class="golink">we make it simple for you to complete transactions with ease.</a></p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="service-section">
            <img data-src="img/payments/visa.svg" class="lazyload" alt="">
            <hr>
            <p class="subtitle">
              Excepteur sint occaecat cupidatat
            </p>
            <a href="" class="btn btn-default-yellow-fill">Visa</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="service-section">
            <img data-src="img/payments/mastercard.svg" class="lazyload" alt="">
            <hr>
            <p class="subtitle">
              Excepteur sint occaecat cupidatat
            </p>
            <a href="" class="btn btn-default-yellow-fill">Mastercard</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="service-section">
            <img data-src="img/payments/americanexpress.svg" class="lazyload" alt="">
            <hr>
            <p class="subtitle">
              Excepteur sint occaecat cupidatat
            </p>
            <a href="" class="btn btn-default-yellow-fill">American</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="service-section">
            <img data-src="img/payments/discover.svg" class="lazyload" alt="">
            <hr>
            <p class="subtitle">
              Excepteur sint occaecat cupidatat
            </p>
            <a href="" class="btn btn-default-yellow-fill">Discover</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- ***** MAP ***** -->
  <section class="services maping sec-normal sec-grad-grey-to-grey">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 text-left">
            <h2 class="section-heading text-white">Our Datacenters are Located in 7 Regions</h2>
            <p class="section-subheading"><span class="golink">Lorem ipsum dolor</span> sit amet, consectetur adipiscing elit sed, do eiusmod tempor  <span class="c-pink">incididunt lorem ipsum</span> dolor sit amet</p>
          </div>
          <div class="col-md-12 pt-5 scrollme">
            <img data-src="patterns/map.svg" class="lazyload w-10 animateme" alt="Load Balancing" data-when="view" data-from="2" data-to="0" data-opacity="0">
            <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters montreal" data-original-title="Montreal" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
            <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters newyork" data-original-title="New York" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
            <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters portugal" data-original-title="Portugal" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
            <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters london" data-original-title="London" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
            <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters moskow" data-original-title="Moskow" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
            <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters hongkong" data-original-title="Hong Kong" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
            <span data-toggle="popover" data-container="body" data-trigger="hover" data-placement="top" title="" class="datacenters singapure" data-original-title="Singapure" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** CONTACT FORM ***** -->
  <section id="ticket" class="exapath pb-80">
    <div class="container">
      <div class="sec-main sec-up mb-0 sec-bg1">
        <div class="randomline">
          <div class="bigline"></div>
          <div class="smallline"></div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 cd-filter-block mb-0">
            <div class="form-contact cd-filter-content p-0 sec-bx">
              <h2 class="section-heading mb-1">Full out the Contact form to contact us</h2>
              <p >We Will Help You To Choose The Best Plan!</p>
              <form id="contactForm" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <label><i class="fas fa-user-tie"></i></label>
                    <input id="name" type="text" name="name" placeholder="Full Name" required="">
                  </div>
                  <div class="col-md-6">
                    <label><i class="fas fa-envelope"></i></label>
                    <input id="email" type="email" name="email" placeholder="Email Address" required="">
                  </div>
                  <div class="col-md-6">
                    <label><i class="fas fa-file-alt"></i></label>
                    <input id="subject" type="text" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="col-md-6">
                    <div class="cd-select mt-4">
                      <label class="db"></label>
                      <select id="department" name="department" class="select-filter">
                        <option value="">Choose Department</option>
                        <option value="Support/Help Desk">Support/Help Desk</option>
                        <option value="Commercial Department">Commercial Department</option>
                        <option value="Sales Department">Sales Department</option>
                        <option value="Schedule Metings">Schedule Metings</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-4">
                      <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message..."></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 mt-5">
                    <input name="newsletter" type="checkbox" id="checkbox" class="filter">
                    <label for="checkbox" class="checkbox-label c-grey mb-4" ><div>I have read and accept the terms of the privacy policy - <a href="legal" class="golink">RGPD</a></div></label>
                    <button type="submit" value="Submit" class="btn btn-default-yellow-fill float-left mr-3">Submit Ticket</button>
                    <button type="reset" value="reset" class="btn btn-default-fill mt-0 mb-3 mr-3">Reset</button><br>
                  </div>
                  <div id="msgSubmit" class="col-md-12 mt-4">
                    <h3 class="c-pink"> Message Submitted!</h3>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
@endsection

@section('js')
    
@endsection