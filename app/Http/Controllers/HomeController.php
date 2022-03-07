<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tologin(){
        return view('admin/beginAdmin');
    }
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('id', 'DESC')->simplePaginate(3);
        return view('ccc', [
            'categories' => $categories,
            'posts' => $posts
        ]);
    }

    public function post($postid)
    {
        $post = Post::where('id', '=' , $postid)->first();
        $latestPosts = Post::orderBy('id', 'DESC')->take(6)->get();
        $categories = Category::all();
        return view('post', [
            'post' => $post,
            'categories' => $categories,
            'latestPosts' => $latestPosts
        ]);
    }

    public function postsByCategory($category)
    {
        $categories = Category::all();
        $category = Category::where('name', '=' ,$category)->first();
        $categoryIdSelected = $category->id;
        $posts = Post::where('category_id', '=', $categoryIdSelected)->paginate(6);
        $contador = count($posts);
        if($contador == 0){
            return Redirect()->back()->with('menssage','La categoría '.$category->name.' aun no cuenta con entradas....');
        }else{
            return view('ccc', [
                'categories' => $categories,
                'posts' => $posts,
                'categoryIdSelected' => $categoryIdSelected
            ]);
        }
    }
}