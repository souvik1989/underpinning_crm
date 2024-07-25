<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FutureJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobNotificationMail;
use Carbon\Carbon;
use DB;

class ProcessJobNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:process-job-notifications';
    protected $description = 'Process and send job notifications based on future jobs';
    /**
     * The console command description.
     *
     * @var string
     */
   // protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
          $now = Carbon::now();

        // Get all future jobs that need notification today or if the notification date is in the past
       // $futureJobs = FutureJob::whereRaw('DATE_SUB(job_date, INTERVAL notification DAY) <= ?', [$now->toDateString()])->get();
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
                Mail::to($futureJob->job->email)->send(
                    new JobNotificationMail($futureJob)
                );

                // Optionally, delete or mark the job to avoid multiple notifications
                // Uncomment the following line if you want to delete after sending
                // $futureJob->delete();
           // }
        }

        $this->info('Job notifications processed and sent.');
    }
 }

