<style>
  div#navigation {
    height: 500px;
}
</style>


<div class="logo">

</div>
<div class="navi">
  <ul>
    <li class="active"><a href="#"> <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} 
      <span class="hidden-xs hidden-sm"></span></a></li>
      <li class="active"><a href="{{asset('home')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
      @php
      $user = \Auth::user();
        $role=$user->role;
      @endphp
      @if($role=='admin')
      <li class="active"><a href="{{asset('betmixsongs')}}"><i class="fa fa-music" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Beatmix Music</span></a></li>
      
      @else
      <li class="active"><a href="{{asset('subscribesongs')}}"><i class="fa fa-music" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Purchased Music</span></a></li>
      
      
      @endif
      <li class="active">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        <span class="hidden-xs hidden-sm">  {{ __('Logout') }}</span>
     </a>


      </li>
  </ul>



  
</div>