<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        );

        $profiles = Profile::all();
        // dd($data);
        return view('admin.profile', compact('profiles'))->with($data);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $data = array(
            'pageid'=>"profile",
            'profile'=>Profile::find($id)
        );

       
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required'
        ]);

        // Membuat object dari Model Post
        $profile = Profile::find($id);
        $profile->name = $request->input('name');
        $profile->desc = $request->input('desc');
        $profile->save();

    }

    public function destroy($id)
    {
        $profile = Profile::find($id); 
        $profile->delete();
        return redirect('/adminprofile');
    }
}
