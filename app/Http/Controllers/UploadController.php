<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $user = new User();
        $user = $request->user();
        $new_picture = $request->profile_picture->store('public');
        $new_picture = str_replace('public/', "", $new_picture);
        $user->photo = $new_picture;
        $user->save();
        return redirect('home');
    }
}
