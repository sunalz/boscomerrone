<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
class PagesController extends Controller
{
    public function getIndex(){return view('pages.welcome');}
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
