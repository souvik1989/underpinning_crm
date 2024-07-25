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
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceSendMail;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['invoices'] = Invoice::orderBy('created_at', 'DESC')->get();
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.invoice.list', $data); 
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
        //
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
         $invoice = Invoice::findOrFail($id);
          $invoice->delete();
        
         return redirect()->route('invoice.index')->with("success", "Record Deleted Successfully!");
    }
    public function status($id)
    {
        try
        {
            $invoice = Invoice::findOrFail($id);
            if ($invoice->status == 'active')
            {
                $invoice->status = 'inactive';
            }
            else
            {
                $invoice->status = 'active';
            }
            $invoice->save();
            return redirect()->back()->with('success', __("Status updated successfully"));
        }
        catch(\Throwable $th)
        {
            abort(404);
        }

    }
    
    public function updateStatus(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'invoice_status' => 'required|string'
        ]);

        $invoice = Invoice::find($request->invoice_id);
        $invoice->invoice_status = $request->invoice_status;
        $invoice->save();

        return response()->json(['success' => true, 'message' => 'Invoice status updated successfully.']);
    }
    
     public function downloadOrderSummary(Request $request, $id) {
    // Fetch the order details here, similar to how you do in your existing code.
$invoice = Invoice::find($id);
$data['invoice'] = $invoice;
    
     $pdf = app('dompdf.wrapper');
  $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);
$path=base_path('logo.png');
$type=pathinfo($path,PATHINFO_EXTENSION);
$dat=file_get_contents($path);
$pic='data:image/'.$type.';base64,'.base64_encode($dat);
$data['img']=$pic;
        $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true,'images' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
    // Generate the PDF from the view
    $pdf->loadView('panel.content.invoice.pdfViewMail', $data)->setOptions(['defaultFont' => 'sans-serif']);

    // Optionally, customize the PDF (e.g., set paper size, orientation, etc.)
    $pdf->setPaper('a4', 'portrait');

    // Download the PDF with a specific filename
    return $pdf->download('invoice-summary'.$invoice->invoice_no.'.pdf');
}


public function sendEmail(Request $request)
{
    //dd('user');
$email='';
    $invoice = Invoice::find($request->invoice);
 if(!empty($invoice->job_id)){
    $email=  $invoice->job->email;
 }   else{
     $email=   $invoice->quote->email;
 }
       //dd($email);                               
   $path=base_path('logo.png');
$type=pathinfo($path,PATHINFO_EXTENSION);
$dat=file_get_contents($path);
$pic='data:image/'.$type.';base64,'.base64_encode($dat);

   

  
    $data = [
        'invoice' => $invoice,
       'img'=>$pic,
    ];
    //dd($storedFiles);
    
    Mail::to($email)->send(new InvoiceSendMail($data));
    


    return redirect()->back()->with('success', 'Email sent successfully.');
}
}
