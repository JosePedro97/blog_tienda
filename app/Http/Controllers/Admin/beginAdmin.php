<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class beginAdmin extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function index(){
        $contadorCats = count(Category::all());
        $contadorPosts =  count(Post::all());
        return view('admin.beginAdmin', [
            'contadorCats' => $contadorCats,
            'contadorPosts' => $contadorPosts]);
    }
}
