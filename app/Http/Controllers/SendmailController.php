<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class SendmailController extends Controller
{
    Mail::to($data['mail'])->send(new SendMail('Sign Up Success。', $data));
}