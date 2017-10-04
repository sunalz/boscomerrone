<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventpost;
use App\Eventphoto;
use Storage;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Eventpost::all();

      return view('events.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'file' => 'image|max:10000',
        'title'=> 'required',
        'description' => 'required|min:5',
        'price' => 'required|numeric',
        'guests' => 'required|numeric',
        'start_date' => 'required',
        'end_date' => 'required',
        'start_at' => 'required',
        'end_at' => 'required'

      ]);
      //store form data
      $post = new Eventpost;

      $post->title = $request->input('title');
      $post->description = $request->input('description');
      $post->price = $request->input('price');
      $post->guests = $request->input('guests');
      $post->start_date = $request->input('start_date');
      $post->end_date = $request->input('end_date');
      $post->start_at = $request->input('start_at');
      $post->end_at = $request->input('end_at');
      $post->save();
      $event_id = $post->id;
      return view('events/photoupload/create')->with('event_id',$event_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $photos = Eventpost::with('eventphotos')->find($id);
     return view('events.show')->with('photos',$photos);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Eventpost::find($id);
      return view('events.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'file' => 'image|max:10000',
        'title'=> 'required',
        'description' => 'required|min:5',
        'price' => 'required|numeric',
        'guests' => 'required|numeric',
        'start_date' => 'required',
        'end_date' => 'required',
        'start_at' => 'required',
        'end_at' => 'required'
      ]);

      $post = Eventpost::find($id);
      $post->title = $request->input('title');
      $post->description = $request->input('description');
      $post->guests = $request->input('guests');
      $post->price = $request->input('price');
      $post->start_date = $request->input('start_date');
      $post->end_date = $request->input('end_date');
      $post->start_at = $request->input('start_at');
      $post->end_at = $request->input('end_at');
      $post->save();
      $event_id = $post->id;
      return view('/events/photoupload/create')->with('event_id', $event_id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Eventpost::with('eventphotos')->find($id);
      if($post->delete()){
        foreach ($post->eventphotos as $photo) {
          $photo->delete();
          Storage::deleteDirectory('public/events/'. $post->id);
        }
        return redirect('/events')->with('success','Event Deleted');


      }
    }
}
