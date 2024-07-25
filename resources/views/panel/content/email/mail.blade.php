@extends('panel.master')

@section('title', 'Send Email')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Email<span>Form</span></h2>
                    <h6 class="mb-0">Underpinning</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard </li>
                        <li class="breadcrumb-item">Email</li>
                        <li class="breadcrumb-item active">Send</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Send Email</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('email.send')}}" class="needs-validation" novalidate="" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                           
                           <div class="row justify-content-center">
    <div class="mb-3 col-lg-9 col-md-6">
    <label class="form-label" for="FirstName">Recipient</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
         <input type="email" name="recipient"  class="form-control @error('recipient') is-invalid @enderror" id="recipient" placeholder="Enter Recipient">
    </div>
</div>



<div class="mb-3 col-lg-9 col-md-6">
    <label class="form-label" for="LastName">Subject</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
         <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject" placeholder="Enter Subject" />
    </div>
</div>







<div class="mb-3 col-lg-9 col-md-6">
    <label class="form-label" for="Email"> Message</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
       <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Enter Message"></textarea>
    </div>
</div>


<div class="mb-3 col-lg-9 col-md-6">
    <label class="form-label" for="SitePhone">Attachments</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

         <input type="file" name="attachments[]"  class="form-control" id="attachments"  multiple/>
    </div>
</div>


</div>

  
<div class="text-center"><button type="submit" class="btn btn-primary">Send</button>
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button></div>
</div>













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