<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = [
            "category_id" => 1,
            "title" => "Acerca del Creador",
            "content" => "Frankness applauded by supported ye household.
            Collected favourite now for for and rapturous repulsive consulted.
            An seems green be wrote again. She add what own only like. Tolerably we as extremity exquisite do commanded.
            Doubtful offended do entrance of landlord moreover is mistress in. 
            Nay was appear entire ladies. Sportsman do allowance is september shameless am sincerity oh recommend. 
            Gate tell man day that who.
            Built purse maids cease her ham new seven among and.
            Pulled coming wooded tended it answer remain me be. 
            So landlord by we unlocked sensible it.
            Fat cannot use denied excuse son law. Wisdom happen suffer common the appear ham beauty her had.
            Or belonging zealously existence as by resources.",
            "autor" =>  "Jhon Doe",
            "featured" => "images/featureds/1646633775-BLOG.png"
        ];
        $post = new Post($post1);
        $post -> save();
    }
}
