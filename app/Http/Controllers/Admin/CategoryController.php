<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.list', compact('categories'));
    }
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request['user_id'] = 1;
        Category::create($request->all());

        /*  $post = new Post();
          $post->title = $request['title'];
          $post->content = $request['content'];
          $post->user_id = 1;

          $post->save();*/

        return redirect()->route('admin.category.index')->with([
            'message' => 'You have successfully added the category',
            'errors' => false]);
    }
    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->name = $request['name'];
        $category->description = $request['description'];

        $category->save();

        return redirect()->route('admin.category.index')->with([
            'message' => 'You have successfully updated the category info',
            'errors' => false]);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with([
            'message' => 'You have successfully deleted the category',
            'errors' => false]);
    }
}
