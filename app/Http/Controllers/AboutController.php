<?php

namespace App\Http\Controllers;

use App\Message;
use App\Notifications\MessageNotification;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about');
    }
    public function send(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message' =>'required'
        ]);
        $message = new Message($request->all());
        $message->save();
        $message->notify(new MessageNotification());
        return back()->with(['message'=>'Спасибо', 'text' => 'Ваш сообщение отправлено!']);
    }
}
