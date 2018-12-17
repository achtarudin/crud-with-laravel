<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactSendRequest;
use Mail;

class ContactController extends Controller
{
    public function create(){
        return view('contact.index');
    }

    public function send(ContactSendRequest $request){
        $data = [];
        $data['name'] = $request->get('name');
        // $data['email'] = $request->get('email');
        $data['msg'] = $request->get('msg');
        Mail::send('Mail.index', $data, function($message){
            $message->to('aipachtarudin@gmail.com')->subject("email test");
            $message->from('cabe2cabean214@gmail.com', 'moncos');
        });
    }
}
