<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class ContactFormController extends Controller
{
    public function send(Request $request)
    {
       
    
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'phone' => '|max:15',
            'breed'=>"max:100",
            'content' => 'required',
        ]);

       



Mail::send('email-template', [
    'name' => $request->get('name'),
    'email' => $request->get('email'),
    'phone' => $request->get('phone'),
    'type' => $request->get('type'),
    'breed' => $request->get('breed'),
    'content' => $request->get('content') ],
    function ($message) {
            $message->from(env('MAIL_USERNAME'));
            // $message->to(env('MAIL_USERNAME'))->cc('izabelagacek97@gmail.com')
            $message->to(env('MAIL_USERNAME'))->cc(env('SECONDARY_EMAIL'))
            ->subject('Nowa wiadomość ze strony podajlapsie.pl');
});


   
// return view('home.index', ['scrollTo' => '#kontakt']);
$formSubmitted = true;

return view('home.index', ['scrollTo' => '#kontakt', 'formSubmitted' => $formSubmitted]);
    }
}
