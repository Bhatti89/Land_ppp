<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestGmail;
use App\Models\Gmail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function show() {
        $testgmail = Gmail::all();
        return view ("mail/mail")->with(['testgmail' => $testgmail]);
    }
    public function sendMail()
    {
        $details = [
            'title' => 'MUZAMMIL HUSSAIN SP19-BCS-039',
            'body' => ''
        ];
       
        Mail::to('motrola114060@gmail.com')->send(new TestGmail($details));
        return ("Email has been sent successfully");   
    }
}