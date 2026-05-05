<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // validate form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // email content
        $text = "New Contact Message\n\n"
              . "Name: " . $request->name . "\n"
              . "Email: " . $request->email . "\n"
              . "Message: " . $request->message;

        // send email
        Mail::raw($text, function ($mail) {
            $mail->to('yourgmail@gmail.com') // change this
                 ->subject('Contact Form Message');
        });

        return back()->with('success', 'Message sent successfully!');
    }
}