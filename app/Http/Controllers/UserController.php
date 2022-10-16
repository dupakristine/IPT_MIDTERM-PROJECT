<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {

        $user = User::orderBy('lname')->get();

        return view('users.index', ['users'=>$user]);
    }
}