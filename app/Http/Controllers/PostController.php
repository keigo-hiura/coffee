<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }


    //一覧表示
    public function index()
    {
        //一覧表示(投稿日が新しい順)
        $posts = $this->post->latest()->get();
        return view('post.index')->with('posts',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //createに飛ばす
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //バリデーションの設定
        $request->validate([
            'name' => 'required|min:1|max:50',
            'content' => 'required|min:1|max:180',
        ]);

        //各項目をデータベースに登録
        $this->post->name = $request->name;
        $this->post->content = $request->content;

        //投稿内容を保存する
        $this->post->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $post = $this->post->findOrFail($id);

        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = $this->post->findOrFail($id);

        return view('post.edit')->with('post', $post);
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
        //バリデーションの設定
        $request->validate([
            'name' => 'required|min:1|max:50',
            'content' => 'required|min:1|max:180',
        ]);

        $post = $this->post->findOrFail($id);

        $post->name= $request->name;
        $post->content= $request->content;

        //投稿内容を保存する
        $post->save();
        return redirect()->route('post.index');

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
