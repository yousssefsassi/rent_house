<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::latest()->paginate(3);
     
        return view('Posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'descreption' => 'required',
            'localisation'=>'required',
            'price'=>'required',
            'tlf'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
     
        post::create($input);
      
        return redirect()->route('Posts.index')
                        ->with('success','Article créé avec success.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts =Post::find($id);
        return view('posts.show',compact('posts'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
            $post =Post::find($id);
            return view('posts.edit',compact('post','id'));
       
    
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
        $post =Post::find($id);
        $request->validate([
            'name' => 'required',
            'descreption' => 'required',
            'localisation'=>'required',
            'price'=>'required',
            'tlf'=>'required',
           
        ]);
        $post->name=$request->name ;
        $post->descreption=$request->descreption ;
        $post->localisation=$request->localisation ;
        $post->price=$request->price ;
        $post->tlf=$request->tlf ;

   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $post['image'] = "$profileImage";
        }else{
            unset($post['image']);
        }
           
      
     
        return redirect()->route('Posts.index')
                        ->with('success','Article modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        $post->delete();
        return back()->with('success', 'L\'article a bien été mis dans la corbeille.');

    }
    public function forceDestroy($id)
    {  
        $comments = Comment::where('post_id',$id)->get();
        foreach($comments as $comment)
       {
        $comment->delete();
       }
        Post::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('success', 'L\'article a bien été supprimé définitivement dans la base de données.');
       }
       public function restore($id)
       {
        Post::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('success', 'L\'article a bien été restauré.');
       }
    }
