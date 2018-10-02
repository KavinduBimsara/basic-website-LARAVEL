<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; 
// model name

class MessagesController extends Controller
{
    public function submit(Request $request){
        // return $request->input('name');
        // return 123;
        
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message'=>'required',
        ]);
        // return 'SUCCESS';

        // create a new message
        $message =  new Message;// Message is the model name
        $message -> name=$request->input('name');
        $message -> email=$request->input('email');
        $message -> message=$request->input('message');

        //save message
        $message -> save();
        
        //Redirect
        return redirect('home')->with('success','Message sent');

    }

    public function getMessages(){
        $messages=Message::all();

        return view('messages')->with('messages',$messages);
    }
}
