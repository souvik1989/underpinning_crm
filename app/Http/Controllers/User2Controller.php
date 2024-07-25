<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;
use Illuminate\Support\Facades\Http;

class User2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $jsonData = Http::get('https://www.bestunderpinning.com.au/wp-json/submission/v1/form-data')->json();
         $jsonData1 = Http::get('https://sydneyfoundationunderpinning.com.au/wp-json/submission/v1/form-data')->json();
        //dd($jsonData1);
        foreach ($jsonData as $data) {
   $user = User::firstOrNew(['email' => $data['email']]);
if (!$user->exists) {
    $user->fill([
        'first_name' => $data['name'],
        'email'=> $data['email'],
        'phone' => $data['number'],
        'message' => $data['message'],
        'business_name' => $data['business_name'],
        'lead_date'=> $data['created_at'],
        'site_url' => $data['site_url'],
       
    ])->save();
}
}

foreach ($jsonData1 as $dataa) {
   $user1 = User::firstOrNew(['email' => $dataa['email']]);
   
if (!$user1->exists) {
    //dd($user1);
    $user1->fill([
        'first_name' => $dataa['name'],
        'email'=> $dataa['email'],
        'phone' => $dataa['number'],
        'message' => $dataa['message'],
        'business_name' => $dataa['business_name'],
        'lead_date'=> $dataa['created_at'],
        'site_url' => $dataa['site_url'],
       
    ])->save();
}
}
        $data['users'] = User::where('site_url','https://sydneyfoundationunderpinning.com.au')->orderBy('created_at', 'DESC')->get();
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.user2.list', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.user2.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $values = $request->validate([
            "first_name" => 'required|string',
            "last_name"=> 'nullable|string',
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
       

        
        
    return redirect()->route('user2.index')->with("success", "Record Saved successfully!");
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
        return view('panel.content.user2.edit',$data);  
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
       

        
        
    return redirect()->route('user2.index')->with("success", "Record updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        
       
       

        
        
    return redirect()->route('user2.index')->with("success", "Record Deleted Successfully!");
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
    //dd('user2');

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
        return view('panel.content.user2.job', $data); 
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
        return view('panel.content.user2.quote', $data); 
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
