<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'slug',
        'body'
    ];

    private static $posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dodi Ardiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem! lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rifqi Raihan Nur",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt sapiente expedita amet autem aliquid eos voluptatem quod totam dolor illo accusamus sequi quisquam illum, officiis repellat accusantium modi quaerat et? Molestiae sit praesentium optio et ipsa. Magni commodi voluptates voluptatem?"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Andika Fahrezi",
            "body"  => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis ea tempora architecto libero placeat facilis voluptatibus ab suscipit inventore. Amet fugit eligendi in, odit aut pariatur quia commodi? Nostrum, repellendus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt sapiente expedita amet autem aliquid eos voluptatem quod totam dolor illo accusamus sequi quisquam illum, officiis repellat accusantium modi quaerat et? Molestiae sit praesentium optio et ipsa. Magni commodi voluptates voluptatem?"
        ],
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
