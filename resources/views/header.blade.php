<header class="main-header">
    <div class="container">
      <div class="header-top">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-7 col-sm-6 col-8">
            <div class="head-left d-flex flex-wrap align-items-center">
              <a href="{{ route('users') }}" class="logo-outer">
                <img src="{{ asset('backend/assets/images/logo.png') }}" alt="" class="img-fluid"/>
              </a>
              <a class="menu-icon" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-md-5 col-sm-6 col-4 text-end">
            <div class="head-right">
              <a href="{{ url('logout') }}" class="btn btn-primary">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" data-bs-backdrop="false" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="dash-menu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('users') }}">Dashboard</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('package') }}">Packages</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('package-report') }}">Package Report</a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ url('roi-report') }}">Dividend Report</a>
            </li> --}}

            <li class="nav-item">
              <a class="nav-link" href="{{ url('level-report') }}">Referral Reward Report</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('leadership') }}">Bonous Reward Report</a>
            </li>

            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="{{ url('leadership-report') }}">Leadership Report</a>-->
            <!--</li>-->

            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ url('newLevelReport') }}">Level Report</a>
            </li> -->


            <li class="nav-item">
              <a class="nav-link" href="{{ url('withdrawal-report') }}">Withdrwal History</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('network') }}">My Team</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
