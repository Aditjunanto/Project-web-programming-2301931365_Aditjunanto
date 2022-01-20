<?php

namespace App\Models;



class Post
{
    private static $news_post = [
        [
            "title" => "Breaking News",
            "slug" => "tile_1",
            "vendor" => "Weeding group company",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Ipsam cumque rerum accusamus laudantium, adipisci magni,
            dolore consequatur quos perferendis atque veritatis commodi 
            illum qui nisi obcaecati enim consequuntur facere, eaque unde iusto 
            dolorem maxime. Rerum, illum illo recusandae ullam tempora placeat harum. Saepe cumque 
            illum quam recusandae necessitatibus ipsa eius numquam ratione hic, perspiciatis modi maiores
            maxime voluptatibus accusantium eligendi tempora suscipit sunt sapiente? Cumque enim maxime 
            facilis dolore iure nemo inventore tempora omnis culpa fugiat harum consequuntur a adipisci rerum 
            laborum, ab assumenda dolor molestiae at, voluptate dignissimos quia! Voluptate quia eaque asperiores,
            sunt nam doloremque aperiam pariatur voluptatibus."
        ],
        [
            "title" => "Hot News",
            "slug" => "tile_2",
            "vendor" => "Osama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Ipsam cumque rerum accusamus laudantium, adipisci magni,
            dolore consequatur quos perferendis atque veritatis commodi 
            illum qui nisi obcaecati enim consequuntur facere, eaque unde iusto 
            dolorem maxime. Rerum, illum illo recusandae ullam tempora placeat harum. Saepe cumque 
            illum quam recusandae necessitatibus ipsa eius numquam ratione hic, perspiciatis modi maiores
            maxime voluptatibus accusantium eligendi tempora suscipit sunt sapiente? Cumque enim maxime 
            facilis dolore iure nemo inventore tempora omnis culpa fugiat harum consequuntur a adipisci rerum 
            laborum, ab assumenda dolor molestiae at, voluptate dignissimos quia! Voluptate quia eaque asperiores,
            sunt nam doloremque aperiam pariatur voluptatibus."
        ]
    ];
    
    public static function all(){
        return collect(self::$news_post);
    }

    public static function find($slug){
        $post = static::all();
        // $post =[];
        // foreach($post as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $post->firstWhere('slug',$slug);
    }
}
