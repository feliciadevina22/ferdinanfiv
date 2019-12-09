<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class adminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "profiles",
            'id' => "abouts",
        );

        $profiles = Profile::all();
        $abouts = About::All();
        // dd($data);
        return view('admin.profile', compact('profiles','abouts'))->with($data);
    }


    public function create()
    {
        return view("admin.profileCreate");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'picture' => 'image|required|max:1999'
        ]);
    
            // Membuat object dari Model
          $profile = new Profile(); 
          $profile->name = $request->input('title');
          $profile->desc = $request->input('description');
    
          if($request->hasFile('picture')){
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/profile_image', $filenameSimpan);
            $profile->pic = $request->input('picture');
        }
        $profile->pic = $filenameSimpan;
    
    
        $profile->save();
    
        return redirect('adminprofile/create')->with('success', 'Data telah disimpan.');
    }

    public function edit($id)
    {
        $data = array(
            'pageid'=>"profile",
            'profile'=>Profile::find($id)
        );

        return view('admin.profileEdit')->with($data);

       
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'picture' => ''
        ]);

        // Membuat object dari Model Post
        $profile = Profile::find($id);
        $profile->name = $request->input('name');
        $profile->desc = $request->input('description');
        $path = 'storage/profile_image/'.$profile->pic;
        if($request->hasFile('picture')){
            
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/profile_image', $filenameSimpan);
            $profile->pic = $request->input('picture');
        }else{
            $filenameSimpan = $profile->pic;
        }
        $profile->pic = $filenameSimpan;
        $profile->save();

        return redirect('/adminprofile')->with('success', 'Data telah diubah.');
    }

    public function show($id)
    {
        // Membuat object dari Model
        $profile = new Profile(); 
        $profile->name = $request->input('title');
        $profile->desc = $request->input('description');
        $profile->pic = $request->input('picture');
        $profile->save();

        return redirect('/adminprofile');
    }

    public function destroy($id)
    {
        $profile = Profile::find($id); 
        $path = 'storage/profile_image/'.$profile->pic;
        
        unlink($path);
        $profile->delete();
        return redirect('/adminprofile');
    }
}
