<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    // CONTACT METHOD
    public function contact()
    {
        return view('frontend/contact',["title"=>"Contact",
                                         "image_title"=>"contacts_page_title_bg.png",
                                         "selecteur2"=>"current-menu-parent"
                                         ]);
    }
    
    public function save(Request $request)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
                'secret' => '6LcdctAZAAAAAFOsribBDY2scwU_IW5B8o7Yrt0T',
                'response' => $request->recaptcha,
                'remoteip' => $remoteip
              ];
        $options = [
                  'http' => [
                  'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                  'method' => 'POST',
                  'content' => http_build_query($data)
                ]
            ];
            
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
        
        //dd($resultJson);
        
        if ($resultJson->success != true) {
           return redirect()->route('contact')->with('update_failure', "ReCaptcha Error");
        }
        
        if ($resultJson->score >= 0.7) {
            //Validation was successful, we add our form submission logic here
            
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'string'],
                'subject' => ['required', 'string', 'max:255'],
                'message' => ['required', 'string', 'max:1500'],
            ]);
        
                $contact = new \App\Contact;
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->subject = $request->subject;
                $contact->message = $request->message;
                
                if($contact->save())
                {
                        Mail::to('delanofofe@gmail.com')
                            ->send(new ContactMail($request->except('_token')));
                        Mail::to('contact@stillforce.tech')
                            ->send(new ContactMail($request->except('_token')));
                    
                         return redirect()->route('contact')->with('update_success', 'Merci, votre message a été envoyé avec succès, nous vous contacterons dans les plus brefs délais.');
                }
                
                else
                     return redirect()->route('contact')->with('update_failure', "Une erreur est survenue lors de l'envoi de votre message, veuillez réessayer.");
        } 
        else {
            return redirect()->route('contact')->with('update_failure', "ReCaptcha Error");
        }
        
        
        
    }
}
