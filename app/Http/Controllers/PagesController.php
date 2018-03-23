<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the driving app!';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services'=> ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function profile(){
        $data = array('user' => Auth::user());
        return view('pages.profile')->with($data);
    }
    
    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('./uploads/avatars/' .$filename ) );


            $id = Auth::user()->id;
            $user = User::find($id);
            $user->avatar = $filename;
            $user->save();
        }
        $data = Auth::user();
        return redirect('profile')->with('success', 'Avatar Updated');
    }
}