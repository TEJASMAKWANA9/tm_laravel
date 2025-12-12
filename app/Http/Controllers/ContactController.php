<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate form data
        $validated = $request->validate([
            'fname'   => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // 2. Save in database
        Contact::create($validated);

        // 3. Send email (optional)
        /*
        Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
            $message->to('your@email.com');
            $message->subject('New Contact Message');
        });
        */

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
