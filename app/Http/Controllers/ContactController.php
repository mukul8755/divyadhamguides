<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'nullable|string',
        ]);
        

        $contact = Contact::create($request->all());

        Mail::to('divyadhamguides@gmail.com')->send(new ContactMessageMail($contact));

          return response()->json([
            'success' => true,
            'message' => 'Thank you for contacting us! We will get back to you soon.',
        ]);
    }


        // Show the view
    public function index()
    {
        return view('admin.contacts.index');
    }

    // Provide data for DataTable
    public function getData(Request $request)
    {
        $contacts = Contact::latest()->get();

        return response()->json([
            'data' => $contacts
        ]);
    }
}
