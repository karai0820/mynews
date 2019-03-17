<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Profile;

class NewsController extends Controller
{
    public function index(Request $request){
    	$cond_title = $request->cond_title;
    	if($cond_title != ''){
    		$posts = News::where('title',$cond_title).orderBy('updated_at','desc')->get();
    	}else{
    		$posts = News::all()->sortByDesc('update_at');
    	}

    	if(count($posts)>0){
    		$headline = $posts->shift();

    	}else{
    		$headline = null;
    	}
    	return view('news.index',['headline'=>$headline,'posts'=>$posts,'cond_title'=>$cond_title]);
    }

    public function profile(){
    	
    	$profiles = Profile::all();

    	return view('news.profile',['profiles'=>$profiles]);
    }

}
