<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    //
    function index(){
        $array=[[
            "id"=>1,
            "title"=>"post1",
            "body"=>"body1"
        ],
        [
            "id"=>2,
            "title"=>"post2",
            "body"=>"body2"
        ],
        [
            "id"=>3,
            "title"=>"post3",
            "body"=>"body3"
        ]];
        return view('index',["posts"=>$array]);
    }
    
    function show($id){

        $array=[
            "id"=>$id,
            "title"=>"post1",
            "body"=>"body1"
        ];
        return view('view',["posts"=>$array]);

    }
    function edit($id){
        $array=[
            "id"=>$id,
            "title"=>"post1",
            "body"=>"body1"
        ];
        return view('edit',["posts"=>$array]);

    }
    function create(){
        return view("create");

    }
    function store(Request $request){
        return "done";

    }
    function update(Request $request ,$id){
        return "update done";
    }
    function destroy($id){
        return "destroy post";
    }
}
