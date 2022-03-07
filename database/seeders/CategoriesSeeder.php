<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = [
            "id" => 1,
            "name" => "Otras Categorias"
        ];
        $category = new Category($category1);
        $category -> save();
    }
}
