<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Post;
class ForumController extends Controller
{
    public function showPost(Post $post){
        $forum = $post->load('user');
        return view('forum_single', compact('forum'));
    }
    public function index()
    {
        $forums = Post::orderBy('created_at','DESC')->paginate(5);
        return view('forum',compact('forums'));
    }

    public function diskusi($id)
    {
        $forum = Forum::whereidForum($id)->first();

        return view('diskusi',compact($forum));
    }

   public function store(Request $request)
    {       
        // dd($request);
        if($request->has('image')){
            $this->uploadImage($request);
        }
        $request->user()->forums()->create($request->post());

        return redirect()->route('posts.index')->with('message', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }
}

