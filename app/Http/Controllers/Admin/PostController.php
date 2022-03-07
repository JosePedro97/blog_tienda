<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function index(){
        $post = Post::all();
        $categories = Category::all();
        return view('admin.posts.index',[
            'posts' => $post,
            'categories' => $categories
            ]);
    }
    public function store(Request $requests){//GUARDAR
        $newPost = new Post();//ABRIMOS NUEVO REGISTRO
        //GUARDAR IMAGEN
        if($requests->hasFile('featured')){//PREGUNTAMOS SI EL FORMULARIO VIENE CON UNA IMAGEN
            $file = $requests->file('featured');//DAME LA IMAGEN Y GUARDALA EN LA VARIABLE FILE
            $destinationPath = 'images/featureds/';//GUARDAMOS LA IMAGEN EN EL DESTINO
            $filename = time(). '-' . $file -> getClientOriginalName();//HACEMOS UNA SINTAXIS CON EL NOMBRE
            $uploadSuccess = $requests ->file('featured')->move($destinationPath, $filename);// SUBIMOS LA IMAGEN A LA CARPETA
            $newPost->featured = $destinationPath . $filename;
        }
        $newPost->title = $requests->title;
        $newPost->category_id = $requests->category_id;
        $newPost->content = $requests->content;
        $newPost->autor = $requests->autor;//INGRESAMOS
        $newPost->save();//GUARDAMOS
        return redirect('/admin/posts/')->with('menssage','Post Guardado');//REDIRIGIMOS
    }
    public function update(Request $requests, $postId){//EDITAR
        $post = Post::find($postId);//BUSCAMOS
        $post->title = $requests->title;
        $post->category_id = $requests->category_id;
        $post->content = $requests->content;
        $post->autor = $requests->autor;//INGRESAMOS
       
        if($requests->hasFile('featured')){
            if(!empty($post->featured)){
                unlink("$post->featured");
            }
        $file = $requests->file('featured');//DAME LA IMAGEN Y GUARDALA EN LA VARIABLE FILE
        $destinationPath = 'images/featureds/';//GUARDAMOS LA IMAGEN EN EL DESTINO
        $filename = time(). '-' . $file -> getClientOriginalName();//HACEMOS UNA SINTAXIS CON EL NOMBRE
        $uploadSuccess = $requests ->file('featured')->move($destinationPath, $filename);
        $post->featured = $destinationPath . $filename;
    }
        $post->save();//GUARDAMOS
        return redirect('/admin/posts/')->with('menssage','Post Editado');//REDIRIGIMOS
        
    }
    public function borrarImg(Request $request, $post){

    }
    public function delete(Request $requests, $postId){//ELIMINAR
            $post = Post::find($postId);//BUSCAMOS
            if(!empty($post->featured)){
                unlink("$post->featured");
            }
             $post->delete();//ELIMINAMOS
             return redirect('/admin/posts/')->with('menssage','Post Eliminado');//REDIRIGIMOS
     }
}