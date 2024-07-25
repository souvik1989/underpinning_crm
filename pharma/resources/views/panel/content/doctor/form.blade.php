<div class="row">
    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="FirstName">Doctor Name<span class="text-danger">*</span></label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bxs-book-content'></i>
            </span>
            <input type="date" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Job Date" value="{{old('name', isset($doctor->name) ? $doctor->name:'')}}" />
        </div>
    </div>



    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="LastName">Hospital<span class="text-danger">*</span></label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bxs-book-content'></i>
            </span>
            <input type="text" name="hospital" class="form-control @error('hospital') is-invalid @enderror" id="LastName" placeholder="Hospital" value="{{old('hospital', isset($doctor->hospital) ? $doctor->hospital:'')}}" />
        </div>
    </div>



    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="LastName">Gender<span class="text-danger">*</span></label>
        <div class="input-group input-group-merge">
           
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" {{ old('gender', isset($doctor) && $doctor->gender == 'male' ? 'checked' : '') }} value="male">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" {{ old('gender', isset($doctor) && $doctor->gender == 'female' ? 'checked' : '') }} value="female">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
        </div>
    </div>



    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="LastName">Marital Status<span class="text-danger">*</span></label>
        <div class="input-group input-group-merge">
           
            <div class="form-check">
                <input class="form-check-input" type="radio" name="marital_status" id="flexRadioDefault12" {{ old('marital_status', isset($doctor) && $doctor->marital_status == 'married' ? 'checked' : '') }} value="married">
                <label class="form-check-label" for="flexRadioDefault12">
                    Married
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="marital_status" id="flexRadioDefault22" {{ old('marital_status', isset($doctor) && $doctor->marital_status == 'unmarried' ? 'checked' : '') }} value="unmarried">
                <label class="form-check-label" for="flexRadioDefault22">
                    Unmarried
                </label>
            </div>
        </div>
    </div>



    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="LastName">Registration No.<span class="text-danger">*</span></label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bxs-book-content'></i>
            </span>
            <input type="text" name="reg_no" class="form-control @error('reg_no') is-invalid @enderror" id="LastName" placeholder="Registration No." value="{{old('reg_no', isset($doctor->reg_no) ? $doctor->reg_no:'')}}" />
        </div>
    </div>


    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="LastName">Qualification<span class="text-danger">*</span></label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bxs-book-content'></i>
            </span>
            <input type="text" name="qualification" class="form-control @error('hospital') is-invalid @enderror" id="LastName" placeholder="Qualification" value="{{old('qualification', isset($doctor->qualification) ? $doctor->qualification:'')}}" />
        </div>
    </div>

    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="Email"> Email <span class="text-danger">*</span></label>
        <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder=" Email" value="{{old('email', isset($doctor->email) ? $doctor->email:'')}}" />
        </div>
    </div>


    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="SitePhone">Phone 1</label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bx-phone-call'></i>
            </span>

            <input type="tel" name="phone1" class="form-control @error('phone1') is-invalid @enderror" id="Phone1" placeholder="Phone 1" value="{{old('phone1', isset($doctor->phone1) ? $doctor->phone1:'')}}" />
        </div>
    </div>


    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="SitePhone">Phone 2</label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bx-phone-call'></i>
            </span>

            <input type="tel" name="phone2" class="form-control @error('phone2') is-invalid @enderror" id="Phone2" placeholder="Phone 1" value="{{old('phone2', isset($doctor->phone2) ? $doctor->phone2:'')}}" />
        </div>
    </div>

    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="SitePhone">Phone 3</label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bx-phone-call'></i>
            </span>

            <input type="tel" name="phone3" class="form-control @error('phone3') is-invalid @enderror" id="Phone3" placeholder="Phone 1" value="{{old('phone3', isset($doctor->phone3) ? $doctor->phone3:'')}}" />
        </div>
    </div>
    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="Address">DOB</label>
        <div class="input-group input-group-merge">
            <span class="input-group-text">
                <i class='bx bxs-book-content'></i>
            </span>

            <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" placeholder="DOB" value="{{old('dob', isset($doctor->dob) ? $doctor->dob:'')}}" />
        </div>
    </div>






    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="Address">Location</label>
        <div class="input-group input-group-merge">
           
            <div class="mb-3" id="Menu2Container">


                <select class="form-control show-tick" name="location_id">
                    <option value="" Disabled selected> Please Select Option </option>
                    @if ($locations->count() > 0)
                    @foreach ($locations as $location)
                    @if (!empty($doctor->location_id) && $doctor->location_id== $location->id || collect(old('location_id'))->contains($location->id))
                    <option value="{{ $location->id }}" selected=""> {{ $location->name }} </option>
                    @else
                    <option value="{{ $location->id }}"> {{ $location->name }} </option>
                    @endif
                    @endforeach
                    @endif
                </select>

            </div>
        </div>
    </div>


    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="Address">Division</label>
        <div class="input-group input-group-merge">
            

            <div class="mb-3" id="Menu2Container">


                <select class="form-control show-tick" name="division_id">
                    <option value="" Disabled selected> Please Select Option </option>
                    @if ($divisions->count() > 0)
                    @foreach ($divisions as $division)
                    @if (!empty($doctor->division_id) && $doctor->division_id== $division->id || collect(old('division_id'))->contains($division->id))
                    <option value="{{ $division->id }}" selected=""> {{ $division->name }} </option>
                    @else
                    <option value="{{ $division->id }}"> {{ $division->name }} </option>
                    @endif
                    @endforeach
                    @endif
                </select>

            </div>
        </div>
    </div>


    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="Address">Category</label>
        <div class="input-group input-group-merge">
           

            <div class="mb-3" id="Menu2Container">


                <select class="form-control show-tick" name="doctor_category_id">
                    <option value="" Disabled selected> Please Select Option </option>
                    @if ($categories->count() > 0)
                    @foreach ($categories as $category)
                    @if (!empty($doctor->doctor_category_id) && $doctor->doctor_category_id== $doctor_category->id || collect(old('doctor_category_id'))->contains($doctor_category->id))
                    <option value="{{ $doctor_category->id }}" selected=""> {{ $doctor_category->name }} </option>
                    @else
                    <option value="{{ $doctor_category->id }}"> {{ $doctor_category->name }} </option>
                    @endif
                    @endforeach
                    @endif
                </select>

            </div>
        </div>
    </div>

    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="Address">Speciality</label>
        <div class="input-group input-group-merge">
           

            <div class="mb-3" id="Menu2Container">


                <select class="form-control show-tick" name="speciality_id">
                    <option value="" Disabled selected> Please Select Option </option>
                    @if ($specialities->count() > 0)
                    @foreach ($specialities as $speciality)
                    @if (!empty($doctor->speciality_id) && $doctor->speciality_id== $speciality->id || collect(old('speciality_id'))->contains($speciality->id))
                    <option value="{{ $speciality->id }}" selected=""> {{ $speciality->name }} </option>
                    @else
                    <option value="{{ $speciality->id }}"> {{ $speciality->name }} </option>
                    @endif
                    @endforeach
                    @endif
                </select>

            </div>
        </div>
    </div>


    <div class="mb-3 col-lg-4 col-md-6">
        <label class="form-label" for="Address">City</label>
        <div class="input-group input-group-merge">
            

            <div class="mb-3" id="Menu2Container">


                <select class="form-control show-tick" name="city_id">
                    <option value="" Disabled selected> Please Select Option </option>
                    @if ($cities->count() > 0)
                    @foreach ($cities as $city)
                    @if (!empty($doctor->city_id) && $doctor->city_id== $city->id || collect(old('city_id'))->contains($city->id))
                    <option value="{{ $city->id }}" selected=""> {{ $city->name }} </option>
                    @else
                    <option value="{{ $city->id }}"> {{ $city->name }} </option>
                    @endif
                    @endforeach
                    @endif
                </select>

            </div>
        </div>
    </div>



</div>




<button type="submit" class="btn btn-primary">{{isset($doctor) ? 'Update' : 'Create'}}</button>
<a class="btn btn-danger" href="{{ route('doctor.index') }}">Cancel</a>











@include('panel.common.scripts')
