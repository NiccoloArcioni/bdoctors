<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Specialization;

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

    public function updateProfile(Request $request)
    {
        $user = new User();
        $user = $request->user();
        // $new_picture = $request->profile_picture->store('public');
        // $new_picture = str_replace('public/', "", $new_picture);
        // $new_cv = $request->cv->store('public');
        // $new_cv = str_replace('public/', "", $new_cv);
        // $user->cv = $new_cv; 
        // $user->photo = $new_picture;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->telephone = $request->telephone;
        $user->save();
        $user->specializations()->sync($request['specializations']);
        return redirect('home');
    }
}
