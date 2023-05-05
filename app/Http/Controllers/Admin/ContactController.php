<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->description = $request->description;
        $contact->save();
        alert()->success('Thank you for contact us.');
        return redirect()->route('frontend.welcome')->with('message','Thank you So Much');

    }

    public function destroy(Request $request)
    {
        Contact::destroy($request->id);
        return redirect()->route('contacts.index');
    }

    public function delete_all_c($request)
    {
        $delete_all_id = explode(",", $request->delete_all_id);
        Contact::whereIn('id', $delete_all_id)->delete();
        return redirect()->route('contacts.index');
    }

}
