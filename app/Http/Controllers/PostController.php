<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Image;
use Images;
use Storage;

class PostController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('pages.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('pages.edit')->with('post',$post);
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
        'title' => 'required',
        'body' => 'required',
        'featured_image' => 'image'

      ]);

      $post = Post::find($id);
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->card_title1 = $request->input('card_title1');
      $post->card_body1 = $request->input('card_body1');
      $post->card_title2 = $request->input('card_title2');
      $post->card_body2 = $request->input('card_body2');
      $post->card_title3 = $request->input('card_title3');
      $post->card_body3 = $request->input('card_body3');

      if($request->hasFile('featured_image1')){
        //add the new photo
        $img = Image::find($id);
        //$image = $request->file('featured_image1');
        //$filename = time() . '.' . $image->getClientOriginalExtension();
        //$location = public_path('images/homepage/'. $filename);
        $delpath = public_path('images/homepage/');
        //Images::make($image)->resize(300,200)->save($location);

        $filenameWithExt = $request->file('featured_image1')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('featured_image1')->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('featured_image1')->storeAs('public/images/homepage', $filenameToStore);

        $oldfilename = $img->photo1;
        //update databese
        $img->photo1 = $filenameToStore;
        //delete old photo
        Storage::Delete("public/images/homepage/{$oldfilename}");
        $img->save();
      }elseif ($request->hasFile('featured_image2')){
        //add the new photo
        $img = Image::find($id);
        $delpath = public_path('images/homepage/');
        $filenameWithExt = $request->file('featured_image2')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('featured_image2')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('featured_image2')->storeAs('public/images/homepage', $filenameToStore);
        $oldfilename = $img->photo2;
        //update databese
        $img->photo2 = $filenameToStore;
        //delete old photo
        Storage::Delete("public/images/homepage/{$oldfilename}");
        $img->save();
      }elseif ($request->hasFile('featured_image3')){
        //add the new photo
        $img = Image::find($id);
        $delpath = public_path('images/homepage/');
        $filenameWithExt = $request->file('featured_image3')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('featured_image3')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('featured_image3')->storeAs('public/images/homepage', $filenameToStore);
        $oldfilename = $img->photo3;
        //update databese
        $img->photo3 = $filenameToStore;
        //delete old photo
        Storage::Delete("public/images/homepage/{$oldfilename}");
        $img->save();

      }

      $post->save();


      return redirect('/post/1')->with('success','Changes Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
