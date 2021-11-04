<?php

namespace App\Http\Controllers\Application\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        return view('app.user.profile');
    }
}
