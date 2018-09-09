<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;


use Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {

        // gaunu visus komentarus is modelio
        $comments = Comment::all();

        // comments.index ieskos failo resources/views/comments/index.blade.php
        return view('comments.index', ["comments" => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comments = Comment::all();
        
        // Kreipiames i /resources/views/comments/create.blade.php
        return view('comments.create', ["comments" => $comments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        // priskiriu komentaro teksta kuris atejo is formos
        $comment->comment_text = $request->comment_text;

        // Gauname prisijungusio vartotojo ID
        $comment->user_id = Auth::user()->id;
        
       

        // issaugome i duombaze
        $comment->save();

        return redirect()->route('comments.index', $request->comment_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // pasiemu redaguojama komentara
        $comment = Comment::find($id);
      
        
        return view('comments.edit',[
            "comment" => $comment
          
        ]);
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
        $comment = Comment::find($id);
        $comment->comment_text = $request->comment_text;
       

        $comment->save();

        return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Gaunu komentara pagal ID
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('comments.index');
    }
}