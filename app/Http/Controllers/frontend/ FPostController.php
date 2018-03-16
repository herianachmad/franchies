<?php

namespace App\Http\Controllers\client;

use App\BPost;
use Illuminate\Http\Request;

class  FPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function home(){
       return view('vueApp');
     }

    public function index()
    {
        return Post:: orderBy('created_at','DESC')->get();
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
     * @param  \App\BPost  $bPost
     * @return \Illuminate\Http\Response
     */
    public function show(BPost $bPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BPost  $bPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BPost $bPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BPost  $bPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BPost $bPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BPost  $bPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BPost $bPost)
    {
        //
    }
}
