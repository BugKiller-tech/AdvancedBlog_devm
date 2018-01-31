<nav class="navbar has-shadow">
  <div class="navbar-start">
    <a href="{{ route('home')}}" class="navbar-item">
        <img src="{{ asset('images/hkg-logo.png') }}" alt="">
    </a>
    <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
    <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
    <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
  </div>
  <div class="navbar-end" style="overflow: visible;">
    @guest
      <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
      <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
    @endguest
    {{--  @auth  --}}
      <div class="dropdown is-aligned-right navbar-item is-tab">
        <div class="dropdown-trigger">
          <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
            Hey Alex
            <span class="fa fa-caret-down"></span>
          </button>
        </div>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>Profile</a></li>
          <li>
            <a href="#"><span class="icon"><i class="fa fa-fw fa-bell"></i></span>Notifications</a>
          </li>
          <li><a href="{{ route('manage.dashboard') }}"><span class="icon"><i class="fa fa-fw fa-cog"></i></span>Manage</a></li>
          <li class="seperator"><a href="#"></a></li>
          <li><a href="#"><span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>Logout</a></li>
        </ul>
      </div>
    {{--  @endauth  --}}
  </div>
</nav>