<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Consult;
use App\Mail\ConsultMail;
use Illuminate\Support\Facades\Mail;

class ConsultController extends Controller
{
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'string'],
            'entreprise' => ['required', 'string', 'max:255'],
         ]);
        
        $consult = new \App\Consult;
        $consult->name = $request->name;
        $consult->email = $request->email;
        $consult->entreprise = $request->entreprise;
        
        if($consult->save())
        {
                Mail::to('delanofofe@gmail.com')
                    ->send(new ConsultMail($request->except('_token')));
                Mail::to('contact@stillforce.tech')
                    ->send(new Consult($request->except('_token')));
            
                 return redirect()->route('contact')->with('update_success', 'Merci, votre message a été envoyé avec succès, nous vous contacterons dans les plus brefs délais.');
        }
        
        else
             return redirect()->route('contact')->with('update_failure', "Une erreur est survenue lors de l'envoi de votre message, veuillez réessayer.");
    }
}
