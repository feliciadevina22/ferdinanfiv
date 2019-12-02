<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class StoresController extends Controller
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
            'store' => Store::orderBy('created_at','desc')->paginate(5)
        );

        return view('store.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("store.create");
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
            'desc' => 'required',
            'price' => 'required',
            'stock' => 'required'

        ]);

        // Membuat object dari Model Post
        $store = new Store;
        $store->title = $request->input('title');
        $store->desc = $request->input('desc');
        $store->price = $request->input('price');
        $store->stock = $request->input('stock');
        $store->save();

        return redirect('/store/create')->with('success', 'Data telah disimpan.');
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
            'pageid' => "store",
            'store' => Store::find($id)
        );

        return view('store.show')->with($data);
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

        //return view('store.edit')->with($data);
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
            'desc' => 'required',
            'price' => 'required',
            'stock' => 'required'

        ]);

        // Membuat object dari Model Post
        $store = Store::find($id);
        $store->title = $request->input('title');
        $store->desc = $request->input('desc');
        $store->price = $request->input('price');
        $store->stock = $request->input('stock');
        $store->save();

        //return redirect('/store')->with('success', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $store = Store::find($id); 
        $store->delete();
        //return redirect('/store')->with('success', 'Data telah dihapus.'); 
    }
}
