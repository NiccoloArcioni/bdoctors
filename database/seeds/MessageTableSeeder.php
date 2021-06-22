<?php

use Illuminate\Database\Seeder;
use App\Message;
use App\User;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = include('config\message.php');

        for ($i=1; $i <= User::count(); $i++) {
            foreach ($messages as $message) {
                $new_message = new Message();
                $new_message->doctor_id = $i;
                $new_message->name_user = $message['name_user'];
                $new_message->surname_user = $message['surname_user'];
                $new_message->mail_user =  $message['mail_user'];
                $new_message->message_user = $message['message_user'];
                $new_message->created_at = $message['create_at'];
                $new_message->updated_at = $message['updated_at'];
                $new_message->save();
            }
        }
    }
}
