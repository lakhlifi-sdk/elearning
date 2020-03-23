        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/fav-icon.png') }}" class="header-brand-img" alt="tabler logo">
                {{ config('app.name') }}
              </a>
              <div class="d-flex order-lg-2 ml-auto ln-left">
                <!-- div class="nav-item d-none d-md-flex">
                  <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                </div>
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="nav-unread"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div -->
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    {!! auth()->user()->getavatar("md") !!}
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">{{ auth()->user() }}</span>
                      <small class="text-muted d-block mt-1">{{ auth()->user()->getrole() }}</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <i class="dropdown-icon fa fa-sign-out"></i>{{ __('global.logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>