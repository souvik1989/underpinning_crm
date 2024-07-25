@extends('panel.master')

@section('title', 'Doctor List')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Doctors<span>Table</span></h2>
                    <h6 class="mb-0">Pharma...</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>

                        <li class="breadcrumb-item active">Doctors</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Doctor List</h5>
                    </div>
                    <div class="card-body">

                        <a href="{{ route('doctor.create') }}" class="btn btn-primary mb-3">
                            + Add new Doctor
                        </a>
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                       
                                        <th>Name</th>
                                        <th>Hospital Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Speciality</th>
                                         <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($doctors->count() > 0 )
                                    @foreach($doctors as $doctor)
                                    <tr>

                                     
                                        <td>
                                            {{ $doctor->name ?? ''}}
                                        </td>
                                        
                                        <td>
                                            {{  $doctor->hospital ?? '' }}
                                        </td>
                                       <td>
                                            {{   $doctor->gender ?? '' }}
                                        </td>
                                         <td>
                                            {{  $doctor->email ?? '' }}
                                        </td>
                                         <td>
                                            {{  $doctor->speciality->name ?? '' }}
                                        </td>

                                         <td>
                                            {{  $doctor->location->name ?? '' }}
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn @if(isset($doctor->status) && ($doctor->status=='1')) btn-success @else btn-danger @endif dropdown-toggle btn-sm text-white" data-toggle="dropdown" aria-expanded="false">

                                                    <?=(isset($doctor->status) && $doctor->status=='1')?'<i class="fa fa-dot-circle-o text-success"></i> Active':'<i class="fa fa-dot-circle-o text-danger"></i> Inactive';?>

                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <form action="{{route('doctor.status', $doctor->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="dropdown-item status-btn btn-round" style="cursor: pointer;">

                                                            {!! ($doctor->status=='1')? "<i class='fa fa-dot-circle-o text-danger'></i> Inactive":"<i class='fa fa-dot-circle-o text-success'></i> Active" !!}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                        
                                        <td>
                                            <a href="{{ route('doctor.edit', $doctor) }}" class="btn btn-pill btn-primary edit-sec">
                                                   <i class='bx bx-edit' ></i>
                                            </a>
                                            <div class="d-inline-block">
                                            <form action="{{route('doctor.destroy', $doctor->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill Delete delete-sec" style="cursor: pointer;">

                                                    <i class='bx bxs-trash' ></i>
                                                </button>
                                            </form>
                                        </div>
                                        </td>
                                        
                                    </tr>
                                   
                                    @endforeach
                                    @else
                                    <td colspan="9" class="text-center">doctors not available</td>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Hospital Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Speciality</th>
                                         <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@include('panel.common.deleteConfirm')
@endsection
