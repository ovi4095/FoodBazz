<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeimages= DB::table('homeimages')->get();
        return view('fornt.homepage',compact('homeimages'));
    }
    public function Bindex()
    {
        $homeimages= DB::table('homeimages')->get();
        return view('fornt.banglahomepage')->with('homeimages',$homeimages);
    }
    public function RestaoList()

    {
        $restaurents= DB::table('restaurents')->get();

        /*echo "<pre>";
        print_r($restaurents);
        exit;*/

        return view('fornt.restaurent')->with('restaurents',$restaurents );
    }
    public function RestInfo(){
        $restinfos= DB::table('restinfos')->get();
        return view('fornt.restinfo')->with('restinfos',$restinfos);
    }
    public function RestInfo2(){
        return view('fornt.restinfo2');
    }
    public function ImageGallery(){
        return view('fornt.imagegallery');
    }
    public function Map()
    {
        return view('fornt.map');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
