@extends('panel.master')

@section('title', 'Edit Future Jobs')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Future Jobs<span>Form</span></h2>
                    <h6 class="mb-0">Underpinning</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard </li>
                        <li class="breadcrumb-item">Future Jobs</li>
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
                        <h5>Future Jobs</h5>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route('future-job.update',$job)}}" class="needs-validation" novalidate="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @include('panel.content.future-job.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



@endsection
