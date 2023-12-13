<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            // title, body --> blade hivatkozik rá
            'title' => 'Mail from your_email.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('****@gmail.com')
            ->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }
}
