<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveSdpResource;
use App\Spd;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $skus = Spd::get();
        return view('spd.index', compact('skus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('spd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(SaveSdpResource $request)
    {
       $sdp = $request->createSpd();

        return redirect()->route('spd.edit',$sdp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Spd $spd)
    {
       return view('spd.edit',compact('spd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spd $spd
     * @return Response
     */
    public function update(SaveSdpResource $request, Spd $spd)
    {
        $user = $request->updateSpd($spd);

        return back()->with('success','The Sku has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Spd $spd
     * @return Response
     */
    public function destroy(Spd $spd)
    {
        $spd->delete();

        return back()
            ->with('info', 'The Sku has been delete successfully');
    }
}
