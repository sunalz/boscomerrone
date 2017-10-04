<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventpost;
use App\Eventphoto;
use Storage;
class EventphotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('events.photoupload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $filenameWithExt = $request->file('file')->getClientOriginalName();

      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      $extension = $request->file('file')->getClientOriginalExtension();

      $filenameToStore = $filename.'_'.time().'.'.$extension;

      $path = $request->file('file');
      $photo = new Eventphoto;
      $photo->eventpost_id = $request->input('event_id');
      $photo->name = $filenameToStore;
      $photo->save();
      $path = $request->file('file')->storeAs('public/events/'.$request->input('event_id'), $filenameToStore);
      return redirect('/events/')->with('success','photos uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $posts = Eventpost::with('eventphotos')->find($id);
      return view('events.photoupload.show')->with('posts', $posts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $photos = Eventphoto::find($id);
      if(storage::delete('public/events/'.$photos->eventpost_id.'/'.$photos->name)){
        $photos->delete();
        return redirect('/event/photos/'.$photos->eventpost_id)->with('success','Photo Deleted');

      }

    }
}
