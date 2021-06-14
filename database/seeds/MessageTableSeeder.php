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
        // for ($i=0; $i < 10; $i++) {


        //     $new_message = new Message();

        //     $doctorCount = User::count();
        //     $new_message->doctor_id = rand(1,$doctorCount);

        //     $new_message->name_user = 'Giuseppe'.$i;
        //     $new_message->surname_user = 'Festa'.$i;
        //     $new_message->mail_user =  'giuseppe'.$i.'@gmail.com';
        //     $new_message->message_user = 'lorem ipsum bla bla bla';
        //     $new_message->save();
        // }


        //esempio di due messaggi
        //primo messaggio
            $new_message = new Message();
            $doctorCount = User::count();
            $new_message->doctor_id = rand(1,$doctorCount);
            $new_message->name_user = 'Giuseppe';
            $new_message->surname_user = 'Festa';
            $new_message->mail_user =  'giuseppe@gmail.com';
            $new_message->message_user = 'lorem ipsum blu blu blu';
            $new_message->save();


        //secondo messaggio
            $new_message = new Message();
            $doctorCount = User::count();
            $new_message->doctor_id = rand(1,$doctorCount);
            $new_message->name_user = 'Niccolo\'';
            $new_message->surname_user = 'Arcioni';
            $new_message->mail_user =  'nicolo@gmail.com';
            $new_message->message_user = 'Lorem ipsum bla bla bla';
            $new_message->save();




    }
}
