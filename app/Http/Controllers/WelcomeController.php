<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Categories;
use App\Models\Articles;
use App\Models\Visitor;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function indexshow(){
        $post = articles::where('Category_id',2)->get();
        return view('welcome',['post'=>$post]);
    }
    public function aboutus(){
        $post = articles::where('category_id', 4)->get(); // Fetch posts with category_id 4
        return view('aboutus', ['post' => $post]);
    }

    public function category($id){
        // Jika ID yang diminta adalah 1 (Product and Tour)
        if ($id == 1) {
            $post = Articles::with('category')->whereIn('category_id', [1, 2])->get();
            $category = (object) ['name' => 'Product and Tour'];
        }
        // Jika ID yang diminta adalah 3 (News and Blog)
        elseif ($id == 3) {
            $post = Articles::with('category')->whereIn('category_id', [3, 4])->get();
            $category = (object) ['name' => 'News and Blog'];
        }
        // Kategori lain (tampilkan artikel dari satu kategori saja)
        else {
            $post = Articles::with('category')->where('category_id', $id)->get();
            $category = Categories::where('id', $id)->first();
        }
    
        return view('category', ['post' => $post, 'category' => $category]);
    }
    
    public function post($id){
        $post = articles::with('user')->find($id);
        return view('post',['post'=>$post]);
    }

    public function contactus(){
        return view('contactus');
    }

    public function csr(){
        return view('csr');
    }

    public function researchdedication(){
        return view('researchdedication');
    }

    public function testing(){
        $post = articles::where('category_id', 4)->get(); // Fetch posts with category_id 4
        return view('testing', ['post' => $post]);
    }

    public function productTour()
    {
        // Ambil data dari category_id 1 (Tour Packages) dan 2 (Product)
        $posts = Articles::with('category')->whereIn('category_id', [1, 2])->get();
    
        return view('product-tour', ['posts' => $posts]);
    }
    
  
}
