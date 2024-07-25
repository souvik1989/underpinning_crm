 @section('title',  "Login/Register")
 @include('panel.partials.headerCss')
 <div class="page-main-header">
        <div class="main-header-right">
          <div class="main-header-left text-center">
            <!--<div class="logo-wrapper"><a href="#"><img src="{{ isset($setting->site_logo) ? config("app.url").Storage::url($setting->site_logo) :asset('assets/images/logo/logo.png') }}" alt=""></a></div>-->
          </div>
  
        </div>
      </div>
 <body>
   
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main">
          <div class="row">
            <div class="col-md-12">
              <div class="auth-innerright">
                <div class="authentication-box">
                  <div class="card-body p-0">
                    <div class="cont text-center">
                       <form class="theme-form" method="POST" action="{{ route('login') }}">
                        @csrf
                         <div class="logo-wrapper"><a href="#"><img src="{{ isset($setting->site_logo) ? config("app.url").Storage::url($setting->site_logo) :asset('assets/images/logo/logo.png') }}" alt=""></a></div>
                          
                          <div class="form-group">
                            <label class="col-form-label pt-0">Your Email</label>
                            <input class="form-control" type="text" name="email" required="">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="password" name="password" required="">
                          </div>
                          <div class="checkbox p-0">
                            Forget Password? <a href="{{route('forgotPwdForm')}}"> Click Here!</a>
                          </div>
                          <div class="form-group form-row mt-3 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                          </div>
                         {{-- <div class="login-divider"></div>
                          <div class="social mt-3">
                            <div class="form-row btn-showcase">
                              <div class="col-md-4 col-sm-6">
                                <button class="btn social-btn btn-fb">Facebook</button>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                <button class="btn social-btn btn-twitter">Twitter</button>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                <button class="btn social-btn btn-google">Google + </button>
                              </div>
                            </div>
                          </div>--}}
                        </form>
                      <!--<div class="sub-cont">-->
                      <!--  <div class="img">-->
                      <!--   {{-- <div class="img__text m--up">-->
                      <!--      <h2>New here?</h2>-->
                      <!--      <p>Sign up and discover great amount of new opportunities!</p>-->
                      <!--    </div>--}}-->
                      <!--    <div class="img__text m--in">-->
                      <!--      <h2>One of us?</h2>-->
                      <!--      <p>If you already has an account, just sign in. We've missed you!</p>-->
                      <!--    </div>-->
                      <!--    {{--<div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>--}}-->
                      <!--  </div>-->
                      <!--  <div>-->
                      <!--      <form method="POST" class="theme-form" action="{{ route('register') }}">-->
                      <!--  @csrf-->
                         
                            <!--<h4 class="text-center">NEW USER</h4>-->
                            <!--<h6 class="text-center">Enter your Details For Signup</h6>-->
                      <!--       <div class="logo-wrapper"><a href="#"><img src="{{ isset($setting->site_logo) ? config("app.url").Storage::url($setting->site_logo) :asset('assets/images/logo/logo.png') }}" alt=""></a></div>-->
                      <!--      <div class="form-row">-->
                      <!--        <div class="col-md-12">-->
                      <!--          <div class="form-group">-->
                      <!--            <input class="form-control" type="text" name="first_name" placeholder="First Name">-->
                      <!--          </div>-->
                      <!--        </div>-->
                      <!--        <div class="col-md-12">-->
                      <!--          <div class="form-group">-->
                      <!--            <input class="form-control" type="text" name="last_name" placeholder="Last Name">-->
                      <!--          </div>-->
                      <!--        </div>-->
                      <!--      </div>-->
                      <!--      <div class="form-group">-->
                      <!--        <input class="form-control" type="text" name="email" placeholder="Email">-->
                      <!--      </div>-->
                      <!--      <div class="form-group">-->
                      <!--        <input class="form-control" type="text" name="phone" placeholder="Phone">-->
                      <!--      </div>-->
                      <!--      <div class="form-group">-->
                      <!--        <input class="form-control" type="password" name="password" placeholder="Password">-->
                      <!--      </div>-->
                      <!--      <div class="form-group">-->
                      <!--        <input class="form-control" type="password" name="con_password" placeholder="Confirm Password">-->
                      <!--      </div>-->
                      <!--      <div class="form-row">-->
                      <!--        <div class="col-sm-4">-->
                      <!--          <button class="btn btn-primary" type="submit">Sign Up</button>-->
                      <!--        </div>-->
                      <!--        <div class="col-sm-8">-->
                      <!--          <div class="text-left mt-2 m-l-20">Are you already user?  <a class="btn-link text-capitalize" href="{{route('loginForm')}}">Login</a></div>-->
                      <!--        </div>-->
                      <!--      </div>-->
                      <!--      {{--<div class="form-divider"></div>-->
                      <!--      <div class="social mt-3">-->
                      <!--        <div class="form-row btn-showcase">-->
                      <!--          <div class="col-sm-4">-->
                      <!--            <button class="btn social-btn btn-fb">Facebook</button>-->
                      <!--          </div>-->
                      <!--          <div class="col-sm-4">-->
                      <!--            <button class="btn social-btn btn-twitter">Twitter</button>-->
                      <!--          </div>-->
                      <!--          <div class="col-sm-4">-->
                      <!--            <button class="btn social-btn btn-google">Google +</button>-->
                      <!--          </div>-->
                      <!--        </div>-->
                      <!--      </div>--}}-->
                      <!--    </form>-->
                      <!--  </div>-->
                      <!--</div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- login page end-->
      </div>
    </div>
     @include('panel.partials.footerScripts')
  