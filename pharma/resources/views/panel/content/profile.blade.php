
@extends('panel.master')

@section('title', 'Edit Profile')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Profile<span>Form</span></h2>
                    <h6 class="mb-0">Underpinning</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard </li>
                        <li class="breadcrumb-item">Profile</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Profile </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profile.save')}}" class="needs-validation" novalidate="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                         


<div class="row">
<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">First Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="LastName" placeholder="First Name" value="{{old('first_name', isset($user->first_name) ? $user->first_name:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Last Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="LastName" placeholder="Last Name" value="{{old('last_name', isset($user->last_name) ? $user->last_name:'')}}" />
    </div>
</div>






<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Email"> Email <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder=" Email" value="{{old('email', isset($user->email) ? $user->email:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="SitePhone">Phone</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

        <input type="tel" name="mobile" class="form-control @error('mobile') is-invalid @enderror" id="Phone" placeholder="Phone" value="{{old('mobile', isset($user->mobile) ? $user->mobile:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">ABN</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="text" name="abn" class="form-control @error('abn') is-invalid @enderror" id="abn" placeholder="ABN" value="{{old('abn', isset($user->abn) ? $user->abn:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">Account Number</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="text" name="account_no" class="form-control @error('account_no') is-invalid @enderror" id="ac_no" placeholder="Account No" value="{{old('account_no', isset($user->account_no) ? $user->account_no:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">Account Name</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="text" name="account_name" class="form-control @error('account_name') is-invalid @enderror" id="ac_name" placeholder="Account Name" value="{{old('account_name', isset($user->account_name) ? $user->account_name:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">BSB</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="text" name="bsb" class="form-control @error('bsb') is-invalid @enderror" id="bsb" placeholder="BSB" value="{{old('bsb', isset($user->bsb) ? $user->bsb:'')}}" />
    </div>
</div>
</div>








<button type="submit" class="btn btn-primary">Update</button>
<a class="btn btn-danger" href="{{ route('dashboard') }}">Cancel</a>



</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>








@include('panel.common.scripts')
@endsection