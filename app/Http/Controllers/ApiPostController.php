<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    //
    public function index(){
        // return 'ok';
        $post= Post::all();
        return response()->json([
            'status_code' =>200,
        'status_message'=>'listes des postes',
        'data'=>$post
        ]);
    }

    public function store(Requeest $request){
        $post = new Post ();
        $post->titre= $request->titre;
        $post->description= $request->description;

        $post->save();
    }
}
