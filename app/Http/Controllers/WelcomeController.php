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
    public function index()
    {
        $currentDate = date("Y-m-d");
        $doctor_ads = AdvertiseDoctor::whereDate('end_ads_date', '>', $currentDate)->get();
        $doctors = [];

        foreach ($doctor_ads as $ad) {
            $doctor_id = $ad->doctor_id;
            $new_doctor = User::where('id', $doctor_id)->first();

            if ($new_doctor) {
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

    public function searchFilter(Request $request)
    {
        $spec = Specialization::where('id', $request->spec)->first();
        $doctors = User::all();
        if ($request->filter == 'all') {
            $filtered_doctors = [];
            foreach ($doctors as $doctor) {
                foreach ($doctor->specializations as $specialization) {
                    if ($specialization->id == $spec->id) {
                        array_push($filtered_doctors, $doctor);
                    }
                }
            }
            $data = [
                'doctors' => $filtered_doctors
            ];
            return view('search-filter', $data);
        }
        if ($request->filter == 'reviews') {
            $filtered_doctors = [];
            foreach ($doctors as $doctor) {
                foreach ($doctor->specializations as $specialization) {
                    if ($specialization->id == $spec->id) {
                        if (count($filtered_doctors) == 0) {
                            array_push($filtered_doctors, $doctor);
                        } else {
                            $doctor_reviews = count(Review::where('doctor_id', $doctor->id)->get());
                            $most_reviews = count(Review::where('doctor_id', $filtered_doctors[0]->id)->get());
                            if($doctor_reviews >= $most_reviews) {
                                array_unshift($filtered_doctors, $doctor);
                            } else {
                                foreach ($filtered_doctors as $key => $filtered_doctor) {
                                    if($doctor_reviews >= count(Review::where('doctor_id', $filtered_doctor->id)->get())) {
                                        $inserted = array($doctor);
                                        array_splice($filtered_doctors, ($key - 1), 0, $inserted);
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $data = [
                'doctors' => $filtered_doctors
            ];
            return view('search-filter', $data);
        }
        if ($request->filter == 'votes') {
            $filtered_doctors = [];
            foreach ($doctors as $doctor) {
                foreach ($doctor->specializations as $specialization) {
                    if ($specialization->id == $spec->id) {
                        $doctor_reviews = count(Review::where('doctor_id', $doctor->id)->get());
                        $average = 0;
                        foreach (Review::where('doctor_id', $doctor->id)->get() as $doctor_review) {
                            $average = $average + $doctor_review->vote_user;
                        }
                        $average = $average / $doctor_reviews;
                        if($average > 3) {
                            array_push($filtered_doctors, $doctor);
                        }
                    }
                }
            }
            $data = [
                'doctors' => $filtered_doctors
            ];
            return view('search-filter', $data);
        }
        
    }

    public function search(Request $request)
    {
        $currentDate = date("Y-m-d");
        $doctor_ads = AdvertiseDoctor::whereDate('end_ads_date', '>', $currentDate)->get();
        $sponsorized_doctors = [];
        $doctor_reviews = [];

        foreach ($doctor_ads as $ad) {
            $doctor_id = $ad->doctor_id;
            $new_doctor = User::where('id', $doctor_id)->first();

            if ($new_doctor) {
                array_push($sponsorized_doctors, $new_doctor);
            }
        }
        $search = $request->input('search');
        if ($search) {
            $spec = Specialization::where('id', $search)->first();
            $doctors = User::all();
            $filtered_doctors = [];
            foreach ($doctors as $doctor) {
                foreach ($doctor->specializations as $specialization) {
                    if ($specialization->id == $spec->id) {
                        array_push($filtered_doctors, $doctor);
                    }
                }
            }
            $data = [
                'doctors' => $filtered_doctors,
                'searched_specialization' => $spec,
                'specializations' => Specialization::all()
            ];
            return view('search', $data);
        } else {
            $data = [
                'doctors' => $sponsorized_doctors,
                'specializations' => Specialization::all()
            ];
            return view('search', $data);
        }
    }

    public function detail($id)
    {
        $doctor = User::where('id', $id)->first();
        return view('doctor_detail', compact('doctor'));
    }

    public function store_message(Request $request, $id)
    {
        $request->validate([
            'name_user' => ['required'],
            'surname_user' => ['required'],
            'mail_user' => ['required'],
            'message_user' => ['required'],
        ]);
        $form_data = $request->all();
        $new_message = new Message();
        $new_message->fill($form_data);
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
