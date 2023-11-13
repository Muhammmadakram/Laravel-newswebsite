<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newscateogry;
use App\Models\Postnews;
use App\Models\Author;
use App\Models\Newsflash;

use Share;




class IndexController extends Controller
{


    public function index()
    {
        $categories = Postnews::all();
        $firstCategory = $categories->first();
        $posts = Postnews::where('Category', $firstCategory->Category)->get();
     $flash = Newsflash::all();
        return view('index', compact('posts', 'categories','flash'));
    }

    public function authors()
    {
        $authors = Author::all();
        $categories = Postnews::all();
        $firstCategory = $categories->first();
        $posts = Postnews::where('Category', $firstCategory->Category)->get();

        return view('authors', compact('posts', 'categories','authors'));
    }

public function Category_details($id)
{
    $category = Postnews::find($id);
    $categories = Postnews::all();
    $posts = Postnews::where('Category', $category->Category)->get();

    return view('category_details', compact('posts', 'categories'));
}

public function Postdetails($id)
{
    $shareButtons = Share::page(
        'http://127.0.0.1:8000/postdetails',
        'Your share text comes here'
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()
    ->reddit();

    $posts = Postnews::find($id); // Fetch the specific post by its ID
    $categories = Postnews::all();
    // Fetch related posts in the same category
    $relatedPosts = Postnews::where('Category', $posts->Category)->where('id', '!=', $id)->get();

    return view('postdetails', compact('posts', 'categories','relatedPosts' ,'shareButtons'));
}




}
