<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Articles;
use App\Models\Categories;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Articles::with('category')->whereIn('category_id', Categories::whereIn('name', ['blog', 'news'])->pluck('id'))->get();
        return view('auth.admin.blog', compact('articles'));
    }

    public function create()
    {
        $categories = Categories::whereIn('name', ['blog', 'news'])->get();
        return view('auth.admin.createblog', compact('categories'));
    }

    public function store(Request $request)
    {
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
        }

        Articles::create([
            'title' => $request->title,
            'tags' => $request->tags,
            'category_id' => $request->category_id,
            'description' => $request->textarea,
            'image' => $imageName, // asumsi kamu upload gambar
            'penjelasan' => $request->penjelasan,
            'user_id' => Auth::id(), // <- ini penting!
        ]);

        return redirect()->route('auth.admin.blog')->with('message', 'Blog/News berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        $categories = Categories::whereIn('name', ['blog', 'news'])->get();
        return view('auth.admin.editblog', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $article = Articles::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $article->image = $imageName;
        }

        $article->update([
            'title' => $request->title,
            'tags' => $request->tags,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('blog')->with('message', 'Blog/News berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Articles::destroy($id);
        return redirect()->route('blog')->with('message', 'Blog/News berhasil dihapus.');
    }
}
