<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        // Your logic to display the user profile
        return view('backend.user.userprofile');
    }
}
