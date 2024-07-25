@extends('panel.master')

@section('title', 'Edit Users')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>User<span>Form</span></h2>
                    <h6 class="mb-0">Website 2</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard </li>
                        <li class="breadcrumb-item">Leads</li>
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
                        <h5>Leads</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('user2.update',$user)}}" class="needs-validation" novalidate="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @include('panel.content.user2.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



@endsection