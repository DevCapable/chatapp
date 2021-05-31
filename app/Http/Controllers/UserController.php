<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    //
    public function show(){
    $users =User::all();
    return view('status', compact('users'));
    }
}
