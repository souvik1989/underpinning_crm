<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;

class User2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['users'] = User::where(function($query) {
        $query->where('site_url','!=','https://www.bestunderpinning.com.au')
              ->orWhereNull('site_url');
    })
    ->orderBy('created_at', 'DESC')
    ->get();
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
}
