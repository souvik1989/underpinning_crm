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
use App\Mail\QuoteSendMail;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function generateUniqueQuoteNo()
    {
        do {
            $quoteNo = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        } while (Quote::where('quote_no', $quoteNo)->exists());

        return $quoteNo;
    }
    public function index()
    {
        $data['quotes'] = Quote::orderBy('created_at', 'DESC')->get();
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.quote.list', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.quote.create',$data); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  $values = $request->validate([
            'quote_date'=>'required|date',
            "customer_name" => 'required|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'price'=>'nullable|string',
             'quantity'=>'nullable|integer',
              'site_address' => 'nullable|string|max:1000',
             'address' => 'nullable|string|max:1000',
             'description' => 'nullable|string|max:1000',
             'comment' => 'nullable|string|max:1000',
            
           
        ]);
        $quote = new Quote();
        $quote->fill($request->all());
        $quote->save();
       
         $random = mt_rand(10000, 99999);
         $invoice= new Invoice();
         $invoice->quote_id= $quote->id;
        $invoice->invoice_no=$random.'/Q';
        ///dd($this->generateUniqueQuoteNo().'/Q');
        $invoice->save();     
        
        
    return redirect()->route('quote.index')->with("success", "Record Saved successfully!");
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
         $data['quote']= Quote::find($id);
        $data['user_count']=User::where('status', 'active')->count();
        return view('panel.content.quote.edit', $data); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $values = $request->validate([
            'quote_date'=>'required|date',
            "customer_name" => 'required|string',
             "email"=>'email|required|string',
             'phone' => 'nullable|string',
             'price'=>'nullable|string',
             'quantity'=>'nullable|integer',
              'site_address' => 'nullable|string|max:1000',
             'address' => 'nullable|string|max:1000',
             'description' => 'nullable|string|max:1000',
             'comment' => 'nullable|string|max:1000',
            
           
        ]);
        $quote = Quote::find($id);
        $quote->fill($request->all());
        $quote->save();
       
           
        
        
    return redirect()->route('quote.index')->with("success", "Record Updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $quote = Quote::find($id);
        // foreach($job->future_jobs as $fjob){
        //     $fjob->delete();
        // }
        //$quote->invoice->delete();
        $quote->delete();
        
         return redirect()->route('quote.index')->with("success", "Record Deleted Successfully!");
    }
    
     public function status($id)
    {
        try
        {
            $quote = Quote::findOrFail($id);
            if ($quote->status == 'active')
            {
                $quote->status = 'inactive';
            }
            else
            {
                $quote->status = 'active';
            }
            $quote->save();
            return redirect()->back()->with('success', __("Status updated successfully"));
        }
        catch(\Throwable $th)
        {
            abort(404);
        }

    }
    
      public function invoice($id)
    {
        try
        {
            $quote = Quote::findOrFail($id);
            
         $invoice= new Invoice();
         $invoice->quote_id= $quote->id;
        
        ///dd($this->generateUniqueQuoteNo().'/Q');
        $invoice->save(); 
        $quote->invoice_status='yes';
        $quote->save();
            return redirect()->back()->with('success', __("Featured status updated successfully"));
        }
        catch(\Throwable $th)
        {
            abort(404);
        }

    }
    
    public function downloadOrderSummary(Request $request, $id) {
    // Fetch the order details here, similar to how you do in your existing code.
$quote = Quote::find($id);
$data['quote'] = $quote;
    
     $pdf = app('dompdf.wrapper');
  $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);
$path='https://crm.3raredesigns.com/public/storage/siteSetting/SKGPdCM6snwLl67EivBIvEOBTn6LkqGnN7LfWfhP.png';
$type=pathinfo($path,PATHINFO_EXTENSION);
$dat=file_get_contents($path);
$pic='data:image/'.$type.';base64,'.base64_encode($dat);
$data['img']=$pic;
        $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true,'images' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
    // Generate the PDF from the view
    $pdf->loadView('panel.content.quote.pdfViewMail', $data)->setOptions(['defaultFont' => 'sans-serif']);

    // Optionally, customize the PDF (e.g., set paper size, orientation, etc.)
    $pdf->setPaper('a4', 'portrait');

    // Download the PDF with a specific filename
    return $pdf->download('quote-summary'.$quote->quote_no.'.pdf');
}

 public function sendEmail(Request $request)
{
    //dd('user');

    $quote = Quote::find($request->quote);

   $path='https://crm.3raredesigns.com/public/storage/siteSetting/SKGPdCM6snwLl67EivBIvEOBTn6LkqGnN7LfWfhP.png';
$type=pathinfo($path,PATHINFO_EXTENSION);
$dat=file_get_contents($path);
$pic='data:image/'.$type.';base64,'.base64_encode($dat);

   

  
    $data = [
        'quote' => $quote,
       'img'=>$pic,
    ];
    //dd($storedFiles);
    
    Mail::to('souvik.pal@3raredynamics.com')->send(new QuoteSendMail($data));
    


    return redirect()->back()->with('success', 'Email sent successfully.');
}

}
