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
        $plans = include('config\advertise_doctor.php');
        
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
