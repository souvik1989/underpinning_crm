@extends('panel.master')

@section('title', 'Send Email')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Email<span>List</span></h2>
                    <h6 class="mb-0">Underpinning</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard </li>
                        <li class="breadcrumb-item">Email</li>
                        <li class="breadcrumb-item active">List</li>
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
                        <h5>Email List</h5>
                    </div>
                    <div class="card-body">

                      
                        
                       
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Recipient</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                      {{--  <th>Attachments</th>--}}
            
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($mails->count() > 0 )
                                    @foreach($mails as $mail)
                                    <tr>

                                        <td>
                                            {{ $mail->recipient }}
                                        </td>
                                        <td>
                                            {{ $mail->subject ?? '' }}
                                        </td>
                                        <td>
                                            {{ Str::limit($mail->message, 100) ?? '' }}
                                        </td>
                                     
                                        
                                      
                                        
                                        
                                       
                                        <td>
                                            {{ \Carbon\Carbon::parse($mail->created_at)->format('d/m/Y')}}
                                        </td>
                                        <td>
                                          {{--  <a href="{{ route('mail.edit', $mail) }}" class="btn btn-pill btn-warning edit-sec" title="Edit">
                                                 <i class="pe-7s-edit"></i>
                                            </a>--}}
                                            <div class="d-inline-block">
                                            <form action="{{route('mail.destroy', $mail->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill Delete delete-sec" style="cursor: pointer;" title="Delete">

                                                     <i class="pe-7s-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                        </td>
                                        
                                    </tr>
                                   
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <td colspan="7" class="text-center">Mails not available</td>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                       <th>Recipient</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                      {{--  <th>Attachments</th>--}}
            
                                        <th>Date</th>
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
