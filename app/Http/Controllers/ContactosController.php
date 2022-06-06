<?php

namespace App\Http\Controllers;

use App\Mail\ContactosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function store(Request $request){
        

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $correo = new ContactosMailable($request->all());

        Mail::to("joelmarquez@gmail.com")->send($correo);

        return redirect('/')->with('info', 'Mensaje Enviado Con Exito');
    }
}
