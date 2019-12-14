<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Mail\SendEmailAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function indexadmin()
    {
        $data = array(
            'id' => "contacts",
        );

        $contact = Contact::all();
        // dd($data);
        return view('admin.contact', compact('contact'))->with($data);
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
            'message' => 'required',
            'isEmail' => '',
            'isDeleted' => ''
        ]);

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        // Membuat object dari Model
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->isEmail = $request->input('isEmail');
        $contact->isDeleted = $request->input('isDeleted');
        $contact->adminmessage = $request->input('adminmessage');

        $contact->save();

        Mail::to($email)->send(new sendemail($name, $message, $email));
        return redirect('/contact')->with('success', 'Thank You For Your Feedbacks.');
    }

    public function edit($id)
    {
        $data = array(
            'pageid'=>"contact",
            'contact'=>Contact::find($id)
        );

        return view('admin.contactSendEmail')->with($data);

       
    }

    public function update(Request $request, $id)
    { 
        $this->validate($request, [
            'subject' => '',
            'adminmessage' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'isEmail' => '',
            'isDeleted' => '',
            'adminmessage' => ''
        ]);

        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->isEmail = $request->input('isEmail');
        $contact->isDeleted = $request->input('isDeleted');
        $contact->adminmessage = $request->input('adminmessage');
        $contact->save();


        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->message;
        $subject = $request->subject;
        $adminmessage = $request->input('adminmessage');
        $isEmail = $request->input('isEmail');
        $isDeleted = $request->input('isDeleted');

        if($isEmail == 1 && $isDeleted == 0)
        {
            Mail::to($email)->send(new sendemailadmin($name, $message, $email, $subject, $adminmessage));
        }
        
        return redirect('/admincontact')->with('success', $isDeleted);

    }

    public function show($id)
    {
        // Membuat object dari Model

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->desc = $request->input('email');
        $contact->desc = $request->input('message');
        $contact->isEmail = $request->input('isEmail');
        $contact->isDeleted = $request->input('isDeleted');
        $contact->adminmessage = $request->input('adminmessage');

        $contact->save();

        return redirect('/admincontact');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();
        return redirect('/adminprofile');
    }
}
