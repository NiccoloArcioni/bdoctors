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
        $doctor_ads = AdvertiseDoctor::whereDate('end_ads_date', '>' , $time_now)->get();
        $doctors = [];
       
        foreach($doctor_ads as $ad) {
            $doctor_id = $ad->doctor_id;
            $new_doctor = User::where('id', $doctor_id)->first();
            
            if($new_doctor) {
                array_push($doctors, $new_doctor);
            }
        }
       

        $data = [
            'doctors' => $doctors,
            'specializations' => Specialization::all()
        ];
        return view('welcome', $data);
    }

    public function search(Request $request){
        $search = $request->input('search');
        $spec = Specialization::where('id', $search)->first();
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

    public function detail($id) {
        $doctor = User::where('id', $id)->first();
        return view('doctor_detail', compact('doctor'));
    }
}
