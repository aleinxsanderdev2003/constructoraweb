<?php

namespace App\Http\Controllers;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index(){
        return view('contact');

    }
    public function store(Request $request)
    {

        $correo = new ContactoMailable($request->all());


        Mail::to('informes@aposentoperu.com')->send($correo);
        return redirect()->route('contact')->with('success', '¡Mensaje enviado correctamente!');

            }

}


