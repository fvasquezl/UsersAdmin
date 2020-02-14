<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Spd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Spd $spd)
    {
        $this->validate(request(),[
            'photo' => 'image'
        ]);
        $originalName = request()->file('photo')->getClientOriginalName();

        $spd->photos()->create([
            'name' => request()->file('photo')->getClientOriginalName(),
            'url'=> request()->file('photo')->storeAs('spd',$originalName,'public')  
        ]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        Storage::delete($photo->url);
        return back()->with('success','Photo deleted');
    }
}
