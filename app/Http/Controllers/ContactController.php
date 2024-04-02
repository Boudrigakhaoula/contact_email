<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{
    public function sendEmail(Request $req)
    {
        //validation form here
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message
        ];
      //pour test data valide our no et afficher sur interface
        //   dd($data);
        Mail::to('khaoulaboudriga@gmail.com')->send(new ContactMail($data));
        return 'Thanks for reaching out !!';
    }
}
