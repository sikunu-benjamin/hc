<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotifyMail;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|max:150',
            'message' => 'required'
        ]);

        Mail::to($request->email)->send(new ContactNotifyMail($request));

        session()->flash('success', 'Nous avons bien reçu votre message, nous vous contacterons sous peu !');

        return redirect(route('contact'));
    }
}
