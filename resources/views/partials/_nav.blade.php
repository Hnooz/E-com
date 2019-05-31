<nav class="navbar is-color" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

    <h3 class="navbar-item">E-com</h3>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="{{route('home')}}">
        Home
      </a>

      <a class="navbar-item" href="{{route('products.index')}}">
        Product
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>
        <div class="navbar-dropdown right">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="logout">
            LogOut
          </a>
        </div>
    </div>
    </div>
  </div>
</nav>
