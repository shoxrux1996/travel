<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Tour;
class CommentController extends Controller
{
    public function comment(Request $request, $id){
    	$request->validate([
    		'name' => 'required',
    		'email'=>'required|email',
    		'rating'=>'required|between:0,5',
    		'text'=>'required'
    	]);
    	$comment = new Comment($request->all());
    	$tour= Tour::findOrFail($id)->comments()->save($comment);
    	return back()->with(['message'=>'Спасибо', 'text' => 'Ваш отзыв принят!']);

    }
}
