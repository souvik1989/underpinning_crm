<div class="row">
    <div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="FirstName">Job Date<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input readonly type="date" name="job_date" class="form-control @error('job_date') is-invalid @enderror" id="job_date" placeholder="Job Date" value="{{old('job_date', isset($job->job_date) ? $job->job_date:'')}}" />
    </div>
</div>



<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Customer Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input readonly type="text" name="customer_name" class="form-control @error('customer_name') is-invalid @enderror" id="LastName" placeholder="Customer Name" value="{{old('customer_name', isset($job->job->customer_name) ? $job->job->customer_name:'')}}" />
    </div>
</div>







<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Email"> Email <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <input readonly type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder=" Email" value="{{old('email', isset($job->job->email) ? $job->job->email:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="SitePhone">Phone</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

        <input readonly type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="Phone" placeholder="Phone" value="{{old('phone', isset($job->job->phone) ? $job->job->phone:'')}}" />
    </div>
</div>



</div>


<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Customer Address</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea readonly class="form-control @error('address') is-invalid @enderror" rows="4" name="address" id="Address">{{old('address', isset($job->job->address) ? $job->job->address:'')}}</textarea>
    </div>
</div>
<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Description</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea readonly class="form-control @error('description') is-invalid @enderror" rows="4" name="description" id="description">{{old('description', isset($job->description) ? $job->description:'')}}</textarea>
    </div>
</div>

{{--<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Comment</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea readonly class="form-control @error('comment') is-invalid @enderror" rows="4" name="comment" id="comment">{{old('comment', isset($job->comment) ? $job->comment:'')}}</textarea>
    </div>
</div>--}}
</div>






<!--<button type="submit" class="btn btn-primary">{{isset($job) ? 'Update' : 'Create'}}</button>-->
<a class="btn btn-danger" href="{{ route('job.index') }}">Cancel</a>












@include('panel.common.scripts')
