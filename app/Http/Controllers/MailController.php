<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\TestMail;
use App\Models\Mail;

class MailController extends Controller {
    public function index() {
        return view('contact.index'); 
    }

    public function send(Request $request) {
        if (!filter_var($request->emailAddress, FILTER_VALIDATE_EMAIL) === true) {
            return back()->with('error', 'Formato email incorrecto!!!');
          }
        request()->validate(Mail::$rules);

        return back()->with('exito', "Correo enviado correctamente a $request->emailAddress  !!!");
    }
}
