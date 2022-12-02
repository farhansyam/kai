<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'create', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = auth()->user()->posts;
        $posts = Project::orderBy('created_at','DESC')->get();
        return view('project', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        // dd($request);
        if($request->has('image')){
            $this->uploadImage($request);
        }
        $request->user()->projects()->create($request->post());

        return redirect()->route('project')->with('message', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function showP(Post $post){
        $posts = $post->load('user');
        // dd($posts); 
        return view('project_single', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $post)
    {
        return view('back.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $post)
    {
        // the update method, only fire its events when the update happens directly on the model,
        // so we will use save directly on modal instead of mass assignment
        if($request->has('image')){
            $oldImage = $post->image;
            $this->uploadImage($request);
            if(file_exists(public_path('images/'.$oldImage))){
                unlink(public_path('images/'.$oldImage));
            }
            $post->image = $request->post()['image'];
        }
        $post->title    = $request->title;
        $post->excerpt  = $request->excerpt;
        $post->body     = $request->body;
        $post->save();

        return back()->with('message', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('project');
    }

    public function uploadImage($request){
        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();
        // add the new file 
        $image->move(public_path('images'),$imageName);
        $request->merge(['image' => $imageName]);
        // dd($request);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table posts sesuai pencarian data
		$posts = Project::where('title', 'LIKE', '%'.$cari.'%')->get();

    		// mengirim data pegawai ke view index
		return view('project',['posts' => $posts]);
 
	}
}
