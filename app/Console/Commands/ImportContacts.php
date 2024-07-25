<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\Contact;

class ImportContacts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
   protected $signature = 'contacts:import';

    protected $description = 'Import contacts from external URL';

    public function handle()
    {
//         // Get the timestamp of the last import
//         //$lastImportTimestamp = Config::get('last_import_timestamp');
//     $lastImportedEntry = Contact::orderBy('created_at', 'desc')->first();
//     $lastImportTimestamp = $lastImportedEntry ? strtotime($lastImportedEntry->created_at) : 0;
//         // Fetch JSON data
//         $jsonData = Http::get('https://www.bestunderpinning.com.au/wp-json/submission/v1/form-data')->json();

//         //Filter only the new entries since the last import
//         $newEntries = array_filter($jsonData, function ($data) use ($lastImportTimestamp) {
//             return strtotime($data['created_at']) > $lastImportTimestamp;
//         });
      
// //dd($jsonData);
//         // Insert new entries into the database
//         foreach ($newEntries as $data) {
//             Contact::updateOrCreate(
//                 //['email' => $data['email']],
//                 [
//                     'name' => $data['name'],
//                     'phone' => $data['number'],
//                     'business_name' => $data['business_name'],
//                     'message' => $data['message'],
//                     'site_url' => $data['site_url'],
//                   // 'created_at' => $data['created_at'],
//                     'email' => $data['email']
//                 ]
//             );
//         }

//         // Update last import timestamp
//         Config::set('last_import_timestamp', time());

        \Log::info('Testing Crons!');
    }
}
