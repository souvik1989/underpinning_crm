@extends('panel.master')

@section('title', 'Future Job List')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Jobs<span>Table</span></h2>
                    <h6 class="mb-0">Underpinning...</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>

                        <li class="breadcrumb-item active">Jobs</li>
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
                        <h5>Job List</h5>
                    </div>
                    <div class="card-body">

                      
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        {{--<th>Job ID</th>--}}
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Notification Days</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($jobs->count() > 0 )
                                    @foreach($jobs as $job)
                                    <tr>

                                        {{--<td>
                                            {{ $job->job_no }}
                                        </td>--}}
                                        <td>
                                            {{\Carbon\Carbon::parse($job->job_date)->format('d/m/Y')}}
                                        </td>
                                        
                                        <td>
                                            {{  $job->invoice->invoice_no ?? '' }}
                                        </td>
                                       <td>
                                            {{  $job->job->customer_name ?? '' }}
                                        </td>
                                         <td>
                                            {{  $job->job->email ?? '' }}
                                        </td>
                                         <td>
                                            {{ $job->job->phone  ?? '' }}
                                        </td>

                                         <td>
                                            {{  $job->notification ?? '' }}
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn @if(isset($job->status) && ($job->status=='active')) btn-success @else btn-danger @endif dropdown-toggle btn-sm text-white" data-toggle="dropdown" aria-expanded="false">

                                                    <?=(isset($job->status) && $job->status=='active')?'<i class="fa fa-dot-circle-o text-success"></i> Active':'<i class="fa fa-dot-circle-o text-danger"></i> Inactive';?>

                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <form action="{{route('future-job.status', $job->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="dropdown-item status-btn btn-round" style="cursor: pointer;">

                                                            {!! ($job->status=='active')? "<i class='fa fa-dot-circle-o text-danger'></i> Inactive":"<i class='fa fa-dot-circle-o text-success'></i> Active" !!}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                        
                                        <td>
                                            <a href="{{ route('future-job.edit', $job) }}" class="btn btn-pill btn-primary edit-sec" title="View">
                                                <i class='bx bx-low-vision'></i>
                                            </a>
                                        <!--    <div class="d-inline-block">-->
                                        <!--    <form action="{{route('future-job.destroy', $job->id)}}" method="POST">-->
                                        <!--        @csrf-->
                                        <!--        @method('DELETE')-->
                                        <!--        <button type="submit" class="btn btn-danger btn-pill Delete " style="cursor: pointer;">-->

                                        <!--            Delete-->
                                        <!--        </button>-->
                                        <!--    </form>-->
                                        <!--</div>-->
                                        </td>
                                        
                                    </tr>
                                   
                                    @endforeach
                                    @else
                                    <td colspan="9" class="text-center">jobs not available</td>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Job ID</th>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Notification Days</th>
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
