<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post{
    public $title; // My First Post => my-first-post
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;

    } 
    public static function all()
    {
        //Collection is the helper function called collect that will collect an array and wrap it with collection object
      //file fascade : class that gives you static access to all sort of functionality

    //   collect (File::files(resource_path("posts"))
    //   )
    //   ->map(fn($file) => YamlFrontMatter::parseFile($file))
    //   ->map(fn($document) => new Post(

    //                     $document->title,
    //                     $document->excerpt,
    //                     $document->date,
    //                     $document->body(),
    //                     $document->slug 
              
    //   ));       


        $files = File::files(resource_path("posts/"));
        //file fascade : class that gives you static access to all sort of functionality    
        return array_map(fn($file) => $file -> getContents(), $files);
    }  


    public static function find ($slug)
   {
    if(! file_exists($path = resource_path("posts/{$slug}.html"))){
        throw new ModelNotFoundException();
     }
     return cache()->remember("posts.{$slug}", 3600, fn() =>file_get_contents($path));
    } 
}