<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('index'); // Or wherever your contact form is located
    }

    public function submitForm(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Send email using the ContactFormMail class
        try {
            Mail::to('your-email@example.com')->send(new ContactFormMail($validated));

            return redirect()->back()->with('success', 'Your message has been sent!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong, please try again!');
        }
    }
}