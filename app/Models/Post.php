<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {    
        return [
            [   
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'farras',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore commodi rem esse cumque rerum recusandae possimus consequatur ex asperiores laudantium aperiam facere libero quos doloremque, corrupti officia quis voluptas dicta?'
        
        
        
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'farras',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quisquam ea perspiciatis at. Tempora omnis sint similique sunt magni, perspiciatis nisi amet doloribus necessitatibus illum possimus culpa distinctio sit commodi!'
        
        
        
            ]
        ];
    }

    public static function find($slug): array
    {
       $post = Arr::first(static::all(),fn ($post) => $post['slug'] == $slug);

        if (!$post){
            abort(404);
        }
        
        return $post;
    }
}