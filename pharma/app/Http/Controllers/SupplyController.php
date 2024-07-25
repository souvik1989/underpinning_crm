<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supplier;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['suppliers'] = Supplier::orderBy('created_at', 'DESC')->get();
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.supplier.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.supplier.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $values = $request->validate([
            "name" => 'required|string',
            "address"=> 'nullable|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'address' => 'nullable|string|max:1000',
             'business_name' => 'nullable|string',
             'business_type'=>'nullable|string',
            'website'=>'nullable|string',
        ]);
     
        $supplier = new Supplier();
        $supplier->fill($request->all());
        
        $supplier->save();
       

        
        
    return redirect()->route('supplier.index')->with("success", "Record Saved successfully!");
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
         $data['supplier']= Supplier::find($id);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.supplier.edit',$data); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $values = $request->validate([
            "name" => 'required|string',
            "address"=> 'nullable|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'address' => 'nullable|string|max:1000',
             'business_name' => 'nullable|string',
             'business_type'=>'nullable|string',
                'website'=>'nullable|string',
           
        ]);
     
        $supplier = Supplier::find($id);
        $supplier->fill($request->all());
        
        $supplier->save();
       

        
        
    return redirect()->route('supplier.index')->with("success", "Record updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Supplier::find($id);
        $user->delete();
        
    return redirect()->route('supplier.index')->with("success", "Record Deleted Successfully!");
    }
    
    public function status($id)
    {
        try
        {
            $user = Supplier::findOrFail($id);
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
}
