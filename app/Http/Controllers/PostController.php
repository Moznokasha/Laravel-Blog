<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $result=post::all();
       // return view('index',["posts"=>$result]);
        $posts = Post::latest()->paginate(10);
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
        /*
        $request->validate([
            'title'=>['required' , 'unique:posts' , 'max:225'],
            'body'=>['required'],


        ]);
        */
       
        $validatedData = $request->validate([
            'title' => 'required|min:3|unique:posts,title' . $post->id,
            'body' => 'required|min:10',
        ]);
        

        Post::create($validatedData);

       

          
        $data = $request->all();
         /*
        post::create([
            "title"=>$data['title'],
            "body"=>$data['body']

        ]);*/


        $post= new post();
        $post-> title =$data['title'];
        $post-> body =$data['body'];
        $post-> user_id =Auth::id();
        $post->save();
        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $post=post::find($id);
        return view('view',["post"=>$post]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $post=post::find($id);
        return view('edit',["post"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $post = Post::findOrFail($id);
        $request->validate([
            'title' => 'required|min:3|unique:posts,title,' . $post->id,
            'body' => 'required|min:10',
        ]);

        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
       
        $post=post::find($id);
        $post->title=$request['title'];
        $post->body=$request['body'];
        $post->save();
        return redirect("/posts");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        post::destroy($id);
        return redirect("/posts");
    }
}
