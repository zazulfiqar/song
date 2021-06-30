<!DOCTYPE html>
<html lang="zxx">
 <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content=" " name="description">
    <meta content="" name="author">
    <link href="#" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	 <!-- Bootstrap core CSS -->
   <!-- <link href="https://www.musetemplatespro.com/preview/codecan/musicplaylistjs/vendor/bootstrap/css/bootstrap.css" rel="stylesheet"> -->

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
            <img alt="img" src="images/comming-soon.jpg">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider_text wow bounceInDown" data-wow-delay="0.4s" data-wow-duration="2s">
                      <h2>BMIX 051621 BPM120</h2>
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
	
	
	<div class="innerpage-player">
		<!-- BeforeYou_section -->
		<!-- <div class="BeforeYou_section player">
		  <div class="container-fluid no-margin">
			<div class="row flexRow">
			  <div class="col-md-12 col-sm-12 col-xs-12 no-margin">
			  
			  
				<center>
						<h5> <span class="taghead">Album by </span> BMIX 051621 BPM120 </h5>
						
						
					<ul id="playlist" class="BeforeYouBg">
						<li track="beatmix/BMIX 051621 BPM124.mp3" cover="images/051621-cover.png" title="BMIX 051621 BPM124"></li>
						<li track="beatmix/BMIX 051219 BPM096.mp3" cover="images/051621-cover.png" title=" BMIX 051219 BPM096"></li>
						<li track="beatmix/BMIX 051721 BPM112.mp3" cover="images/palyer-icon-cover.png" title="BMIX 051721 BPM112"></li>
						<li track="beatmix/BMIX 063019 BPM138.mp3" cover="images/palyer-icon-cover.png" title="BMIX 063019 BPM138"></li>
						<li track="beatmix/BMIX 070520 BPM136.mp3" cover="images/palyer-icon-cover.png" title="BMIX 070520 BPM136"></li>
						<li track="beatmix/BMIX 072819 BPM106.mp3" cover="images/palyer-icon-cover.png" title=" BMIX 072819 BPM106"></li> 
						<li track="beatmix/BMIX 101120 BPM120.mp3" cover="images/palyer-icon-cover.png" title=" BMIX 101120 BPM120"></li>
						<li track="beatmix/BMIX 101619 BPM104.mp3" cover="images/palyer-icon-cover.png" title=" BMIX 101619 BPM104"></li>
						<li track="beatmix/BMIX 122919 BPM104.mp3" cover="images/palyer-icon-cover.png" title=" BMIX 122919 BPM104"></li>
						<li track="beatmix/BMIX 123118 BPM098.mp3" cover="images/palyer-icon-cover.png" title=" BMIX 123118 BPM098"></li>
						
						
						<div class="BeforeYou_RighhtBox">
							<h6>MORE FROM <span>BMIX 051621 BPM104</span></h6>
							<img src="images/before_You_Img1.png" alt="img">
							<h5> BMIX 051621</h5> 
					   </div>
					</ul>
						
					
				</center>
				
				
			  </div>
			 
			</div>
		  </div>
		</div> -->
    <div class="market_list">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7 col-xs-12 center">
            <h2 class="text-center">BMIX 051621 BPM120</h2>
            <div class="search_barMarket">
              <form>
                <input type="text" placeholder="Search Here...">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>

              @if ($message = Session::get('success'))
              <div class="custom-alerts alert alert-success fade in">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  {!! $message !!}
              </div>
              <?php Session::forget('success');?>
              @endif

              @if ($message = Session::get('error'))
              <div class="custom-alerts alert alert-danger fade in">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  {!! $message !!}
              </div>
              <?php Session::forget('error');?>
              @endif

              </div>
              
              <ul>
                
                @php
                $user_id= Auth::id();
                $fetch3=App\subscribedsong::where('user_id', $user_id)->get();
                @endphp

                <?php

                $ids = [];

                ?>
                @foreach($fetch3 as $fetchdata)


                <?php $ids[$fetchdata->song_id] = 'assign';?>

                @endforeach
                @foreach($data as $fetch)
                
                <li>
                  
                  <i class="fa fa-music" aria-hidden="true"></i> {{$fetch->songslist}} 
                    <?php if(isset($ids[$fetch->id])){?> <a>Purchased</a>
                    <?php }else{ ?> 
                      <a href="{{asset('paypal/'.$fetch->id)}}">Purchase Now</a> <?php  } ?>
                </li>
                @endforeach



               


                


                <!-- <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 051621 BPM124 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 051219 BPM096 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 051721 BPM112 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 063019 BPM138 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 070520 BPM136 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 072819 BPM106 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 101120 BPM120 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 101619 BPM104 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 122919 BPM104 <a href="JavaScript:void(0)">Purchase Now</a></li>
                <li><i class="fa fa-music" aria-hidden="true"></i> BMIX 123118 BPM098 <a href="JavaScript:void(0)">Purchase Now</a></li> -->
              </ul>
          </div>
        </div>
      </div>
    </div>
	
	</div>
    <!-- BeforeYou_section -->
	
	
	
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
  </body>
</html>