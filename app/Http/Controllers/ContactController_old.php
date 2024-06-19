<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $companyname = $request->input('companyname');
        $yourname = $request->input('yourname');
        $youremail = $request->input('youremail');
        $phonenumber = $request->input('phonenumber');
        $contentinquiry = $request->input('contentinquiry');

        Mail::to('jabjadev@gmail.com')->send(new ContactMail($companyname, $yourname, $youremail, $phonenumber, $contentinquiry));

        return back()->with('message_sent', 'Successfully');
    }
}
