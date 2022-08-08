<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Auth;
use App\Models\Posts;
class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('threads');
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
        $threadpost = new Thread;
        $threadpost->Title=$request->input('Title');
        $threadpost->Content=$request->input('Content');
        
        $threadpost->forum_id=$request->input('forum_id');
        $threadpost->user_id=Auth::user()->id;
        $threadpost->save();
        return redirect()->back()->with('success','Post submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Auth::user();
        $thread = Thread::find($id);
        $post= Posts::all()->where('thread_id',$id);

        return view('threads')->with('user',$user)->with('thread',$thread)->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        $thread = Thread::find($request->input('id'));
        $thread->Title=$request->input('Title');
        $thread->Content=$request->input('Content');
        $thread->save();
        return redirect()->back()->with('success','Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
       
        $threaddel = new Thread();
        $threaddel->destroy($thread);
        return redirect()->back()->with('success','Post deleted!');
    }
}
