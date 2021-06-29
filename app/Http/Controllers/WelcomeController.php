<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Specialization;
use App\AdvertiseDoctor;
use App\Message;
use App\Review;

class WelcomeController extends Controller
{
    public function index() {
        $currentDate = date("Y-m-d");
        $doctor_ads = AdvertiseDoctor::whereDate('end_ads_date', '>' , $currentDate)->get();
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
            'specializations' => Specialization::all(),
            'alldoctors' => User::all(),
            'reviews' => Review::all()
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
            'specialization' => $specialization,
        ];
        return view('search', $data);
    }

    public function detail($id) {
        $doctor = User::where('id', $id)->first();
        return view('doctor_detail', compact('doctor'));
    }

    public function store_message(Request $request, $id) {
        $request -> validate([
            'name_user' => ['required'],
            'surname_user' => ['required'],
            'mail_user' => ['required'],
            'message_user' => ['required'],
        ]);
        $form_data = $request->all();
        $new_message = new Message();
        $new_message -> fill($form_data);
        $new_message->doctor_id = $id;
        $new_message->save();
        return redirect()->route('doctor.detail', ['id' => $id]);
    }

    public function store_review(Request $request, $id)
    {
        $request->validate([
            'name_user' => ['required'],
            'surname_user' => ['required'],
            'vote_user' => ['required'],
            'review_user' => ['required'],
        ]);
        $form_data = $request->all();
        $new_review = new Review();
        $new_review->fill($form_data);
        $new_review->doctor_id = $id;
        $new_review->save();
        return redirect()->route('doctor.detail', ['id' => $id]);
    }
}
