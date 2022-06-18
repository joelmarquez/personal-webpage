<?php

namespace App\Http\Controllers;

use App\Mail\ContactosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    // public function store(Request $request){
        

    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'subject' => 'required',
    //         'message' => 'required'
    //     ]);

    //     $correo = new ContactosMailable($request->all());

    //     Mail::to("joelmarquez@gmail.com")->send($correo);

    //     return redirect('/')->with('info', 'Mensaje Enviado Con Exito');
    // }

    public function store(){

        $name       = @trim(stripslashes($_POST['name'])); 
        $from       = @trim(stripslashes($_POST['email'])); 
        $subject    = @trim(stripslashes($_POST['subject'])); 
        $message    = @trim(stripslashes($_POST['message'])); 
        $to   		= 'joelmarquez@gmail.com';

        $headers   = [
            'MIME-Version' => 'MIME-Version: 1.0',
            'Content-type' => 'text/plain; charset=UTF-8',
            'From' => "{$name} <{$from}>",
            'Reply-To' => $from,
            'X-Mailer' => 'PHP/' . phpversion(),
        ];

        mail($to, $subject, $message, $headers);

        return redirect('/')->with('info', 'Mensaje Enviado Con Exito');

            }
            
}
