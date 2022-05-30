<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Blog;
use App\Deadline;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    public function show($slug)
    {
        $blog = Blog::where(['slug' => $slug])->firstOrFail();
        
        $blogs = Blog::all();

        // return $blog->image_path;

        // View::share('blogs',$blogs);
        return view('pages.blogs.show',compact('blog','blogs'));

    }




}
