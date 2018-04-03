<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-end">
      <a class="navbar-item" href="https://bulma.io/">
        Shopping Cart
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="#">User Management</a>
        <div class="navbar-dropdown is-boxed">
          @if(Auth::check())
            <a class="navbar-item" href="{{ route('user.profile') }}">Profile</a>
            <a class="navbar-item" href="{{ route('user.logout') }}">Logout</a>
          @else
            <a class="navbar-item" href="{{ route('user.signup') }}">Signup</a>
            <a class="navbar-item" href="{{ route('login') }}">Login</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>