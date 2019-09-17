<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    
    public function index() {

        $posts = Post::all();
        return view('post.posts', compact('posts'));
    }


    public function create() {

        return view('post.createPost');
    }


    public function store(Request $request) {

        $data = $request->only(['title', 'content']);

        if(count($data) > 0) {
            $data["likes"] = 0;
            if(!Post::create($data)){
                return redirect('/posts');
            }
        } 

        return redirect('/posts');
    }



       
        public function edit($id) {

            $post = Post::findOrFail($id);

            return view('post.editPost', compact('post'));
        }



        public function update($id) {
        
            $post = Post::findOrFail($id);

            $post->title = request('title');
            $post->content = request('content');

            $post->save();

            
            return redirect('/posts');
    }



    public function destroy($id) {

        $data = Post::findOrFail($id);
        $data->delete();

        return redirect('/posts');
    }



    public function like($id) {

        $post = Post::findOrFail($id);
        
        $post->likes += 1;
        $post->save();

        return redirect('/posts');
    }

}
