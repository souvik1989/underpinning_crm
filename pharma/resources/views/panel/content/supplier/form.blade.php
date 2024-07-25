

<div class="row">

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Supplier Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="LastName" placeholder="Enter Name" value="{{old('name', isset($supplier->name) ? $supplier->name:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Business Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" id="LastName" placeholder="Enter Business Name" value="{{old('business_name', isset($supplier->business_name) ? $supplier->business_name:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Business Type<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="business_type" class="form-control @error('business_type') is-invalid @enderror" id="LastName" placeholder="Enter Business Type" value="{{old('business_type', isset($supplier->business_type) ? $supplier->business_type:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Email"> Email <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder=" Email" value="{{old('email', isset($supplier->email) ? $supplier->email:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="SitePhone">Phone</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="Phone" placeholder="Phone" value="{{old('phone', isset($supplier->phone) ? $supplier->phone:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="SitePhone">Website URL</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

        <input type="tel" name="website" class="form-control @error('website') is-invalid @enderror" id="website" placeholder="website" value="{{old('website', isset($supplier->website) ? $supplier->website:'')}}" />
    </div>
</div>



<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Address</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('address') is-invalid @enderror" rows="4" name="address" id="Address">{{old('address', isset($supplier->address) ? $supplier->address:'')}}</textarea>
    </div>
</div>


</div>



<button type="submit" class="btn btn-primary">{{isset($supplier) ? 'Update' : 'Create'}}</button>
<a class="btn btn-danger" href="{{ route('supplier.index') }}">Cancel</a>












@include('panel.common.scripts')
