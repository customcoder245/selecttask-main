<?php

namespace App\Console;
use DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
          
			$users_task = DB::table('task')->rightJoin('task_meta', 'task.id', '=', 'task_meta.task_id')->get();
			foreach($users_task as $users_task1){
				if($users_task1->meta_key=="applicant_user"){
					$apply_user=json_decode($users_task1->meta_value);
					if(!isset($apply_user->hire) && !isset($apply_user->complete)){
					  $user_data=get_userdata($users_task1->user_id);
					  $apply_list=$apply_user->apply_user;
					  	$to_name = $user_data->name;
		                $to_email= $user_data->email;
		
		
		$mdata = array("name"=>$to_name, 'email'=>$to_email,'users'=>$apply_list,'task_id'=>$users_task1->task_id,'user_id'=>$users_task1->user_id);
		Mail::send("notification.ActionReminder_AwaitingAssignment_After1day",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Congrats on taking the first step to becoming a Select Task pro!");
			$message->from("support@selecttask.com","SelectTask");
			});
					}
				}
			}
        })->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
