<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function about(){
        return view('pages.about');
    }
    public function consultations(){
        return view('pages.consultations');
    }
    public function puppy(){
        return view('pages.puppy');
    }
    public function choice(){
        return view('pages.helpChoice');
    }
    public function petsitting(){
        return view('pages.petsitting');
    }
    public function contact(){
        return view('pages.contact');
    }
   
    public function gallery(){
        return view('pages.gallery');
    }

    public function inBuild(){
        return view('pageInBuild');
    }

    public function posts()
    {

        $posts = Post::orderByDesc('id')->paginate(12);


        $newestPost = $posts->first();
        $latestPosts = $posts->skip(1)->take(3)->all();

        return view('pages.posts', ['posts' => $posts, 'newestPost' => $newestPost, 'latestPosts' => $latestPosts]);
    }
    public function post(Post $post)
    {
        return (view('pages.post', ['post' => $post]));
    }
}
