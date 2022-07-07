<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\movement;

use GuzzleHttp\Psr7\Request as Psr7Request;

use function PHPUnit\Framework\returnSelf;

class Textcontroller extends Controller
{
    public function addBlog(Request $request){
        $request->validate([
            'title' =>'required|string|max:75',
            'content' =>'required|string|max:200',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $data=movement::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$request->image,
            'user_id'=>Auth()->user()->id
            
            
    
        ]); 
        if($data){
            return back()->with('success','Data is inserted successfully.');
        }
        else{
            return back()->with('fail','Data not inserted!!' );
        }
    }
        public function ViewBlogfn(){
            $id=Auth::user()->id;
            $articles=movement::all()->where('user_id',$id);
             //return($article);
             
            return view('viewBlog',compact('articles'));
           
        }
        public function store(Request $request){

            $req= new movement;
            $req->title=$request->input('title');
            $req->content=$request->input('content');
            $req->image=$request->input('image');
            if($request->filename){
                $ext=$request->filename->getClientOriginalExtension();
                $name=time().'.'.$ext;
                $request->filename->move('public/images',$name);

            }
            $req->filename=$name;
            $req->user_id=Auth::user()->id;

            $req->save();
 b                                     
            return redirect()->back()->with('status','the post is added');





        }   
        // public function work (){
            // $cruds = Crud::all();  
        // return view('work', compact('cruds'));  
    // }  

        
}    
        




       
       




        
