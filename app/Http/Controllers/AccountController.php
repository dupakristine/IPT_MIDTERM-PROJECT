<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index() {

        $account = account::orderBy('account_name')->get();

        return view('accounts.index', ['accounts'=>$account]);
    }
}