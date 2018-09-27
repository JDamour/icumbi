<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Haus &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo">Icumbi<span></span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/search">Search</a></li>
            <li><a href="/house">Houses</a></li>
            <li><a href="agents.html">Agents</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <form action="/search" method="POST" role="search">
                <div class="probootstrap-field-group">
                  
                    
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text" placeholder="Search" name="search">
                    
                  
                  <button type="submit"><i class="icon-magnifying-glass t2"></i> Start Search</button>
                </div>
            </form>

          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <section >
    <div >
      <div >
        <div class="page-title probootstrap-animate">
          <div class="probootstrap-breadcrumbs">
            <a href="#">Home</a><span>search</span>
          </div>
            <h1>Search</h1>
          </div>
      </div>
    </div>
    
  </section>
  <!-- END: slider  -->
  @if(isset($details))
        
  <section class="probootstrap-section probootstrap-section-lighter">
    <h2>List of Houses matching your search key " <b> {{ $query }} "</b></h2>
    @foreach($details as $house)
    <div class="container">

      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              
              <img src="img/slider_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
              <a href="{{route('houseshow.show', $house->id)}}" class="probootstrap-love"><i class="icon-heart"></i></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="#">{{ $house->id }}</a></h2>
              <div class="probootstrap-listing-location">
                <i class="icon-location2"></i> <span>{{ $house->houseLocation }}</span>
              </div>
              <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
              <div class="probootstrap-listing-price"><strong>{{ $house->housePrice }}/{{ $house->paymentfrequency_id }}</strong></div>
            </div>
            <div class="probootstrap-card-extra">
              
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
 @endif
  <!-- END: section -->

<!-- //   <section class="probootstrap-half reverse">
//     <div class="image-wrap">
//       <div class="image" style="background-image: url(img/slider_5.jpg);"></div>
//     </div>
//     <div class="text">
//       <p class="mb10 subtitle">Why Choose Us</p>
//       <h3 class="mt0 mb40">You Will Love Our Services</h3>
//       <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
//       <p class="mb50">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
//       <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
//     </div>
//   </section> -->

  <footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg)">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Icumbi.</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#">Read more...</a></p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="/house">House</a></li>
              <li><a href="#">Rent Properties</a></li>
              <li><a href="#">Sell Properties</a></li>
              <li><a href="#">Agents</a></li>
              <li><a href="#">Testimonial</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Popular Cities</h4>
            <ul class="stack-link">
              <li><a href="#">Nyarugenge <small>(320 properties)</small></a></li>
              <li><a href="#">Gasabo <small>(294 properties)</small></a></li>
              <li><a href="#">Kicukiro <small>(300 properties)</small></a></li>
              <li><a href="#">Rwamagana <small>(268 properties)</small></a></li>
              <li><a href="#">Huye <small>(342 properties)</small></a></li>
            </ul>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2018 <a href="https://icumbiApp.com/">tres:Icumbi</a>. Designed by <a href="https://icumbiApp.com/">tres:Icumbi</a> <br> Demo Photos from <a href="https://pixabay.com/">Pixabay</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-footer-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>