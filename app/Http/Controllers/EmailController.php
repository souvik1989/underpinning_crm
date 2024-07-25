<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;
use App\Models\Email;
use App\Models\User;

class EmailController extends Controller
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
    
    public function list()
    {
         $data['user_count']=User::where('status', 'active')->count();
          $data['mails']=Email::orderBy('created_at', 'DESC')->get();
        return view('panel.content.email.list',$data); 
    }
    public function index()
    {
           $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.email.mail'); 
    }

  


    public function sendEmail(Request $request)
{
    //dd('user');

    //$user = User::find($request->user);

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
     $mail = new Email();
        $mail->fill($request->all());
     
   

    // Store attachments as JSON
    $mail->attachments = json_encode($storedFiles);

    // Save mail details to database
    $mail->save();
    Mail::to($recipient)->send(new ContactReplyMail($subject, $message, $data));
    


    return redirect()->back()->with('success', 'Email sent successfully.');
}

 public function emailDelete(string $id)
    {
      $job = Email::find($id);
        // foreach($job->future_jobs as $fjob){
        //     $fjob->delete();
        // }
        //dd($job->invoice);
        
        $job->delete();
        
         return redirect()->route('email.list')->with("success", "Record Deleted Successfully!");
    }

}
