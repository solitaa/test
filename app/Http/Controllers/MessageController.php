<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        // var_dump($request->name);
        // var_dump($request->email);
        // var_dump($request->message);

        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        return redirect('/')->with('success', 'Message Sent');

    }

    public function getMessages(){
        $messages = Message::all();
        //return 123;
        

        // foreach($messages as $message){
        //     var_dump($message->message);
        // }
        return view('showmessages')->with('messages', $messages);
    }
}
