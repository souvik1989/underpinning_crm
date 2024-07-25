<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\FutureJob;
use App\Models\Invoice;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function generateUniqueJobNo()
    {
        do {
            $jobNo = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        } while (Job::where('job_no', $jobNo)->exists());

        return $jobNo;
    }
    public function index()
    { 
       $now = Carbon::now(); 
        $futureJobs = FutureJob::whereRaw('DATE_SUB(job_date, INTERVAL notification DAY) <= ?', [$now->toDateString()])->get();
   // dd($futureJobs);
        $data['jobs'] = Job::orderBy('created_at', 'DESC')->get();
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.job.list', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.job.create',$data); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $values = $request->validate([
            'job_date'=>'required|date',
            "customer_name" => 'required|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'price'=>'nullable|string',
             'quantity'=>'nullable|integer',
             'hours'=>'nullable|integer',
             'gst'=>'nullable',
             'address' => 'nullable|string|max:1000',
              'site_address' => 'nullable|string|max:1000',
             'description' => 'nullable|string|max:1000',
             'comment' => 'nullable|string|max:1000',
             'job_date_future.*' => 'nullable|date',
             'notification.*' => 'nullable|integer',
             'description_future.*' => 'nullable|string',
           
        ]);
      
        $job = new Job();
        $job->fill($request->all());
        $job->job_no=Str::random(6);
        $job->save();
        $invoice= new Invoice();
        $invoice->job_id= $job->id;
        $invoice->invoice_no=$this->generateUniqueJobNo().'/I';
        $invoice->save();     
        $jobDates = array_filter($request->input('job_date_future', []));
        $notifications = $request->input('notification', []);
        $descriptions = $request->input('description_future', []);
        //dd($jobDates);
        if(!empty($jobDates)){
        foreach ($jobDates as $index => $date) {
            // Create a new Job record for each section
            $fjob = new FutureJob();
            $fjob->job_id=$job->id;
            $fjob->job_no=Str::random(6);
            $fjob->job_date=$date;
            $fjob->notification=$notifications[$index] ?? null;
            $fjob->description=$descriptions[$index] ?? null;
            $fjob->save();
            // FutureJob::create([
            //     'job_id'=>$job->id,
            //    'job_no'=> Str::random(6),
            //     'job_date' => $date,
                
            //     'notification' => $notifications[$index] ?? null,
            //     'description' => $descriptions[$index] ?? null,
            // ]);
            $inv= new Invoice();
            $inv->future_job_id= $fjob->id;
            $inv->job_id= $job->id;
            $inv->invoice_no=$this->generateUniqueJobNo().'/I';
            $inv->save();     
        }

    }
        
    return redirect()->route('job.index')->with("success", "Record Saved successfully!");
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
        $data['job']= Job::find($id);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.job.edit', $data); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {  //dd($request->all());
        $values = $request->validate([
            'job_date'=>'required|date',
            "customer_name" => 'required|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'price'=>'nullable|string',
             'quantity'=>'nullable|integer',
             'hours'=>'nullable|integer',
             'gst'=>'nullable',
             'address' => 'nullable|string|max:1000',
               'site_address' => 'nullable|string|max:1000',
             'description' => 'nullable|string|max:1000',
             'comment' => 'nullable|string|max:1000',
             'job_date_future.*' => 'nullable|date',
             'notification.*' => 'nullable|integer',
             'description_future.*' => 'nullable|string',
           
        ]);
      
        $job = Job::find($id);
        $job->fill($request->all());
        $job->save();
            
        $jobDates = array_filter($request->input('job_date_future', []));
        $notifications = $request->input('notification', []);
        $descriptions = $request->input('description_future', []);
        //dd($jobDates);
        if(!empty($jobDates)){
        foreach ($jobDates as $index => $date) {
            // Create a new Job record for each section
            $fjob = new FutureJob();
            $fjob->job_id=$job->id;
            $fjob->job_no=Str::random(6);
            $fjob->job_date=$date;
            $fjob->notification=$notifications[$index] ?? null;
            $fjob->description=$descriptions[$index] ?? null;
            $fjob->save();
            $random = mt_rand(10000, 99999);
            $inv= new Invoice();
            $inv->future_job_id= $fjob->id;
            $inv->job_id= $job->id;
            $inv->invoice_no=$random.'/I';
            $inv->save();     
        }

    }
        
    return redirect()->route('job.index')->with("success", "Record Updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $job = Job::find($id);
        // foreach($job->future_jobs as $fjob){
        //     $fjob->delete();
        // }
        //dd($job->invoice);
        if($job->invoice  !== null){
        $job->invoice->delete();
        }
        $job->delete();
        
         return redirect()->route('job.index')->with("success", "Record Deleted Successfully!");
    }
    
     public function status($id)
    {
        try
        {
            $job = Job::findOrFail($id);
            if ($job->status == 'active')
            {
                $job->status = 'inactive';
            }
            else
            {
                $job->status = 'active';
            }
            $job->save();
            return redirect()->back()->with('success', __("Featured status updated successfully"));
        }
        catch(\Throwable $th)
        {
            abort(404);
        }

    }

    
}
