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
use DB;

class FutureJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now();

        // Get all future jobs that need notification today or if the notification date is in the past
     $futureJobs = FutureJob::where('job_date', '>', Carbon::now())
                 ->whereRaw('DATE_SUB(job_date, INTERVAL notification DAY) <= CURRENT_DATE')
                 ->where('job_date', '>', DB::raw('CURRENT_DATE'))
                 ->get();

       foreach ($futureJobs as $futureJob) {
            // Calculate the notification date
            $notificationDate = Carbon::parse($futureJob->job_date);
//dd($futureJob->job->email);
            //if ($notificationDate->lessThanOrEqualTo($now)) {
                // Send notification email
               

                // Optionally, delete or mark the job to avoid multiple notifications
                // Uncomment the following line if you want to delete after sending
                // $futureJob->delete();
           // }
        }
        $data['jobs'] = FutureJob::orderBy('created_at', 'DESC')->get();
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.future-job.list', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data['job']= FutureJob::find($id);
     

    $data['parent']=$data['job']->job;
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.future-job.edit', $data); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
