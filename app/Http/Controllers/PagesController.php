<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Post;
use App\Image;
use App\Http\Requests;
use Mail;
class PagesController extends Controller
{
    public function getIndex(){
      $posts = Post::with('images')->get();

      return view('pages.welcome')->withPosts($posts);

    }



    public function getContact(){return view('pages.contact');}


    public function postContact(Request $request){

      $this->validate($request, [
        'email' =>'required|email',
        'message' => 'min:10']);

$data = array(
    'email' => $request->email,
    'subject' => $request->subject,
    'bodyMessage' => $request->message

);

      Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->subject($data['subject']);
        $message->to('fernandosunal@gmail.com');


      } );

    }


}
