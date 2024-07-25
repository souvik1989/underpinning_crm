





<div class="mb-3">
    <label class="form-label" for="FirstName"> Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="FirstName" placeholder=" Name" value="{{old('first_name', isset($user->first_name) ? $user->first_name:'')}}" />
    </div>
</div>



{{--<div class="mb-3">
    <label class="form-label" for="LastName">Last Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="LastName" placeholder="Last Name" value="{{old('last_name', isset($user->last_name) ? $user->last_name:'')}}" />
    </div>
</div>--}}







<div class="mb-3">
    <label class="form-label" for="Email"> Email <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder=" Email" value="{{old('email', isset($user->email) ? $user->email:'')}}" />
    </div>
</div>


<div class="mb-3">
    <label class="form-label" for="SitePhone">Phone</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="Phone" placeholder="Phone" value="{{old('phone', isset($user->phone) ? $user->phone:'')}}" />
    </div>
</div>


{{--<div class="mb-3">
    <label class="form-label" for="Address">Address</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('address') is-invalid @enderror" rows="4" name="address" id="Address">{{old('address', isset($user->address) ? $user->address:'')}}</textarea>
    </div>
</div>



<div class="mb-3">
    <label class="form-label" for="Area">Area</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" id="FirstName" placeholder="Area" value="{{old('area', isset($user->area) ? $user->first_name:'')}}" />
    </div>
</div>--}}



<div class="mb-3">
    <label class="form-label" for="SiteUrl">Site URL</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="site_url" class="form-control @error('site_url') is-invalid @enderror" id="SiteUrl" placeholder="Site URL" value="{{old('site_url', isset($user->site_url) ? $user->site_url:'')}}" />
    </div>
</div>

<div class="mb-3">
    <label class="form-label" for="BusinessName">Business Name</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" id="SiteUrl" placeholder="Business Name" value="{{old('business_name', isset($user->business_name) ? $user->business_name:'')}}" />
    </div>
</div>



<div class="mb-3">
    <label class="form-label" for="Address">Message</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('message') is-invalid @enderror" rows="4" name="message" id="message">{{old('message', isset($user->message) ? $user->message:'')}}</textarea>
    </div>
</div>









<button type="submit" class="btn btn-primary">{{isset($user) ? 'Update' : 'Create'}}</button>
<a class="btn btn-danger" href="{{ route('user2.index') }}">Cancel</a>










<script>
    function showSiteLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#SiteLogoImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    function showLightLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#LightLogoImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    function showFavicon(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#FaviconImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    function showOGImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#OGImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }



    function showPartnerImage1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#PartnerImg1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    function showPartnerImage2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#PartnerImg2').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@include('panel.common.scripts')
