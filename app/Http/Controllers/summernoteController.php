<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Summernote;

class summernoteController extends Controller
{
    public function insert(Request $req){
    	$data = new Summernote([
    		'title'=> $req->title,
    		'category'=> $req->category,
    		'detail'=> $req->summernote,
    	]);
    	$data->save();

    	return redirect()->back();
    }

    public function view(){
    	$data = Summernote::all();
    	return view('view',['data'=>$data]);
    }

   function viewdetail($id){

   	 $data = Summernote::where('id',$id)->get();
    	return view('viewdetail',['dataa'=>$data]);
   }
}


