<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Store;

class adminStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "store",
            'store' => Store::all()
        );
        return view('admin.store')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.storeCreate");
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
        'price'=> 'required',
        'stock' => 'required',
        'picture' => 'image|required|max:1999'
    ]);

        // Membuat object dari Model
      $store = new Store; 
      $store->title = $request->input('title');
      $store->desc = $request->input('description');
      $store->price = $request->input('price');
      $store->stock = $request->input('stock');

      if($request->hasFile('picture')){
        $fileNameWithExt = $request->file('picture')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('picture')->getClientOriginalExtension();
        $filenameSimpan = $filename.'_'.time().'.'.$extension;
        $path = $request->file('picture')->storeAs('public/store_image', $filenameSimpan);
        $store->pic = $request->input('picture');
    }
    $store->pic = $filenameSimpan;


    $store->save();

    return redirect('adminstore/create')->with('success', 'Data telah disimpan.');
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
        $store = new Store; 
        $store->title = $request->input('title');
        $store->desc = $request->input('description');
        $store->price = $request->input('price');
        $store->stock = $request->input('stock');
        $store->pic = $request->input('picture');
        $store->save();

        return redirect('/adminstore');
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
            'pageid'=>"store",
            'store'=>Store::find($id)
        );
        return view('admin.storeEdit')->with($data);
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
            'price' => '',
            'stock' => '',
            'picture' => ''
        ]);

        // Membuat object dari Model Post
        $store = Store::find($id); 
        $store->title = $request->input('title');
        $store->desc = $request->input('description');
        $store->price = $request->input('price');
        $store->stock = $request->input('stock');
        $path = 'storage/store_image/'.$store->pic;
        if($request->hasFile('picture')){
            unlink($path);
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('picture')->storeAs('public/store_image', $filenameSimpan);
            $store->pic = $request->input('picture');
        }else{
            $filenameSimpan = $store->pic;
        }
        $store->pic = $filenameSimpan;


        $store->save();

        return redirect('/adminstore')->with('success', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        $path = '/storage/store_image/'.$store->pic;
        //var_dump(public_path().$path);
        File::delete(public_path().$path);
        
        
         $store->delete();
        return redirect('/adminstore');
    }

    public function search(request $request){
        $search = $request->input('search');
       
        $store =  Store::where('title','LIKE','%'.$search.'%')->get();
        
        

        // var_dump($store);
        return view('admin.store')->with('store',$store);
    }
}
