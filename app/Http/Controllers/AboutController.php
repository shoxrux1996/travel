<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\Notifications\MessageNotification;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $users = User::whereHas('role', function($query){
            $query->where('name','!=','admin');
        })->get()->take(4);
    
        return view('about')->withUsers($users);
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
