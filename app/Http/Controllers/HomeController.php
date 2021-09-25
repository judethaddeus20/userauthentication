<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

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
    public function index(){
        $role = Auth::user()->role;

        $users = User::all();

        if($role == 'student')
        {
            return view('student.home');
        }
        elseif($role == 'cashier')
        {
            return view('cashier.home');
        }
        elseif($role == 'accountant')
        {
            return view('accountant.home');
        }
        elseif($role == 'secretary')
        {
            return view('secretary.home');
        }
        elseif($role == 'admin')
        {
            return view('admin.home',compact('users'));
        }
    }
}
