<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'Posts',
            'galeries' => Galery::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatePost = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:galeries',
            'author' => 'required',
            'category_id' => 'required',
            'photos' => 'required',
            'body' => 'required'
        ]);
        
        $validatePost['user_id'] = auth()->user()->id;

        Galery::create($validatePost);
        
        return redirect('/dashboard/posts')->with('success', 'post successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $post)
    {
        if($post->user->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.posts.show',[
            'galery' => $post,
            'title' => 'Post View'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $post)
    {
        if($post->user->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.posts.edit',[
            'galery' => $post,
            'title' => 'Edit Post',
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $post)
    {
        $validatePost = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'photos' => 'required',
            'body' => 'required'
        ]);

        if($request->slug !== $post->slug){
            $validatePost['slug'] = 'required|unique:galeries';
        }

        $validatePost['user_id'] = auth()->user()->id;

        Galery::where('id', $post->id)->update($validatePost);
        return redirect('/dashboard/posts')->with('success', 'post successfully edited');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $post)
    {
        Galery::destroy($post->id);
        
        if($post->user_id->id !== auth()->user()->id) {
            abort(403);
        }
        return redirect('/dashboard/posts')->with('success', 'post successfully deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Galery::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
