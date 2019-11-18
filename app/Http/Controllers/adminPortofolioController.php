<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class adminPortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "portofolio",
            'portofolio' => Portofolio::all()
        );
        return view('admin.portofolio')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.portofolioCreate");
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
        'title' => 'required',
        'description' => 'required',
        'picture' => 'image|required|max:1999'
    ]);

        // Membuat object dari Model Post
      $portofolio = new Portofolio; 
      $portofolio->title = $request->input('title');
      $portofolio->desc = $request->input('description');
      if($request->hasFile('picture')){
        $fileNameWithExt = $request->file('picture')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('picture')->getClientOriginalExtension();
        $filenameSimpan = $filename.'_'.time().'.'.$extension;
        $path = $request->file('picture')->storeAs('public/portofolio_image', $filenameSimpan);
        $portofolio->pic = $request->input('picture');
    }else{
        $filenameSimpan = "noimage.jpg";
    }
    $portofolio->pic = $filenameSimpan;


    $portofolio->save();

    return redirect('adminportofolio/create')->with('success', 'Data telah disimpan.');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Membuat object dari Model
        $portofolio = new Portofolio; 
        $portofolio->title = $request->input('title');
        $portofolio->desc = $request->input('description');
        $portofolio->pic = $request->input('picture');
        $portofolio->save();

        return redirect('/adminportofolio');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'pageid'=>"portofolio",
            'portofolio'=>Portofolio::find($id)
        );

        return view('admin.portofolioEdit')->with($data);
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
        $this->validate($request, [
            'title' => '',
            'description' => '',
            'picture' => ''
        ]);

        // Membuat object dari Model Post
        $portofolio = Portofolio::find($id); 
        $portofolio->title = $request->input('title');
        $portofolio->desc = $request->input('description');
        $path = 'storage/portofolio_image/'.$portofolio->pic;
        if($request->hasFile('picture')){
            unlink($path);
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/portofolio_image', $filenameSimpan);
            $portofolio->pic = $request->input('picture');
        }else{
            $filenameSimpan = $portofolio->pic;
        }
        $portofolio->pic = $filenameSimpan;


        $portofolio->save();

        return redirect('/adminportofolio')->with('success', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);
        $path = 'storage/portofolio_image/'.$portofolio->pic;
        if ($portofolio->pic != 'noimage.jpg') {
            unlink($path);
        }
        $portofolio->delete();
        return redirect('/adminportofolio');
    }
}
