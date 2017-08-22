<?php

namespace App\Http\Controllers\Admin;


use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index() {
        //get posts from DB
        $posts = Post::all();

        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = 1;
        $post = Post::create($request->all());

        $post->categories()->attach($request['category_id']);


      /*  $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id = 1;

        $post->save();*/

        return redirect()->route('admin.post.index')->with([
            'message' => 'You have successfully added the post',
            'errors' => false]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->title = $request['title'];
        $post->content = $request['content'];

        $post->save();

        return redirect()->route('admin.post.index')->with([
            'message' => 'You have successfully updated the post info',
            'errors' => false]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin.post.index')->with([
            'message' => 'You have successfully deleted the post',
            'errors' => false]);
    }
}
