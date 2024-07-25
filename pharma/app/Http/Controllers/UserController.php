<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\FutureJob;
use App\Models\Quote;
use App\Models\Invoice;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;

class UserController extends Controller
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
        $data['users'] = User::where('site_url','https://www.bestunderpinning.com.au')->orderBy('lead_date', 'DESC')->get();
        //dd( $data['users']);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.user.list', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.user.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            "first_name" => 'required|string',
            "last_name"=> 'required|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'address' => 'nullable|string|max:1000',
             'area' => 'nullable|string',
             'business_name' => 'nullable|string',
             'site_url'=>'nullable|string',
           
        ]);
     
        $user = new User();
        $user->fill($request->all());
        
        $user->save();
       

        
        
    return redirect()->route('user.index')->with("success", "Record Saved successfully!");
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
        $data['user']= User::find($id);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.user.edit',$data);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $values = $request->validate([
            "first_name" => 'required|string',
            "last_name"=> 'required|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'address' => 'nullable|string|max:1000',
             'area' => 'nullable|string',
             'business_name' => 'nullable|string',
             'site_url'=>'nullable|string',
           
        ]);
     
        $user = User::find($id);
        $user->fill($request->all());
        
        $user->save();
       

        
        
    return redirect()->route('user.index')->with("success", "Record updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        
       
       

        
        
    return redirect()->route('user.index')->with("success", "Record Deleted Successfully!");
    }

    public function status($id)
    {
        try
        {
            $user = User::findOrFail($id);
            if ($user->status == 'active')
            {
                $user->status = 'inactive';
            }
            else
            {
                $user->status = 'active';
            }
            $user->save();
            return redirect()->back()->with('success', __("Featured status updated successfully"));
        }
        catch(\Throwable $th)
        {
            abort(404);
        }

    }

    public function sendEmail(Request $request)
{
    //dd('user');

    $user = User::find($request->user);

    $request->validate([
        'recipient' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
        'attachments' => 'nullable|array', // Ensure it's an array
        'attachments.*' => 'file', // Validate each item in the array is a file
    ]);

   

    $recipient = $request->input('recipient');
    $subject = $request->input('subject');
    $message = $request->input('message');
    $attachment = $request->attachments;
    //dd($attachment);
    if ($attachment) {
        foreach ($attachment as $file) {
        $filePath = $file->store('attachments'); // Store the file
        $storedFiles[] = $filePath;
        } // Set the stored file path
    } else {
        $storedFiles[] = null; // No attachment provided
    }
    $data = [
        'attachments' => $storedFiles,
       
    ];
    //dd($storedFiles);
    
    Mail::to($recipient)->send(new ContactReplyMail($subject, $message, $data));
    


    return redirect()->back()->with('success', 'Email sent successfully.');
}

 public function addJob(string $id)
    {
        //dd($id);
        $data['user']= User::find($id);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.user.job', $data); 
    }
    
    
     public function addJobPost(Request $request)
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
             'description' => 'nullable|string|max:1000',
             'comment' => 'nullable|string|max:1000',
             'job_date_future.*' => 'nullable|date',
             'notification.*' => 'nullable|integer',
             'description_future.*' => 'nullable|string',
           
        ]);
      
        $job = new Job();
        $job->fill($request->all());
        $job->user_id=$request->id;
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
    
    public function addQuote(string $id)
    {
        //dd($id);
        $data['user']= User::find($id);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.user.quote', $data); 
    }
    
    
    public function addQuotePost(Request $request)
    {
       //dd($request->all());
    $values = $request->validate([
            'quote_date'=>'required|date',
            "customer_name" => 'required|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'price'=>'nullable|string',
             'quantity'=>'nullable|integer',
            
             'address' => 'nullable|string|max:1000',
             'description' => 'nullable|string|max:1000',
             'comment' => 'nullable|string|max:1000',
            
           
        ]);
        $quote = new Quote();
        $quote->fill($request->all());
        if($request->id){
        $quote->user_id=$request->id;
        }
        $quote->save();
       
         $random = mt_rand(10000, 99999);
         $invoice= new Invoice();
         $invoice->quote_id= $quote->id;
        $invoice->invoice_no=$random.'/Q';
        ///dd($this->generateUniqueQuoteNo().'/Q');
        $invoice->save();     
        
        
    return redirect()->route('quote.index')->with("success", "Record Saved successfully!");
    }
}
