<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\Message;

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
        return view('home');
    }

    public function updateProfile(Request $request)
    {
        $user = new User();
        $user = $request->user();
        $new_picture = $request->profile_picture->store('public');
        $new_picture = str_replace('public/', "", $new_picture);
        $user->photo = $new_picture; 
        $user->save();
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
        return view('statistics', $data);
    }
}
