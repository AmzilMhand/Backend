<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required',
        'content' => 'required',
        'date' => 'required',
      ]);
      $title = $request->title;
      $content = $request->content;
      $date = $request->date;
      $post = DB::insert('insert into posts(title, content, date) values(?, ?,? )', [$title, $content, $date]);
      return redirect(route('posts'));
    }

    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = DB::select('select * from posts');
        return view('posts.show', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = DB::select('select * from posts where id=?', [$id]);
        return view('posts.edit', ['post'=> $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
          ]);
          $title = $request->title;
          $content = $request->content;
          $date = $request->date;
          $post = DB::update('update posts set title=?, content=?, date=? where id=?', [$title, $content, $date, $id]);
          return redirect(route('posts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $post = DB::delete('delete from posts where id = ?', [$id]);
        return redirect(route('posts'));
    }
}
