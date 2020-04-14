    <!--
    *******************
    FOOTER
    *******************
    -->
    <link href="css/gdpr-cookie.css" rel="stylesheet">
    <footer class="footer">
      <img class="logo-bg logo-footer" src="img/symbol.svg" alt="logo">
      <div class="container">
        <div class="footer-top">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="heading">Hosting</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="hosting">Shared Hosting</a></li>
                <li class="menu-item"><a href="dedicated">Dedicated Server</a></li>
                <li class="menu-item"><a href="vps">Cloud Virtual (VPS)</a></li>
                <li class="menu-item"><a href="domains">Domain Names</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Support</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="login">myAntler</a></li>
                <li class="menu-item"><a href="knowledgebase-list">Knowledge Base</a></li>
                <li class="menu-item"><a href="contact">Contact Us</a></li>
                <li class="menu-item"><a href="faq">FAQ</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Company</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="about">About Us</a> </li>
                <li class="menu-item"><a href="elements">Features</a></li>
                <li class="menu-item"><a href="blog">Blog</a></li>
                <li class="menu-item"><a href="legal">Legal</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <a><img class="svg logo-footer" src="img/logo.svg" alt="logo"></a>
              <div class="copyrigh">©2020 Antler - All rights reserved</div>
              <div class="soc-icons">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="subcribe news">
        <div class="container">
          <div class="row">
            <form action="#" class="w-100">
              <div class="col-md-6 offset-md-3">
                <div class="general-input">
                  <input type="email" name="email" placeholder="Enter your email address" class="fill-input">
                  <input type="submit" value="SUBSCRIBE" class="btn btn-default-yellow-fill">
                </div>
              </div>
              <div class="col-md-6 offset-md-3 text-center pt-4">
                <p>Subscribe to our newsletter to receive news and updates</p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <ul class="footer-menu">
                <li class="menu-item by c-grey">Hybrid Design With ♥ by
                  <a href="http://inebur.com/" target="_blank">inebur</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="payment-list">
                <li><p>Payments We Accept</p></li>
                <li><i class="fab fa-cc-paypal"></i></li>
                <li><i class="fab fa-cc-visa"></i></li>
                <li><i class="fab fa-cc-mastercard"></i></li>
                <li><i class="fab fa-cc-apple-pay"></i></li>
                <li><i class="fab fa-cc-discover"></i></li>
                <li><i class="fab fa-cc-amazon-pay"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{asset('js/scripts.min.js')}}"></script>
    <script src="{{asset('js/gdpr-cookie.js')}}"></script>
    <script>
    $.gdprcookie.init({});
    $(document.body)
    .on("gdpr:show", function() {
    console.log("Cookie dialog is shown");
    })
    .on("gdpr:accept", function() {
    var preferences = $.gdprcookie.preference();
    console.log("Preferences saved:", preferences);
    })
    .on("gdpr:advanced", function() {
    console.log("Advanced button was pressed");
    });
    if ($.gdprcookie.preference("marketing") === true) {
    console.log("This should run because marketing is accepted.");
    }
    </script>