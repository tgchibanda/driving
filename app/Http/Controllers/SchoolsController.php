<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\City;
use App\Location;
use App\profile;
use DB;
use Image;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $schoolProfileOnly = School::find(1)->profile;
        $theSchool = School::find(1);
        return $schoolProfileOnly;
        */

        $schools = School::orderBy('id', 'desc')->paginate(2);
        return view('pages.schoolsIndex')->with('schools', $schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $locations = Location::all();

        $data = array(
            'cities' => $cities,
            'locations'=> $locations
        );

        return view('pages.createSchool')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
            'email'=>'required',
        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250, 150)->save( public_path('./uploads/avatars/' .$filename ) );
        }
        else {
            $filename = "default.jpg";
        }

        /*
        $school = School::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'avatar' => $filename,
        ]);
        Profile::create(['school_id'=> $school->id]);

        return $school;
        */
        $school = new School;
        $school->name = $request->input('name');
        $school->email = $request->input('email');
        $school->contact = $request->input('contact');
        $school->location = $request->input('location');
        $school->about = $request->input('about');
        $school->avatar = $filename;
        $school->save();

        return redirect('./schools')->with('success', 'School Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
