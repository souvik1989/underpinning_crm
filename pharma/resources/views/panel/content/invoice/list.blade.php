@extends('panel.master')

@section('title', 'Invoice List')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Invoice<span>Table</span></h2>
                    <h6 class="mb-0">Underpinning...</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>

                        <li class="breadcrumb-item active">Invoices</li>
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
                        <h5>Invoice List</h5>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive scroll-top">
                            <table class="display normal-position" id="advance-1">
                                <thead>
                                    <tr>
                                       
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                          <th>Ref. Quote</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                       {{-- <th>No. of Hours</th>
                                        <th>Mail Send</th>--}}
                                        <th>Invoice Status</th>
                                        <th>Status</th>
                                        <th style="min-width: 70px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($invoices->count() > 0 )
                                    @foreach($invoices as $invoice)
                                    <tr>

                                        <td>
                                            {{\Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y')}}
                                        </td>
                                         <td>
                                            {{$invoice->invoice_no}}
                                        </td>
                                        <td>
                                            {{$invoice->quote->quote_no ?? ''}}
                                        </td>
                                        
                                        @if(!empty($invoice->job_id))
                                       <td>
                                            {{  $invoice->job->customer_name ?? '' }}
                                        </td>
                                        @else
                                        <td>
                                            {{  $invoice->quote->customer_name ?? '' }}
                                        </td>
                                        @endif
                                           @if(!empty($invoice->job_id))
                                       <td>
                                            {{  $invoice->job->email ?? '' }}
                                        </td>
                                        @else
                                        <td>
                                            {{  $invoice->quote->email ?? '' }}
                                        </td>
                                        @endif
                                        {{--<td>
                                            {{  $invoice->job->hours ?? 0 }}
                                        </td>
                                         <td>
                                            {{  ($invoice->mail_send==0) ?'No' :'Yes' }}
                                        </td>--}}

                                         <td>
    

 <select class="form-select invoice-status" data-invoice-id="{{ $invoice->id }}" aria-label="Default select example">
  <option value="" {{$invoice->invoice_status==null ? 'selected':''}} disabled>Select One</option>
  <option  value="mailed" {{$invoice->invoice_status=='mailed'? 'selected':''}}>Mailed</option>
  <option value="paid" {{$invoice->invoice_status=='paid'? 'selected':''}}>Paid</option>
  <option value="due" {{$invoice->invoice_status=='due'? 'selected':''}}>Due</option>
</select>
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn @if(isset($invoice->status) && ($invoice->status=='active')) btn-success @else btn-danger @endif dropdown-toggle btn-sm text-white active-inactive-btn" data-toggle="dropdown" aria-expanded="false">

                                                    <?=(isset($invoice->status) && $invoice->status=='active')?'<i class="fa fa-dot-circle-o text-success"></i> Active':'<i class="fa fa-dot-circle-o text-danger"></i> Inactive';?>

                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <form action="{{route('invoice.status', $invoice->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="dropdown-item status-btn btn-round" style="cursor: pointer;">

                                                            {!! ($invoice->status=='active')? "<i class='fa fa-dot-circle-o text-danger'></i> Inactive":"<i class='fa fa-dot-circle-o text-success'></i> Active" !!}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                        
                                        <td>
                                            {{--<a href="{{ route('invoice.edit', $invoice) }}" class="btn btn-pill btn-info edit-sec" title="Edit">
                                                 <i class='bx bx-edit' ></i>
                                            </a>--}}
                                            <div class="d-inline-block">
                                            <form action="{{route('invoice.destroy', $invoice->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill Delete delete-sec" style="cursor: pointer;" title="Delete">

                                                    <i class='bx bxs-trash' ></i>
                                                </button>
                                            </form>
                                        </div>
                                        
                                        <a href="{{ route('invoice.summary', ['invoice' => $invoice->id]) }}" class="btn btn-pill btn btn-warning delete-sec" title="Download Invoice">
    <i class='bx bxs-file-pdf'></i>
</a>
 <div class="d-inline-block">
<form action="{{route('invoice.send')}}" method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        
                                                          <input type="hidden" name="invoice" value="{{$invoice->id}}"/>
                                                         <button type="submit" class="btn btn-pill btn btn-primary delete-sec" title="Send Mail"> <i class='bx bx-mail-send'></i></button>
                                                        </form></div>
                                        </td>
                                        
                                    </tr>
                                   
                                    @endforeach
                                    @else
                                    <td colspan="9" class="text-center">Invoices not available</td>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                          <th>Ref. Quote</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                       {{-- <th>No. of Hours</th>
                                        <th>Mail Send</th>--}}
                                        <th>Invoice Status</th>
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


<script>
$(document).ready(function() {
    $('.invoice-status').on('change', function() {
        var invoiceStatus = $(this).val();
        var invoiceId = $(this).data('invoice-id');
        //alert(invoiceStatus);
        $.ajax({
            url: '{{ route("update.invoice.status") }}',
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                invoice_id: invoiceId,
                invoice_status: invoiceStatus
            },
            success: function(response) {
               // alert('Invoice status updated successfully.');
                 iziToast.success({
                    message: 'Invoice status updated successfully.',
                    position: "topRight"
                });
            },
            error: function(xhr) {
               iziToast.error({
                    message: 'An error occurred while updating the invoice status.',
                    position: "topRight"
                });
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function() {
  const dropdowns = document.querySelectorAll('.invoice-status');

  // Loop through all dropdowns with the class 'invoice-status'
  dropdowns.forEach(function(dropdown) {
    dropdown.addEventListener('change', function() {
      const selectedOption = this.value;
      let color = '';
      if (selectedOption === "mailed") {
        color = "yellow"; // Change color for 'Mailed'
      } else if (selectedOption === "paid") {
        color = "lightgreen"; // Change color for 'Paid'
      } else if (selectedOption === "due") {
        color = "lightcoral"; // Change color for 'Due'
      } else {
        color = ""; // Reset color if 'Select One' is chosen
      }

      // Apply the color to the parent element (row)
      this.parentElement.style.backgroundColor = color;

      // Save the selected color to localStorage for each dropdown
      localStorage.setItem('selectedColor-' + this.id, color);
    });

    // Set the initial color based on the initial selected value
    const selectedOption = dropdown.value;
    let color = '';
    if (selectedOption === "mailed") {
      color = "yellow"; // Change color for 'Mailed'
    } else if (selectedOption === "paid") {
      color = "lightgreen"; // Change color for 'Paid'
    } else if (selectedOption === "due") {
      color = "lightcoral"; // Change color for 'Due'
    }
    dropdown.parentElement.style.backgroundColor = color;
  });
});




</script>




@endsection
