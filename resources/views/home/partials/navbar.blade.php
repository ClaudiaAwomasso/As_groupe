 <!-- header section strats -->
 <header class="header_section">
    <div class="header_top">
      <div class="container-fluid ">
        <div class="contact_nav">
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
              Tel : +229 0157830591 / 0143126082
            </span>
          </a>
          <a href="asgroupe12@gmail.com">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
              Email : asgroupe12@gmail.com
            </span>
          </a>
          <a href="{{ route('accueil')}}">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
                Localisation:
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ route('accueil') }}">
            <span>
              ASgroupe
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item {{ request()->routeIs('accueil') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('a_propos') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('a_propos') }}">À Propos</a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contactez-nous</a>
                  </li>
                </ul>
              </div>

              {{-- <li class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Con</a>
              </li> --}}
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- end header section -->
