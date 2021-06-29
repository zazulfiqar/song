<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content=" " name="description">
    <meta content="" name="author">
    <link href="#" rel="icon">
	 <!-- Bootstrap core CSS -->   

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script>
		//paste this code under head tag or in a seperate js file.
		// Wait for window load
		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
	</script>
  </head>
  <body>
  <div class="se-pre-con"></div><!-- Preloader-->
    <!-- Header Section Begin -->
    @include('layouts.frontendheader')
    <!-- Header Section End -->
    <!-- Slider  Sectiion Start -->
    <div class="main_slider">
      <div class="carousel slide" data-ride="carousel" id="myCarousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img alt="img" src="{{asset('images/slider_img1.jpg')}}">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="slider_text wow bounceInLeft" data-wow-delay="0.4s" data-wow-duration="2s">
                      <h4>WORLD-CLASS</h4>
                      <h2>BEATMIXING</h2>
                      <p>MixMaster Johnny O beatmixes your favorite party music mixes</p>
                      <a  href="https://www.voscast.com/" class="gradient_btn" target="blank">PLAY NOW</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider_player wow bounceInUp" data-wow-delay="0.4s" data-wow-duration="2s">
          <!-- <img src="images/player_img.png" alt="img"> -->
          <iframe src="http://station.voscast.com/5e6e710bbf6b2/" title="Radio"></iframe>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->
	
    <!--WorldClass Sectiion Start -->
    <div class="WorldClass_section">
      <div class="container">
        <div class="row flexRow">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="WorldClass_Text wow bounceInLeft" data-wow-delay="0.4s" data-wow-duration="2s">
              <h2>WORLD-CLASS BEATMIXING</h2>
                <div id="section">
                  <div class="article">
                    <p>MIXMASTER JOHNNY O IS A 40 YEAR RADIO BROADCAST VETERAN AND LIFE-LONG NIGHT-CLUB BEATMIXER WHO WORKED AT SOME OF THE HOTTEST NIGHT-CLUBS IN THE COUNTRY... LILLY'S AT THE SHERATON IN DENVER, CIRCLE IN THE SQUARE AT THE HOLIDAY INN DENVER, ADAMS MARK HOTEL ST. LOUIS AND D 'ANGORA'S HILO HAWAII. MIXMASTER JOHNNY O PRODUCES A SYNDICATED RADIO PROGRAM CALLED "THE SATURDAY NITE PARTY"
                    </p>
                    <div class="moretext">
                      <p>JETJAMS.NET IS WORLD-CLASS BEATMIXING FEATURING THE BEST DANCE HITS OF THE 80'S AND 90'S 24 HOURS-A-DAY.</p>
                      <p>JETJAMS.NET WARRANTS THAT IT HOLDS VALID LICENSES TO REPRODUCE AND REBROADCAST THE MUSICAL COMPOSITIONS LICENSED WITH BROADCAST MUSIC, INC. ("BMI") AND THE AMERICAN SOCIETY OF COMPOSERS, AUTHORS, AND PUBLISHERS ("ASCAP"). LICENSE ACCOUNT NUMBERS AVAILABLE UPON REQUEST. JETJAMS.NET DOES NOT MAINTAIN ANY LICENSE WITH GLOBAL MUSIC RIGHTS ("GMR") AND DOES NOT REBROADCAST ANY MUSICAL COMPOSITION EXCLUSIVELY LICENSED THEREUNDER.</p>
                      <p>BE SURE TO CHECK-OUT THE BEATMIX MARKET TO DOWNLOAD YOUR FAVORITE 16 MINUTE BEATMIXED SETS FOR JUST $3 NOW.</p>
                    </div>
                  </div>
                  <a class="moreless-button gradient_btn" href="JavaScript:void(0)">Read more</a>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="WorldClass_Img wow bounceIn" data-wow-delay="0.4s" data-wow-duration="2s">
              <img src="{{asset('images/world_img1.jpg')}}" alt="img">
              <div class="Download_BoxIcon">
                <a data-fancybox="gallery" href="{{asset('images/demo_video1.mp4')}}"><img src="{{asset('images/paly_btn.png')}}" alt="img"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12 center">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="WorldClass2Box wow bounceIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/world_icon1.png')}}" alt="img">
                  <h4>Jetjams Robic</h4>
                  <p>Take your aerobic exercise program to a new level with high BPM 20 - 40 - 60 minute</p>
                  <a href="robic.html" class="gradient_btn">READ MORE</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="WorldClass2Box wow bounceIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/world_icon2.png')}}" alt="img">
                  <h4>Jetjams.net Media Services</h4>
                  <p>Creating a better in-store customer experience by communicating priority promotions and services in a music environment.</p>
                  <a href="{{asset('images/maple_lanes_slick.pdf')}}" class="gradient_btn" target="_blank">READ MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- WorldClass Sectiion End -->
	
	
    <!-- BeforeYou_section -->
    <div class="BeforeYou_section player">
      <div class="container-fluid no-margin">
        <div class="row flexRow">
          <div class="col-md-12 col-sm-12 col-xs-12 no-margin">
		  
		  
            <center>
					<h5> <span class="taghead">Album by </span> BMIX 051621 BPM120 </h5>
					
					
				<ul id="playlist" class="BeforeYouBg">
					@foreach($data as $fetch)
          <li track="{{asset('beatmixmusic/'.$fetch->songslist)}}" cover="images/051621-cover.png" title="{{$fetch->songslist}}"></li>
          @endforeach
				
					
					<!--<li track="beatmix/BMIX 101120 BPM120.mp3" cover="images/cover-img.jpg" title=" BMIX 101120 BPM120"></li>
					<li track="beatmix/BMIX 101619 BPM104.mp3" cover="images/cover-img.jpg" title=" BMIX 101619 BPM104"></li>
					<li track="beatmix/BMIX 122919 BPM104.mp3" cover="images/cover-img.jpg" title=" BMIX 122919 BPM104"></li>
					<li track="beatmix/BMIX 123118 BPM098.mp3" cover="images/cover-img.jpg" title=" BMIX 123118 BPM098"></li> -->
					
					
					<div class="BeforeYou_RighhtBox">
						<h6>MORE FROM <span>BMIX 051621 BPM104</span></h6>
						<img src="{{asset('images/before_You_Img1.png')}}" alt="img">
						<h5> BMIX 051621</h5>
                    <!-- <h4>2019</h4> -->
                    <!-- <p><b>Released:</b> Dec 30, 2019 <br>℗ 2020 TIRED RECORDS</p> -->
                   </div>
				</ul>
					
				
			</center>
			
			
          </div>
         
        </div>
      </div>
    </div>
    <!-- BeforeYou_section -->
	
	
    <!-- Download Section start  -->
    <div class="Download_Section">
      <div class="container">
        <div class="row">
          <div class="head_center wow bounceInDown" data-wow-delay="0.4s" data-wow-duration="2s">
            <h2>DOWNLOAD YOUR FAVORITE BEATMIXED SET</h2>
          </div>
        </div>
        <div class="row">
          <div class="Download_Slider wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
            <div class="">
              <div class="Download_Box">
                <div class="Download_BoxImg">
                  <img src="{{asset('images/download_img1.jpg')}}" alt="img">
                </div>
                <div class="Download_BoxText">
                  <h3>Saturday Nite Party <br>Beatmixed Sets</h3>
                </div>
                <div class="Download_BoxIcon">
                  <a data-fancybox="gallery" href="{{asset('images/download_img1.jpg')}}"><img src="{{asset('images/paly_btn.png')}}" alt="img"></a>
                </div>
              </div>
            </div>
            <div class="">
              <div class="Download_Box">
                <div class="Download_BoxImg">
                  <img src="{{asset('images/download_img2.jpg')}}" alt="img">
                </div>
                <div class="Download_BoxText">
                  <h3>Cardio Dance <br>Beatmixed Sets (advanced)</h3>
                </div>
                <div class="Download_BoxIcon">
                  <a data-fancybox="gallery" href="{{asset('images/download_img2.jpg')}}"><img src="{{asset('images/paly_btn.png')}}" alt="img"></a>
                </div>
              </div>
            </div>
            <div class="">
              <div class="Download_Box">
                <div class="Download_BoxImg">
                  <img src="{{asset('images/download_img3.jpg')}}" alt="img">
                </div>
                <div class="Download_BoxText">
                  <h3>Jetjams Robic Beatmixed <br>Sets (novice & intermediate)</h3>
                </div>
                <div class="Download_BoxIcon">
                  <a data-fancybox="gallery" href="{{asset('images/download_img3.jpg')}}"><img src="{{asset('images/paly_btn.png')}}" alt="img"></a>
                </div>
              </div>
            </div>
            <div class="">
              <div class="Download_Box">
                <div class="Download_BoxImg">
                  <img src="images/download_img1.jpg" alt="img">
                </div>
                <div class="Download_BoxText">
                  <h3>Saturday Nite Party <br>Beatmixed Sets</h3>
                </div>
                <div class="Download_BoxIcon">
                  <a data-fancybox="gallery" href="{{asset('images/download_img1.jpg')}}"><img src="{{asset('images/paly_btn.png')}}" alt="img"></a>
                </div>
              </div>
            </div>
            <div class="">
              <div class="Download_Box">
                <div class="Download_BoxImg">
                  <img src="{{asset('images/download_img2.jpg')}}" alt="img">
                </div>
                <div class="Download_BoxText">
                  <h3>Cardio Dance <br>Beatmixed Sets (advanced)</h3>
                </div>
                <div class="Download_BoxIcon">
                  <a data-fancybox="gallery" href="{{asset('images/download_img2.jpg')}}"><img src="{{asset('images/paly_btn.png')}}" alt="img"></a>
                </div>
              </div>
            </div>
            <div class="">
              <div class="Download_Box">
                <div class="Download_BoxImg">
                  <img src="{{asset('images/download_img3.jpg')}}" alt="img">
                </div>
                <div class="Download_BoxText">
                  <h3>Jetjams Robic Beatmixed <br>Sets (novice & intermediate)</h3>
                </div>
                <div class="Download_BoxIcon">
                  <a data-fancybox="gallery" href="{{asset('images/download_img3.jpg')}}"><img src="images/paly_btn.png" alt="img"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="testimonial_slider">
              <div class="testimonial_sliderBox">
                <p>Jetjams.net beatmixing the best dance hits of the 80’s and 90’s 24 hours-a-day</p>
                <div class="col-md-4 col-sm-5 col-xs-12 center">
                  <div class="center_slide">
                    <div class="testimonial_sliderBoxImg">
                      <img src="{{asset('images/avatar_img1.jpg')}}" alt="img">
                    </div>
                    <div class="testimonial_sliderBoxText">
                      <h4>Johnny O</h4>
                      <p>MixMaster at Jetjams.net</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial_sliderBox">
                <p>Best music station every, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col-md-4 col-sm-4 col-xs-12 center">
                  <div class="testimonial_sliderBoxImg">
                    <img src="{{asset('images/avatar_img1.png')}}" alt="img">
                  </div>
                  <div class="testimonial_sliderBoxText">
                    <h4>John Doe</h4>
                    <p>Founder of A Company</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Download Section start end -->
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
	
	
    <!-- Bootstrap core JavaScript  -->
		

    <script src="https://www.musetemplatespro.com/preview/codecan/musicplaylistjs/vendor/jquery/jquery.min.js"></script>
    <script src="https://www.musetemplatespro.com/preview/codecan/musicplaylistjs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
	
	 <!-- Plugin JavaScript -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script> 
    <script src="{{asset('js/scrolling-nav.js')}}"></script>
    <script src="{{asset('js/musicPlaylist.min.js')}}"></script> 
   <script src="{{asset('js/player-js.js')}}"></script>
   <script>
    $('.moreless-button').click(function() {
      $('.moretext').slideToggle();
      if ($('.moreless-button').text() == "Read more") {
        $(this).text("Read less")
      } else {
        $(this).text("Read more")
      }
    });
    </script>
  </body>
</html>