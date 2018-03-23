<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home');
    }

    public function yourPosts()
    {
        return view('./posts/home');
    }

    public function findSchools()
    {
        $uid = auth()->user()->id;
        $allSchools = DB::table('locations')->leftJoin('schools', 'schools.location', '=', 'locations.location_id')->paginate(3);

        return view('pages.findSchools')->with('schools', $allSchools);
    }
}
