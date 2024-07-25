<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $jsonData = Http::get('https://www.bestunderpinning.com.au/wp-json/submission/v1/form-data')->json();
        //dd($jsonData);
        foreach ($jsonData as $data) {
   $contact = Contact::firstOrNew(['contact_date' => $data['created_at']]);
if (!$contact->exists) {
    $contact->fill([
        'name' => $data['name'],
        'email'=> $data['email'],
        'phone' => $data['number'],
        'business_name' => $data['business_name'],
        'site_url' => $data['site_url'],
        'message'=> $data['message'],
        'contact_date'=>$data['created_at'],
       
    ])->save();
}
}
 

 $data['contacts'] = Contact::orderBy('contact_date', 'DESC')->get();
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.contact.list', $data); 
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
        $data['contact']= Contact::find($id);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.contact.edit',$data);  
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
         $contact = Contact::find($id);
        $contact->delete();
        
       
       

        
        
    return redirect()->route('contact.index')->with("success", "Record Deleted Successfully!");
    }
    
     public function status($id)
    {
        try
        {
            $contact = Contact::findOrFail($id);
            if ($contact->status == 'active')
            {
                $contact->status = 'inactive';
            }
            else
            {
                $contact->status = 'active';
            }
            $contact->save();
            return redirect()->back()->with('success', __("Status updated successfully"));
        }
        catch(\Throwable $th)
        {
            abort(404);
        }

    }

}
