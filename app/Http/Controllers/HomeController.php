<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gallery;
use App\Friendship;
use App\School;
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
        $allSchools = DB::table('locations')
        ->leftJoin('schools', 'schools.school_location', '=', 'locations.location_id')
        ->leftJoin('users', 'users.id', '=', 'schools.school_user_id')
        ->paginate(3);

        return view('pages.findSchools')->with('schools', $allSchools);
    }

    public function followSchool($id){
        auth()->user()->followSchool($id);
        return redirect('./findSchools')->with('success', 'Following School');
    }
    public function requests(){
        $uid = auth()->user()->id;
        $requests = DB::table('friendships')
        ->leftJoin('users', 'users.id', '=', 'friendships.requester')
        ->leftJoin('schools', 'schools.school_user_id', '=', 'users.id')
        ->leftJoin('locations', 'locations.location_id', '=', 'schools.school_location')
        ->where('status', 0)
        ->where('friendships.user_requested', '=', $uid)->paginate(3);

        return view('pages.requests')->with('schools', $requests);
    }

    public function following(){
        $uid = auth()->user()->id;
        $requests = DB::table('friendships')
        ->leftJoin('users', 'users.id', '=', 'friendships.requester')
        ->leftJoin('schools', 'schools.school_user_id', '=', 'users.id')
        ->leftJoin('locations', 'locations.location_id', '=', 'schools.school_location')
        ->where('status', 1)
        ->where('friendships.user_requested', '=', $uid)->paginate(3);

        return view('pages.following')->with('schools', $requests);
    }

    public function accept($id, $name){
        $checkRequest = Friendship::where('requester', '=', $id)
        ->where('user_requested', '=', auth()->user()->id);

        if($checkRequest){
            $updateRequest = DB::table('friendships')
            ->where('user_requested', '=', auth()->user()->id)
            ->where('requester', '=', $id)
            ->update(['status' => 1]);

            if($updateRequest){
                return back()->with('success', 'You are now friends with '.$name);
            }
        }
        else {
            echo "Not allowed";
        }
        
    }

    public function viewSchool($id){
        $school = DB::table('schools')
        ->leftJoin('users', 'users.id', '=', 'schools.school_user_id')
        ->where('schools.school_id', '=', $id)->get();
        //return $school;

        $gallery = DB::table('galleries')
        ->where('gallery_school_id', $id)->get();

        $reviews = DB::table('school_reviews')
        ->where('school_id', $id)->get();

        $data = array(
            'school' => $school,
            'gallery'=> $gallery,
            'reviews'=> $reviews
        );

        
        //return School::getStarRating();
        return view('pages.viewSchool')->with($data);
        
            }
        
        
    }
