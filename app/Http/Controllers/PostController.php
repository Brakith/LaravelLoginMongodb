<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function form(){
        return view('post.form');
    }

    public function save(Request $request){
        //dd($request); 
        //dd($request->title); 
        $data = new Post($request->all());
        $data->save();
        
        if($data){
            return redirect()->route('home');
        }
        else{
            return back();
        }
    }
    /*
    
    }*/
}
