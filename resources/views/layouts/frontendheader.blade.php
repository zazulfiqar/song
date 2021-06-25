<link href="{{asset('css/3-col-portfolio.css')}}" rel="stylesheet">
<link href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">
<link href="{{asset('css/all.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/musicPlaylist.min.css')}}">  
<link href="{{asset('css/slicknav.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">


<header>
  <div class="main_header">
    <div class="container-fluid">
      <div class="row flexRow">
        <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="main_logo">
            <a href="index.html"><img alt="img" src="images/ezgif.gif"></a>
          </div>
        </div>
        <div class="col-md-9 hidden-xs hidden-sm">
          <div class="menuSec">
            <ul id="menu">
              <li class="active"><a href="{{asset('/')}}">Home</a></li>
              <li><a href="{{asset('sat_night')}}">Saturday Nite Party</a></li>
              <li><a href="{{asset('beatmixx')}}">Beatmix Market</a></li>
              <li><a href="{{asset('about')}}">About Jetjams</a></li>
              <li><a href="{{asset('blog')}}">Blog</a></li>
              <li><a href="{{asset('contact.html')}}" class="gradient_btn">CONTACT US</a></li>




              <li>


                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a   href="{{asset('home')}}" >
                        {{ Auth::user()->name }} 
                    </a>

                </li>
            @endguest
              </li>


              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>