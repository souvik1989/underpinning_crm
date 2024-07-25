 @section('title',  "Login/Register")
 @include('panel.partials.headerCss')

<section class="login-page-form">
  <div class="container">
    <div class="row align-items-center">
 <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img src="{{ isset($setting->site_logo) ? config("app.url").Storage::url($setting->site_logo) :asset('assets/images/logo/logo.png') }}" alt=""></a></div>
      <div class="col-md-12">
         <form class="rd-mailform1 text-center" action="{{ route('reset.password.post') }}" method="POST">
            @csrf
                <div class="row justify-content-center">
                  <div class="col-md-7">
                    <div class="rd-mailform-forget">
                      <h3 class="">Reset Password</h3>
                      <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter your Email" name="email">
                    </div>
                    
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Enter new password" name="password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirm Your Password" name="password_confirmation">
                    </div>
                    <div class="text-left">
                  <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
                    </div>
                  </div>
                  
                </div>
                
              </form>
      </div>
    </div>
  </div>
</section>
    @include('panel.partials.footerScripts')