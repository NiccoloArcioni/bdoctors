<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Specialization;
use App\AdvertiseDoctor;

class WelcomeController extends Controller
{
    public function index() {
        $time_now = date("Y-m-d");
        $doctor_ads = AdvertiseDoctor::where('end_ads_date', '>' , $time_now)->get();
        $doctors = [];
        foreach($doctor_ads as $doctor) {
            $doctor_id = $doctor->id;
            $new_doctor = User::where('id', $doctor_id)->first();
            array_push($doctors, $new_doctor);
        }
        return view('welcome', compact("doctors"));
    }

    public function search(Request $request){
        $search = $request->input('search');
        $spec = Specialization::where('specialization', $search)->first();
        $doctors = User::all();
        $filtered_doctors = [];
        foreach($doctors as $doctor) {
            foreach($doctor->specializations as $specialization) {
                if($specialization->id == $spec->id) {
                    array_push($filtered_doctors, $doctor);
                }
            }
        }
        $data = [
            'doctors' => $filtered_doctors,
            'specialization' => $specialization
        ];
        return view('search', $data);
    }
}
