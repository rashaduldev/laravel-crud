<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function fileStore(Request $request){

    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpg,bmp,png',
    ]);

    $post = new post;

    $post->name = $request->name;
    $post->description = $request->description;
    $post->image = $request->image;
    $post->save();

    return redirect()->route('home')->with('success','Post has been created successfully');
    }
}
