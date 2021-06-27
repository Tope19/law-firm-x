<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Client;


class WeeklyImageUploadReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:weekly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Respectively send an exclusive reminder to upload their profile message to everyone who do not have a profile image weekly via email.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $reminder = [
            'message' => 'Hello there, Please kindly upload your profile image in your Law-Firm-X Profile Account to enable smoother device rendering.',
        ];


        $key = array($reminder);
        $data = $reminder[$key];

        $users = User::where('profile_image', null);
        foreach ($users as $user) {
            Mail::raw("{$key} -> {$data}", function ($mail) use ($user) {
                $mail->from('admin@lawfirmx.com');
                $mail->to($user->email)
                    ->subject('DWeekly Profile Image Reminder!');
            });
        }

        $this->info('Successfully sent weekly reminder to everyone.');
    }
}
