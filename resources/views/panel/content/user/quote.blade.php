@extends('panel.master')

@section('title', 'Add Quote')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Quotes<span>Form</span></h2>
                    <h6 class="mb-0">Underpinning</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard </li>
                        <li class="breadcrumb-item">Quote</li>
                        <li class="breadcrumb-item active">Add</li>
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
                        <h5>Quotes</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('user.quote.post',$user)}}" class="needs-validation" novalidate="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf

<div class="row">
    <div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="FirstName">Quote Date<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="date" name="quote_date" class="form-control @error('quote_date') is-invalid @enderror" id="quote_date" placeholder="Quote Date" value="{{old('quote_date')}}" />
    </div>
</div>



<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Customer Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="customer_name" class="form-control @error('customer_name') is-invalid @enderror" id="LastName" placeholder="Customer Name" value="{{old('customer_name', isset($user->first_name) ? $user->first_name:'')}}" />
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

        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="Phone" placeholder="Phone"  value="{{old('phone', isset($user->phone) ? $user->phone:'')}}"  />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">Price</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" value="{{old('price')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">Quantity</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="number" min="0" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" placeholder="Quantity" value="{{old('quantity')}}" />
    </div>
</div>



<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address"></label>
    <div class="input-group input-group-merge">
       <span>* Price will include GST @ 10%</span>
    </div>
    
</div>


<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Customer Address</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('address') is-invalid @enderror" rows="4" name="address" id="Address">{{old('address')}}</textarea>
    </div>
</div>

<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Site Address</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('site_address') is-invalid @enderror" rows="4" name="site_address" id="site_address">{{old('site_address')}}</textarea>
    </div>
</div>
<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Description</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('description') is-invalid @enderror" rows="4" name="description" id="description">{{old('description')}}</textarea>
    </div>
</div>

<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Comment</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('comment') is-invalid @enderror" rows="4" name="comment" id="comment">{{old('comment')}}</textarea>
    </div>
</div>
</div>



 <input  name="id" type="hidden" value="{{$user->id}}" >



<button type="submit" class="btn btn-primary">Create</button>
<a class="btn btn-danger" href="{{ route('quote.index') }}">Cancel</a>





     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>



{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var sectionCount = 1; // Counter to keep track of section numbers
    $('.repeatable-section:first .remove-btn').hide();
    $('#addSectionBtn').on('click', function() {
        sectionCount++; // Increment the section counter

        var newSection = $('.repeatable-section:first').clone(); // Clone the first section
        newSection.attr('data-index', sectionCount); // Set the new index

        // Update the name attributes to ensure uniqueness
        newSection.find('input[name^="job_date_future"]').attr('name', 'job_date_future[' + sectionCount + ']');
        newSection.find('input[name^="notification"]').attr('name', 'notification[' + sectionCount + ']');
        newSection.find('textarea[name^="description_future"]').attr('name', 'description_future[' + sectionCount + ']');

        newSection.find('input, textarea').val('');
        newSection.find('.remove-btn').show(); // Clear the inputs and textareas
        $('#repeatable-sections').append(newSection); // Append the new section
        // Show the remove button for new sections



        // Ensure first section's remove button is hidden


    });

    function removeSection(element) {
        var section = $(element).closest('.repeatable-section');
        var index = parseInt(section.attr('data-index'));

        // Only allow removal if it's not the first section
        if (index > 1) {
            section.remove();
            sectionCount--;
        }
    }

</script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Initialize section count based on the number of existing sections
    var sectionCount = $('#repeatable-sections .repeatable-section').length;

    // Hide the remove button if there's only one section
    if (sectionCount === 1) {
        $('.repeatable-section:first .remove-btn').hide();
    }

    $('#addSectionBtn').on('click', function() {
        sectionCount++; // Increment the section counter

        // Clone the first section
        var newSection = $('.repeatable-section:first').clone();

        // Update name attributes to ensure uniqueness
        newSection.find('input[name^="job_date_future"]').attr('name', 'job_date_future[' + sectionCount + ']');
        newSection.find('input[name^="notification"]').attr('name', 'notification[' + sectionCount + ']');
        newSection.find('textarea[name^="description_future"]').attr('name', 'description_future[' + sectionCount + ']');

        // Clear the cloned section's content
        newSection.find('input, textarea').val('');

        // Show the remove button on the new section
        newSection.find('.remove-btn').show();

        // Append the new section to the end of the repeatable sections
        $('#repeatable-sections').append(newSection); // Use append() to add to the end
    });

    function removeSection(element) {
        var section = $(element).closest('.repeatable-section');
        var index = parseInt(section.attr('data-index'));

        // Allow removal only if there's more than one section
        if (sectionCount > 1) {
            section.remove(); // Remove the section
            sectionCount--; // Decrement the section count
        }

        // Hide the remove button if there's only one section left
        if (sectionCount === 1) {
            $('.repeatable-sections .remove-btn').hide();
        }
    }
</script>


@include('panel.common.scripts')
@endsection