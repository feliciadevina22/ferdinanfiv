<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContactsController extends Controller
{
    public function index()
    {
        $data = array(
            'id' => "contacts",
        );

        $contact = Contact::all();
        // dd($data);
        return view('about.index', compact('contact'))->with($data);
    }

    public function create()
    {
        return view("admin.profileCreate");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        // Membuat object dari Model
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->desc = $request->input('email');
        $contact->desc = $request->input('message');

        $contact->save();

        return redirect('about.index')->with('success', 'Data telah terkirim.');
    }

    public function show($id)
    {
        // Membuat object dari Model
        
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->desc = $request->input('email');
        $contact->desc = $request->input('message');

        $contact->save();

        return redirect('/adminprofile');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id); 
        
        $contact->delete();
        return redirect('/adminprofile');
    }
}
