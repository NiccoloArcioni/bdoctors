<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UploadController extends Controller
{
    public function upload(Request $request,User $user)
    {
        $request->file->store('public');
        // $user->photo = 'DA788CK';
        // $user->save();
    }
}
