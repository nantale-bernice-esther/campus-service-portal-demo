<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    //this function is for  the contact session apparently we dont have pages
     public function contact()
    {
        //
        return view('contact');
    }







    //this function is for the contact-list view
    //function names are written in camel case
    // dont separate with minus or underscore
     public function contactList()
    {
        //
        return view('contact-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * used to store  our data in the db
     */
    public function store(Request $request)
    {
        //creating an object
        $contact =new Contact();
        //pass variable point to  field name in the database
        //  $contact->full_name- represents field name
        //$request->input('full_name'); -this is what goes in the database-this is coming from the form
        $contact->full_name = $request->input('full_name');
        $contact->campus_email=$request->input('campus_email');
        $contact->department=$request->input('department');
        $contact->message=$request->input('message');
        //saves everything picked by those fields
        $contact-> save();

        return redirect()->back()->with('Success', 'Your message has been sent successfully');

    }
  
    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
