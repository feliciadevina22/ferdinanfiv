<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PortofoliosController extends Controller
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
            'portofolio' => Portofolio::orderBy('created_at','desc')->paginate(5)
        );

        return view('portofolio.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("portofolio.create");
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
            'desc' => 'required'
        ]);

        // Membuat object dari Model Post
        $portofolio = new Portofolio; 
        $portofolio->title = $request->input('title');
        $portofolio->desc = $request->input('desc');
        $portofolio->save();

        return redirect('/portofolio/create')->with('success', 'Data telah disimpan.');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'pageid' => "portofolio",
            'portofolio' => Portofolio::find($id)
        );

        return view('portofolio.show')->with($data);
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

        return view('portofolio.edit')->with($data);
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
            'title' => 'required',
            'desc' => 'required'
        ]);

        // Membuat object dari Model Post
        $portofolio = Portofolio::find($id); 
        $portofolio->title = $request->input('title');
        $portofolio->desc = $request->input('desc');
        $portofolio->save();

        return redirect('/portofolio')->with('success', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $post = Portofolio::find($id); 
        $post->delete();
        return redirect('/portofolio')->with('success', 
            'Data telah dihapus.'); 
    }
}
