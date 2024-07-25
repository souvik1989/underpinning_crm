
@extends('panel.master')

@section('title', 'Edit Password')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Password<span>Form</span></h2>
                    <h6 class="mb-0">Underpinning</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard </li>
                        <li class="breadcrumb-item">Password</li>
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
                        <h5>Change Password </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('password.save')}}" class="needs-validation" novalidate="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                         



<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Old Password<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" placeholder="Old Password"  />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">New Password<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="New Password"/>
    </div>
</div>






<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Email"> Confirm Password <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <input type="password" name="con_password" class="form-control @error('con_password') is-invalid @enderror" id="con_password" placeholder=" Confirm Password"  />
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









@include('panel.common.scripts')
@endsection