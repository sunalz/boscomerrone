<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Storage;
use App\Photo;
class AlbumsController extends Controller
{
   public function index(){
     $albums = Album::with('photos')->get();
     return view('albums.index')->with('albums', $albums);
   }

   public function create(){

     return view('albums.create');
   }

   public function store(Request $request){
     $this->validate($request,[
       'name' => 'required',
       'cover_image' => 'image|max:10000'


     ]);
     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

     $extension = $request->file('cover_image')->getClientOriginalExtension();

     $filenameToStore = $filename.'_'.time().'.'.$extension;

     $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

     //create album_covers

     $album = new Album;
     $album->name= $request->input('name');
     $album->description= $request->input('description');
     $album->cover_image= $filenameToStore;
     $album->save();
     return redirect('/albums')->with('success','Album created');


   }
   public function show($id){
     $album = Album::with('photos')->find($id);
     return view('albums.show')->with('album', $album);

   }

   public function destroy($id){
     $album = Album::with('photos')->find($id);
     if(storage::delete('public/album_covers/'.$album->cover_image)){
       $album->delete();
       foreach ($album->photos as $photo) {
         $photo->delete();
       }
       Storage::deleteDirectory('public/photos/'. $album->id);

       return redirect('/albums')->with('success','Album Deleted');


     }


   }

}
