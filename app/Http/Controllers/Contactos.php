<?php

namespace isoft\Http\Controllers;

use Illuminate\Http\Request;
use isoft\Http\Requests\RqContacto;
use Illuminate\Support\Facades\Mail;
use isoft\Mail\Contacto;


class Contactos extends Controller
{
    public function index()
    {
    	return view('contactos.index');
    }

    public function enviar(RqContacto $r)
    {
    	$data = array('email' => $r->email,'nombre'=>$r->nombre,'asunto'=>$r->asunto,'mensaje'=>$r->mensaje );
    	Mail::to(config('MAIL_FROM_ADDRESS','info@soysoftware.com'))->send(new Contacto($data));
    	$r->session()->flash('success','Soysoftware te da la bienvenida y gracias por escribirnos. Intentaremos responderte lo antes posible.');
    	return redirect()->route('contactos');
    }
}
