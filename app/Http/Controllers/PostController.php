<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use DB;
class PostController extends Controller
{
    public function index(){
        //ORM
        $data = post::get();
        //DB Query Builder
        $data = DB::table('posts')->get();

        return $data;
        
        return view('Frontend.index');
    }
}
