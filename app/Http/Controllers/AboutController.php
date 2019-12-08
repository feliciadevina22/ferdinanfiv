<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\About;

class AboutController extends Controller
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
            'id' => "abouts"
        );

        $profiles = Profile::all();
        $abouts = About::All();
        // dd($data);
        return view('about.index', compact('profiles','abouts'))->with($data);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $data = array(
            'pageid'=>"about",
            'about'=>About::find($id)
        );

        return view('admin.aboutEdit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'about' => 'required',
            'picture' => 'required'
        ]);

        // Membuat object dari Model Post
        $about = About::find($id);
        $about->about = $request->input('about');
        $path = 'storage/about_image/'.$about->pic;
        if($request->hasFile('picture')){
            unlink($path);
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/about_image', $filenameSimpan);
            $about->pic = $request->input('picture');
        }else{
            $filenameSimpan = $about->pic;
        }
        $about->pic = $filenameSimpan;
        $about->save();

        return redirect('/adminprofile')->with('success', 'Data telah diubah.');
    }

    public function show($id)
    {
        // Membuat object dari Model
        $about = new About(); 
        $about->about = $request->input('description');
        $about->pic = $request->input('picture');
        $about->save();

        return redirect('/adminprofile');
    }

    public function destroy($id)
    {
        $abouts = About::find($id); 
        $path = 'storage/profile_image/'.$abouts->pic;
        
        unlink($path);
        $abouts->delete();
        return redirect('/adminprofile');
    }
}
