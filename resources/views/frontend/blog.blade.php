<!DOCTYPE html>
<html lang="zxx">
  <head>

  </head>
  <body>
    <!-- Header Section Begin -->
    @include('layouts.frontendheader')
    <!-- Header Section End -->
    <!-- Slider  Sectiion Start -->
    <div class="main_slider inner_banner">
      <div class="carousel slide" data-ride="carousel" id="myCarousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img alt="img" src="{{asset('images/comming-soon.jpg')}}">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider_text wow bounceInDown" data-wow-delay="0.4s" data-wow-duration="2s">
                      <h2>Comming Soon</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->

    <!-- Subscribe_section -->
    <!-- <div class="Subscribe_section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="head_center wow bounceInDown" data-wow-delay="0.1s" data-wow-duration="1s">
              <h2>Subscribe to the Jetjams Journal</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-sm-10 col-xs-12 center">
            <div class="Subscribe_Box wow bounceInDown" data-wow-delay="0.1s" data-wow-duration="1s">
              <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" placeholder="Your e-mail">
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="submit_btn">
                    <button type="submit">SUBSCRIBE</button>
                  </div>
                </div>
              </div>
              <p>Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Subscribe_section -->
    <!--Footer Content Start-->
    <footer>
      <div class="copy-sec">
        <div class="container">
          <div class="row flexRow">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <p>Cras mattis consectetur purus sit amet.</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
              <a href="member-mbi.html">Member BMI & ASCAP</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <ul>
                <li><a href="https://www.facebook.com/Saturdayniteparty/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer Content End-->
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </body>
</html>