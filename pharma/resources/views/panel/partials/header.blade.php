 <div class="page-main-header">
        <div class="main-header-right">
          <div class="main-header-left text-center">
            <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img src="{{ isset($setting->site_logo) ? config("app.url").Storage::url($setting->site_logo) :asset('assets/images/logo/logo.png') }}" alt=""></a></div>
          </div>
          <div class="mobile-sidebar">
            <div class="media-body text-right switch-sm">
              <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
            </div>
          </div>
          <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar">               </i></div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li>
                
              </li>
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
             
             
           
              <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid" src="{{url('assets/images/dashboard/user.png')}}" alt=""></span>
                <ul class="onhover-show-div profile-dropdown">
                  <li class="gradient-primary">
                    <h5 class="f-w-600 mb-0">{{auth()->user()->first_name.' '.auth()->user()->last_name}}</h5><span>Admin</span>
                  </li>
                  <li><i data-feather="user"> </i><a href="{{route('dashboard.profile')}}">Profile</a></li>
                  <li><i data-feather="settings"> </i><a href="{{route('siteSetting.index')}}">Settings          </a>  </li>
                  <li><i data-feather="power"> </i><a href="#" data-toggle="modal" data-target="#logoutModal" title="Logout">Logout          </a>  </li>
                </ul>
              </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      
             <div class="modal fade size-chart" id="logoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModal">Ready to Leave?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>


                <div class="modal-footer">
                    <button class="btn btn-pill btn-primary" type="button" data-dismiss="modal">Cancel</button>


                    <a class="btn btn-pill btn-primary" type="button" onclick="LogoutFormMobile.submit()">
                        Logout
                        <form action="{{route('logout')}}" method="POST" id="LogoutFormMobile" style="display:none">
                            @csrf
                        </form>
                    </a>
                </div>

            </div>
        </div>
    </div>