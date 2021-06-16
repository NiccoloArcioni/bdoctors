<?php

use Illuminate\Database\Seeder;
use App\AdvertiseDoctor;
class AdvertiseDoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                "advertise_id" => 1 ,
                "doctor_id" => 1,
                "payment_status" => "accettato",
                "start_ads_date" => "2021-05-20",
                "end_ads_date" => "2021-05-21"
            ],
            [
                "advertise_id" => 2,
                "doctor_id" => 2,
                "payment_status" => "accettato",
                "start_ads_date" => "2021-05-13",
                "end_ads_date" => "2021-05-16"
            ],
            [
                "advertise_id" => 3 ,
                "doctor_id" => 3,
                "payment_status" => "accettato",
                "start_ads_date" => "2021-06-14",
                "end_ads_date" => "2021-06-20"
            ],
            [
                "advertise_id" => 3,
                "doctor_id" => 2,
                "payment_status" => "accettato",
                "start_ads_date" => "2021-06-15",
                "end_ads_date" => "2021-06-21"
            ],
            [
                "advertise_id" => 3,
                "doctor_id" => 1,
                "payment_status" => "accettato",
                "start_ads_date" => "2021-06-15",
                "end_ads_date" => "2021-06-21"
            ],
            [
                "advertise_id" => 3,
                "doctor_id" => 4,
                "payment_status" => "accettato",
                "start_ads_date" => "2021-06-15",
                "end_ads_date" => "2021-06-30"
            ]
        ];
        
        foreach ($plans as $plan) {
            $new_plan = new AdvertiseDoctor();
            $new_plan->advertise_id = $plan['advertise_id'];
            $new_plan->doctor_id = $plan['doctor_id'];
            $new_plan->payment_status = $plan['payment_status'];
            $new_plan->start_ads_date = $plan['start_ads_date'];
            $new_plan->end_ads_date = $plan['end_ads_date'];
            $new_plan->save();
        } 
    }
}
