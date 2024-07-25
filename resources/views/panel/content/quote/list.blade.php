@extends('panel.master')

@section('title', 'Quote List')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Quotes<span>Table</span></h2>
                    <h6 class="mb-0">Underpinning...</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>

                        <li class="breadcrumb-item active">Quotes</li>
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
                        <h5>Quotes List</h5>
                    </div>
                    <div class="card-body">

                        <a href="{{ route('quote.create') }}" class="btn btn-primary mb-3">
                            + Add new Quote
                        </a>
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Quote ID</th>
                                        <th>Website</th>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                       
                                        <th>Price</th>
                                         <th>Invoice Status</th>
                                        <th>Status</th>
                                        <th>Download</th>
                                        <th>Mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($quotes->count() > 0 )
                                    @foreach($quotes as $quote)
                                    <tr>

                                        <td>
                                            {{ $quote->quote_no }}
                                        </td>
                                         <td>
                                            {{ $quote->user->site_url ?? ''}}
                                        </td>
                                        <td>
                                            {{\Carbon\Carbon::parse($quote->quote_date)->format('d/m/Y')}}
                                        </td>
                                        
                                        <td>
                                            {{  $quote->invoice->invoice_no ?? '' }}
                                        </td>
                                       <td>
                                            {{  $quote->customer_name ?? '' }}
                                        </td>
                                         <td>
                                            {{  $quote->email ?? '' }}
                                        </td>
                                        

                                         <td>
                                            {{  $quote->price ?? '' }}
                                        </td>
                                        <td>
                                            @if($quote->invoice_status=='no')
                                              <button class="btn btn-primary status-sec cross" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                                                  <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                            <form action="{{route('quote.invoice', $quote->id)}}" method="POST">
                          <div class="modal-body">
                          
                                                        @csrf
                                                        @method('PUT')
                                                        <p>Do you want to create Invoice?</p>
                                                  
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                              <button class="btn btn-primary" type="submit">Save changes</button>
                          </div>
                            </form>
                        </div>
                      </div>
                    </div>
                    @else
                     <span class="btn btn-primary status-sec right"><i class="fa fa-check" aria-hidden="true"></i></span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn @if(isset($quote->status) && ($quote->status=='active')) btn-success @else btn-danger @endif dropdown-toggle btn-sm text-white" data-toggle="dropdown" aria-expanded="false">

                                                    <?=(isset($quote->status) && $quote->status=='active')?'<i class="fa fa-dot-circle-o text-success"></i> Active':'<i class="fa fa-dot-circle-o text-danger"></i> Inactive';?>

                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <form action="{{route('quote.status', $quote->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="dropdown-item status-btn btn-round" style="cursor: pointer;">

                                                            {!! ($quote->status=='active')? "<i class='fa fa-dot-circle-o text-danger'></i> Inactive":"<i class='fa fa-dot-circle-o text-success'></i> Active" !!}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                         <td style="text-align: center;"><a href="{{ route('quote.summary', ['quote' => $quote->id]) }}" class="btn btn-primary btn-pill delete-sec">
    <i class='bx bxs-file-pdf'></i>
</a></td>
</td>
                                         <td> <form action="{{route('quote.send')}}" method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        
                                                          <input type="hidden" name="quote" value="{{$quote->id}}"/>
                                                         <button type="submit" class="btn btn-primary mail-sec"> <i class='bx bx-mail-send'></i></button>
                                                        </form></td>


                                        <td>
                                            <a href="{{ route('quote.edit', $quote) }}" class="btn btn-pill btn-warning edit-sec">
                                               <i class='bx bx-edit' ></i>
                                            </a>
                                            <div class="d-inline-block">
                                            <form action="{{route('quote.destroy', $quote->id)}}" method="POST">
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
                                    <td colspan="9" class="text-center">Quotes not available</td>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Quote ID</th>
                                        <th>Website</th>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                       
                                        <th>Price</th>
                                         <th>Invoice Status</th>
                                        <th>Status</th>
                                        <th>Download</th>
                                        <th>Mail</th>
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
