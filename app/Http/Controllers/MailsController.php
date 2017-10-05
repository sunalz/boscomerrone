<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Eventpost;

class MailsController extends Controller
{
public function sendmail(Request $request, $id){

  $mail = Eventpost::find($id);
  $this->validate($request,[
    'email' => 'email|required'

  ]);
  $data = array(
    'email' => $request->email,
    'event' => $mail->title,
    'description' => $mail->description


  );

    Mail::send('emails.sendmail', $data, function($message) use ($data){
      $message->from($data['email']);
      $message->subject('Event Join Request');
      $message->to('info@boscomerrone.ml');


    } );
    return redirect('/events/'.$mail->id)->with('success','Message Sent!');

}
}
