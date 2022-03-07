<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',['categories' => $categories]);
    }
    public function store(Request $requests){//GUARDAR
        $newCategory = new Category();//ABRIMOS NUEVO REGISTRO
        $newCategory->name = $requests->name;//INGRESAMOS
        $newCategory->save();//GUARDAMOS
        return redirect('/admin/categories')->with('menssage','Categoría Guardada');//REDIRIGIMOS
    }
    public function update(Request $requests, $categoryId){//EDITAR
        $category = Category::find($categoryId);//BUSCAMOS
        $category->name = $requests->name;//ACTUALIZAMOS
        $category->save();//GUARDAMOS
       return redirect('/admin/categories')->with('menssage','Categoría Actualizada');//REDIRIGIMOS
    }
    public function delete(Request $requests, $categoryId){//ELIMINAR
        $category = Category::find($categoryId);//BUSCAMOS
        $post = Post::where('category_id', $categoryId)->get();
        $contador = count($post);
        if($contador == 0){
            $category->delete();//ELIMINAMOS
            return redirect('/admin/categories')->with('menssage','Categoría Eliminada');//REDIRIGIMOS
        }else{
            return redirect('/admin/categories')->with('menssage2','No se puede eliminar esta categoría ya que cuenta con '.$contador.' Post relacionados');//REDIRIGIMOS
        }
       
    }
}
