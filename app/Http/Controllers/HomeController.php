<?php

namespace App\Http\Controllers;

use App\Advertise;
use Illuminate\Http\Request;
use App\User;
use App\Specialization;
use App\Message;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $specializations = Specialization::all();
        return view('home', compact('specializations'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'address' => ['required', 'string', 'max:75'],
            'city' => ['required', 'max:25'],
            'telephone' => ['minlenght:10', 'maxlenght: 10'],
            'specializations' => ['required', 'min:1']
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = new User();
        $user = $request->user();
        if($request->profile_picture) {
            $new_picture = $request->profile_picture->store('public');
            $new_picture = str_replace('public/', "", $new_picture);
            $user->photo = $new_picture;
        }
        $user->city = $request->city;
        $user->address = $request->address;
        $user->telephone = $request->telephone;
        $user->cv = $request->cv;
        $user->performance = $request->performance;
        $user->save();
        $user->specializations()->sync($request['specializations']);
        return redirect('home');

    }
    public function stats()
    {
        $reviews = Review::all()->where('doctor_id', Auth::id());
        $messages = Message::all()->where('doctor_id', Auth::id());
        $data = [
            'reviews' => $reviews,
            'messages' => $messages
        ];
        return view('partials-dashboard.stats', $data);
    }

    public function reviews()

    {
        $reviews = Review::all()->where('doctor_id', Auth::id());
        return view('partials-dashboard.reviews', compact('reviews'));
    }

    public function messages()

    {
        $messages = Message::all()->where('doctor_id', Auth::id());
        return view('partials-dashboard.messages', compact('messages'));
    }

    public function sponsor()

    {
        $advertises = Advertise::all();
        return view('partials-dashboard.sponsor', compact('advertises'));
    }
}


