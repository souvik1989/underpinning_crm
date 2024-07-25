









<div class="mb-3">
    <label class="form-label" for="LastName">Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" readonly name="name" class="form-control @error('name') is-invalid @enderror" id="LastName" placeholder=" Name" value="{{old('name', isset($contact->name) ? $contact->name:'')}}" />
    </div>
</div>







<div class="mb-3">
    <label class="form-label" for="Email"> Email <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <input type="email" readonly name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder=" Email" value="{{old('email', isset($contact->email) ? $contact->email:'')}}" />
    </div>
</div>


<div class="mb-3">
    <label class="form-label" for="SitePhone">Phone</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

        <input type="tel" readonly name="phone" class="form-control @error('phone') is-invalid @enderror" id="Phone" placeholder="Phone" value="{{old('phone', isset($contact->phone) ? $contact->phone:'')}}" />
    </div>
</div>






<div class="mb-3">
    <label class="form-label" for="SiteUrl">Site URL</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" readonly name="site_url" class="form-control @error('site_url') is-invalid @enderror" id="SiteUrl" placeholder="Site URL" value="{{old('site_url', isset($contact->site_url) ? $contact->site_url:'')}}" />
    </div>
</div>

<div class="mb-3">
    <label class="form-label" for="BusinessName">Business Name</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" readonly name="business_name" class="form-control @error('business_name') is-invalid @enderror" id="SiteUrl" placeholder="Business Name" value="{{old('business_name', isset($contact->business_name) ? $contact->business_name:'')}}" />
    </div>
</div>

<div class="mb-3 ">
                <label class="form-label" for="description_1">Message</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <i class='bx bxs-book-content'></i>
                    </span>
                    <textarea readonly class="form-control" rows="4"  placeholder="Message">{{ isset($contact->message) ? $contact->message:''}}</textarea>
                </div>
            </div>
            </div>








{{--<button type="submit" class="btn btn-primary">{{isset($contact) ? 'Update' : 'Create'}}</button>--}}
<a class="btn btn-danger" href="{{ route('contact.index') }}">Cancel</a>










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
