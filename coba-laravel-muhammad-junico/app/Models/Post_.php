<?php

namespace App\Models;



class Post 
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "JunJun",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellendus voluptatem accusantium? Error laboriosam dolor consequatur culpa deleniti aut rerum sequi quibusdam! Hic pariatur commodi vero dicta sint, excepturi natus ipsum aut! Corporis dicta, vel ullam possimus earum nobis ut quae suscipit exercitationem, nihil aliquid quasi libero sunt rem eum perferendis pariatur modi rerum id, quaerat aperiam? Vitae sapiente rem eius consequuntur quasi asperiores quam, non ipsa excepturi perferendis, dolorum repellat recusandae ut itaque repellendus possimus nisi aperiam fugit officia."
    
        ],
        [
            "title" => "Judul kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dlin Skuy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio commodi eligendi harum ab velit tempora amet numquam ad neque ipsum, est inventore nisi blanditiis veniam, tempore mollitia a dicta accusamus provident. Nesciunt aperiam ea est aliquam, asperiores, sit ipsam laboriosam omnis exercitationem in autem dicta enim sunt voluptates, reprehenderit maiores inventore? Dolor tempora praesentium illo exercitationem ab, doloremque reprehenderit soluta, ipsa obcaecati voluptatem aliquid? Ex, consequuntur eos quaerat qui sapiente doloribus, autem tempore perferendis ad perspiciatis quas distinctio explicabo debitis. Quo excepturi expedita rerum nostrum, commodi harum culpa odit minima ea dolor earum minus magni quisquam assumenda molestias pariatur voluptatum?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        

    return $posts->firstWhere('slug', $slug);
    }

}
