<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Articles;
use App\Models\Categories;

class ProductAndTourController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $filterCategory = $request->input('category'); // expects category id
        $sort = $request->input('sort'); // expects 'asc' or 'desc'
    
        // Ambil kategori product dan tour (case insensitive)
        $categories = Categories::whereIn('name', ['product', 'tour'])->get();
        $categoryIds = $categories->pluck('id')->toArray();
    
        $articlesQuery = Articles::with('category')
            ->whereIn('category_id', $categoryIds);
    
        // Search di title dan tags
        if ($search) {
            $articlesQuery->where(function($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                      ->orWhere('tags', 'like', "%{$search}%");
            });
        }
    
        // Filter kategori berdasarkan category_id (harus salah satu id product/tour)
        if ($filterCategory && in_array($filterCategory, $categoryIds)) {
            $articlesQuery->where('category_id', $filterCategory);
        }
    
        // Sort berdasarkan harga jika ada dan valid
        if ($sort && in_array(strtolower($sort), ['asc', 'desc'])) {
            $articlesQuery->orderBy('price', $sort);
        } else {
            // default sort terbaru
            $articlesQuery->latest();
        }
    
        $articles = $articlesQuery->paginate(10)->withQueryString();
    
        return view('auth.admin.productandtour', compact('articles', 'categories', 'search', 'filterCategory', 'sort'));
    }      

    public function create()
    {
        $categories = Categories::all(); // Ambil semua kategori
        return view('auth.admin.createproductandtour', compact('categories'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title'    => 'required|unique:articles',
            'textarea' => 'required',
            'tags'     => 'required',
            'image'    => 'required|mimes:jpg,jpeg,png|max:2048',
        ])->validate();

        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('assets/images'), $imageName);

        $article = new Articles();
        $article->user_id = Auth::id();
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->description = $request->textarea;
        $article->tags = $request->tags;
        $article->image = $imageName;
        $article->price = $request->price;
        $article->penjelasan = $request->penjelasan;
        $article->ukuran = $request->ukuran;
        $article->save();

        return redirect()->route('productandtour')->with('message', 'Product and Tour created successfully!');
    }

    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        return view('auth.admin.editproductandtour', compact('article'));
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'title'    => 'required',
            'textarea' => 'required',
            'tags'     => 'required',
            'image'    => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ])->validate();

        $article = Articles::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images'), $imageName);
            $article->image = $imageName;
        }

        $article->title = $request->title;
        $article->description = $request->textarea;
        $article->tags = $request->tags;
        $article->price = $request->price;
        $article->penjelasan = $request->penjelasan;
        $article->ukuran = $request->ukuran;
        $article->save();

        return redirect()->route('productandtour')->with('message', 'Product and Tour updated successfully!');
    }

    public function destroy($id)
    {
        $article = Articles::findOrFail($id);
        $article->delete();

        return redirect()->route('productandtour')->with('message', 'Product and Tour deleted successfully!');
    }
}
