<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


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
    public function Dashboard()
    {
        $user = DB::table('users')->get();
        return view('admin.dashboard', ['user' => $user]);
    }

    public function Deleteuser($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/adminDashboard');
    }
    
}
