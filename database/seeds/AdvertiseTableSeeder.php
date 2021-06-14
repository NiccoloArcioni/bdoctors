<?php

use Illuminate\Database\Seeder;
use App\Advertise;

class AdvertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 

            //$random = rand(0,2);

            $type = ['Basic' , 'Medium', 'Premium'] ;
            $price = [2.99 , 5.99, 9.99] ;
            $hours = [24 , 72, 144] ;

            $new_advertise = new Advertise();
            $new_advertise->type = $type[$i];
            $new_advertise->price = $price[$i];
            $new_advertise->hours = $hours[$i];
            $new_advertise->save();
        }
    }
}
