<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Articles;

class ProductAndTourController extends Controller
{
    public function index()
    {
        $articles = Articles::where('category_id', 1)->get(); // Category 1 assumed for Product & Tour
        return view('auth.admin.productandtour', compact('articles'));
    }

    public function create()
    {
        return view('auth.admin.createproductandtour');
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
        $article->category_id = 1;
        $article->title = $request->title;
        $article->description = $request->textarea;
        $article->tags = $request->tags;
        $article->image = $imageName;
        $article->lowprice = $request->lowprice;
        $article->highprice = $request->highprice;
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
        $article->lowprice = $request->lowprice;
        $article->highprice = $request->highprice;
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
