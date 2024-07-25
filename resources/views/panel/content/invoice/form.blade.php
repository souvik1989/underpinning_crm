<div class="row">
    <div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="FirstName">Job Date<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="date" name="job_date" class="form-control @error('job_date') is-invalid @enderror" id="job_date" placeholder="Job Date" value="{{old('job_date', isset($job->job_date) ? $job->job_date:'')}}" />
    </div>
</div>



<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="LastName">Customer Name<span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>
        <input type="text" name="customer_name" class="form-control @error('customer_name') is-invalid @enderror" id="LastName" placeholder="Customer Name" value="{{old('customer_name', isset($job->customer_name) ? $job->customer_name:'')}}" />
    </div>
</div>







<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Email"> Email <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder=" Email" value="{{old('email', isset($job->email) ? $job->email:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="SitePhone">Phone</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bx-phone-call'></i>
        </span>

        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="Phone" placeholder="Phone" value="{{old('phone', isset($job->phone) ? $job->phone:'')}}" />
    </div>
</div>


<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">Price</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" value="{{old('price', isset($job->price) ? $job->price:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">Quantity</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="number" min="0" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" placeholder="Quantity" value="{{old('quantity', isset($job->quantity) ? $job->quantity:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">No. of Hours</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <input type="number" min="0" name="hours" class="form-control @error('hours') is-invalid @enderror" id="hours" placeholder="No of Hours" value="{{old('hours', isset($job->hours) ? $job->hours:'')}}" />
    </div>
</div>

<div class="mb-3 col-lg-4 col-md-6">
    <label class="form-label" for="Address">GST</label>
    <div class="radio radio-primary">
        <input id="radio11" type="radio" name="gst" value="yes" {{old('gst', isset($job->gst) && $job->gst=='yes' ? 'checked':'')}}>
        <label for="radio11">Include GST</label>
    </div>
    <div class="radio radio-primary">
        <input id="radio22" type="radio" name="gst" value="no" {{old('gst', isset($job->gst) && $job->gst=='no' ? 'checked':'')}}>
        <label for="radio22"> Exclude GST</label>
    </div>
    {{-- <label class="form-label" for="Address">GST</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gst" value="yes" id="flexRadioDefault1" {{old('gst', isset($job->gst) && $job->gst=='yes' ? 'checked':'')}}>
    <label class="form-check-label" for="flexRadioDefault1">
        Include GST
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="gst" id="flexRadioDefault2" value="no" {{old('gst', isset($job->gst) && $job->gst=='no' ? 'checked':'')}}>
    <label class="form-check-label" for="flexRadioDefault2">
        Exclude GST
    </label>
</div> --}}
</div>


<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Customer Address</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('address') is-invalid @enderror" rows="4" name="address" id="Address">{{old('address', isset($job->address) ? $job->address:'')}}</textarea>
    </div>
</div>
<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Description</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('description') is-invalid @enderror" rows="4" name="description" id="description">{{old('description', isset($job->description) ? $job->description:'')}}</textarea>
    </div>
</div>

<div class="mb-3 col-lg-12 col-md-12">
    <label class="form-label" for="Address">Comment</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text">
            <i class='bx bxs-book-content'></i>
        </span>

        <textarea class="form-control @error('comment') is-invalid @enderror" rows="4" name="comment" id="comment">{{old('comment', isset($job->comment) ? $job->comment:'')}}</textarea>
    </div>
</div>
</div>
<h3>Future Job Note</h3>
@if(isset($job))


<div class="container mt-4">
@foreach($job->future_jobs as $f => $future)
    <div id="not-repeatable-sections">
        <!-- The first section to clone and repeat -->
        <div class="not-repeatable-section" data-index="1">
            <div class="row">
                <div class="mb-3 col-lg-3 col-md-3">
                <label class="form-label" for="job_date_1">Job Date<span class="text-danger">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <i class='bx bxs-book-content'></i>
                    </span>
                    <input readonly type="date"  class="form-control" placeholder="Job Date" value="{{ isset($future->job_date) ? $future->job_date:''}}"/>
                </div>
            </div>
            <div class="mb-3 col-lg-3 col-md-3">
                <label class="form-label" for="notification_1">Notification</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <i class='bx bxs-book-content'></i>
                    </span>
                    <input readonly type="number" min="0"  class="form-control" placeholder="Default Notification" value="{{ isset($future->notification) ? $future->notification:''}}"/>
                </div>
            </div>
            <div class="mb-3 col-lg-6 col-md-6">
                <label class="form-label" for="description_1">Description</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <i class='bx bxs-book-content'></i>
                    </span>
                    <textarea readonly class="form-control" rows="4"  placeholder="Description">{{ isset($future->description) ? $future->description:''}}</textarea>
                </div>
            </div>
            </div>
            
            </div>
            {{-- <div class="mb-3 text-right">
                <a href="#" class="remove-btn" onclick="removeSection(this)">✖</a>
            </div> --}}
        </div>
    
@endforeach
    <!-- Button to add new section -->
    {{-- <div class="mb-3 text-right">
        <button type="button" id="addSectionBtn" class="btn btn-primary">Add Section</button>
    </div> --}}



</div>
@endif
<div class="container mt-4">
@php
    $sectionCount = old('job_date_future', []) ? count(old('job_date_future', [])) : 1; // Determine how many sections to render
@endphp
    <div id="repeatable-sections">
        <!-- The first section to clone and repeat -->
          @for ($i = 1; $i <= $sectionCount; $i++)
        <div class="repeatable-section" data-index="{{$i}}">
            <div class="row special-row">
            <div class="mb-3 col-lg-3 col-md-3">
                <label class="form-label" for="job_date_1">Job Date<span class="text-danger">*</span></label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <i class='bx bxs-book-content'></i>
                    </span>
                    <input type="date" name="job_date_future[{{$i}}]" class="form-control" placeholder="Job Date"   value="{{ old('job_date_future.'.$i) }}"/>
                </div>
            </div>
            <div class="mb-3 col-lg-3 col-md-3">
                <label class="form-label" for="notification_1">Notification</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <i class='bx bxs-book-content'></i>
                    </span>
                    <input type="number" min="0" name="notification[{{$i}}]" class="form-control" placeholder="Default Notification"  value="{{ old('notification.'.$i) }}"/>
                </div>
            </div>
            <div class="mb-3 col-lg-6 col-md-6">
                <label class="form-label" for="description_1">Description</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <i class='bx bxs-book-content'></i>
                    </span>
                    <textarea class="form-control" rows="4" name="description_future[{{$i}}]" placeholder="Description">{{ old('description_future.'.$i) }}</textarea>
                </div>
            </div>
            </div>
            <div class="mb-3 text-right">
                <a href="#" class="remove-btn" onclick="removeSection(this)"><i class='bx bxs-trash-alt' ></i></a>
            </div>
        </div>
        @endfor
    </div>

    <!-- Button to add new section -->
    <div class="mb-3 text-right">
        <button type="button" id="addSectionBtn" class="btn"><i class='bx bx-plus' ></i></button>
    </div>



</div>






<button type="submit" class="btn btn-primary">{{isset($job) ? 'Update' : 'Create'}}</button>
<a class="btn btn-danger" href="{{ route('job.index') }}">Cancel</a>









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
