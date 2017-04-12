<?php
/**
 * Created by PhpStorm.
 * User: ankomah nana yaw
 * Date: 4/2/2017
 * Time: 5:45 PM
 */

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

    public function getPost(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.public')->withPosts($posts);

    }


    public function getAbout(){
        return view('pages/about');
    }

}
