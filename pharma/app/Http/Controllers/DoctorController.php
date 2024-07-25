<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Doctor, Location, Speciality, DoctorCategory , Division};
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['user_count']=Doctor::where('status', 1)->count();
        $data['doctors'] = Doctor::orderBy('created_at', 'DESC')->get();
        return view('panel.content.doctor.list', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['user_count']=Doctor::where('status', 1)->count();
        $data['locations']=Location::where('status', 1)->get();
        $data['divisions']=Division::where('status', 1)->get();
        $data['categories']=DoctorCategory::where('status', 1)->get();
        $data['specialities']=Speciality::where('status', 1)->get();
        $data['cities'] = DB::table('cities')
        ->where('state_id',4853)
        ->get();

        return view('panel.content.doctor.create',$data); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            "name" => 'required|string',
            "hospital" => 'nullable|string',
            'doctor_category_id' => 'required|exists:doctor_categories,id',
            'city_id' => 'nullable|exists:cities,id',
            'division_id' => 'nullable|exists:division,id',
            'speciality_id' => 'nullable|exists:specialities,id',
            'location_id' => 'nullable|exists:locations,id',
            "email" => "nullable|email|unique:doctors,email",
            "phone1" => "nullable|string|unique:doctors,phone1",
            "phone2" => "nullable|string|unique:doctors,phone2",
            "phone3" => "nullable|string|unique:doctors,phone3",
            'dob' => 'nullable|date',
            'anniversary' => 'nullable|date',
            'gender' => 'nullable|string',
            'marrital_status' => 'nullable|string',
            'reg_no' => 'nullable|string|max:80000',
            'qualification' => 'nullable|string|max:80000',
            
        ]);
        $doctor = new Doctor();
        $doctor->fill($request->all());
          $doctor->division()
          ->associate($request->division_id);
          $doctor->speciality()
          ->associate($request->speciality_id);
          $doctor->doctor_category()
          ->associate($request->doctor_category_id);
          $doctor->location()
          ->associate($request->location_id);
          $doctor->save();
          return redirect()->route('doctor.index')->with("success", "Record Saved successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['user_count']=Doctor::where('status', 1)->count();
        $data['locations']=Location::where('status', 1)->get();
        $data['divisions']=Division::where('status', 1)->get();
        $data['categories']=DoctorCategory::where('status', 1)->get();
        $data['specialities']=Speciality::where('status', 1)->get();
        $data['cities'] = DB::table('cities')
        ->where('state_id',4853)
        ->get();
        $data['doctors'] = Doctor::find($id);
        return view('panel.content.doctor.create',$data); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $values = $request->validate([
            "name" => 'required|string',
            "hospital" => 'nullable|string',
            'doctor_category_id' => 'required|exists:doctor_categories,id',
            'city_id' => 'nullable|exists:cities,id',
            'division_id' => 'nullable|exists:division,id',
            'speciality_id' => 'nullable|exists:specialities,id',
            'location_id' => 'nullable|exists:locations,id',
            "email" => "nullable|email|unique:doctors,email",
            "phone1" => "nullable|string|unique:doctors,phone1",
            "phone2" => "nullable|string|unique:doctors,phone2",
            "phone3" => "nullable|string|unique:doctors,phone3",
            'dob' => 'nullable|date',
            'anniversary' => 'nullable|date',
            'gender' => 'nullable|string',
            'marrital_status' => 'nullable|string',
            'reg_no' => 'nullable|string|max:80000',
            'qualification' => 'nullable|string|max:80000',
            
        ]);
        $doctor = Doctor::find($id);
        $doctor->fill($request->all());
          $doctor->division()
          ->associate($request->division_id);
          $doctor->speciality()
          ->associate($request->speciality_id);
          $doctor->doctor_category()
          ->associate($request->doctor_category_id);
          $doctor->location()
          ->associate($request->location_id);
          $doctor->save();
          return redirect()->route('doctor.index')->with("success", "Record Updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::findOrFail($id);
           
          
        $doctor->delete();

    
return redirect()->route('doctor.index')->with("success", __("Record Deleted Successfully!"));
    }

    public function status($id)
    {
        try
        {
            $doctor = Doctor::findOrFail($id);
            if ($doctor->status == '1')
            {
                $doctor->status = '0';
            }
            else
            {
                $doctor->status = '1';
            }
            $doctor->save();
            return redirect()->back()->with('success', __("Status updated successfully"));
        }
        catch(\Throwable $th)
        {
            abort(404);
        }

    }
}
