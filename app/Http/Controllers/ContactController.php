<?php

namespace App\Http\Controllers;

use App\Mailers\MailgunMailer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $mailer;

    public function __construct(MailgunMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
            

        ]);

        $this->mailer->sendContactInformation($data);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
