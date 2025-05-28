<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Articles;
use App\Models\User;
use Redirect;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function profile(){
        $user = Auth::user();

        return view('editprofile',['user'=>$user]);
    }

    public function editedprofile(Request $request){
        $user = Auth::user();
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required','numeric'],
        ])->validate();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return Redirect::back()->with('message','Update Successful !');

    }
    public function blog(){
        $user = Auth::user();
        $articles = Articles::with('User')->where('user_id',$user->id)->get();
        return view('auth.admin.blog',['articles'=>$articles]);
    }

    public function editblog($id){
        $user = Auth::user();
        $category = categories::all();
        $articles = Articles::where('id',$id)->first();
        return view("auth.admin.editblog",['user'=>$user,'category'=>$category,'articles'=>$articles]);
    }
    public function createblog(){
        $user = Auth::user();
        $category = categories::all();
        return view("auth.admin.createblog",['user'=>$user,'category'=>$category]);
    }
    public function createdblog(Request $request)
    {
        Validator::make($request->all(), [
            'title'      => 'required|unique:articles',
            'textarea'   => 'required',
            'tags'       => 'required',
            'image'      => 'required|mimes:jpg,jpeg,png|max:2048',
        ])->validate();
    
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images'), $imageName);
        }
    
        $user = Auth::user();
        $article = new Articles();
        $article->user_id = $user->id;
        $article->category_id = $request->myselect; // tidak perlu +1
        $article->title = $request->title;
        $article->description = $request->textarea;
        $article->image = $imageName;
        $article->tags = $request->tags;
        $article->lowprice = $request->lowprice;
        $article->highprice = $request->highprice;
        $article->penjelasan = $request->penjelasan;
        $article->ukuran = $request->ukuran;
        $article->save();
    
        return redirect()->route('blog')->with('message', 'Blog created successfully!');
    }
    
    public function editedblog($id, Request $request)
    {
        $user = Auth::user();
    
        // Validasi input
        Validator::make($request->all(), [
            'title'   => 'required',
            'description' => 'required',
            'image'   => 'nullable|mimes:jpeg,png,jpg',
        ])->validate();
    
        // Ambil artikel yang akan diupdate
        $article = articles::findOrFail($id);
    
        // Update data umum
        $article->user_id = $user->id;
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->tags = $request->tags;
        $article->lowprice = $request->lowprice;
        $article->highprice = $request->highprice;
        $article->penjelasan = $request->penjelasan;
        $article->ukuran = $request->ukuran;
    
        // Update gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('assets/images');
            $image->move($destinationPath, $name);
            $article->image = $name;
        }
    
        // Simpan ke database
        $article->save();
    
        // Redirect ke halaman blog dengan pesan sukses
        return redirect('blog')->with('message', 'Blog berhasil diupdate!');
    }

    public function edituser(){
        $user = User::all();
        return view('edituser',['user'=>$user]);
    }
    public function informationuser($id){
        $user = User::where('id', $id)->first();

        return view('informationuser',['user'=>$user]);
    }
    public function deleteduser($id){
        $articles= articles::where('user_id',$id)->get();
        foreach ($articles as $post) {
            $post->delete();
        }
        $user = User::where('id',$id)->first();
        $user->delete();

        $user = User::all();
        return view('edituser',['user'=>$user]);
    }
    public function informationpost() {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $post = Articles::with('user')->get(); // perhatikan: 'user' lowercase jika nama relasi lowercase
            return view('informationpost', ['post' => $post]);
        }
    
        // Bisa redirect ke halaman login atau tampilkan error
        return redirect()->route('login'); // atau abort(403, 'Unauthorized');
    }
    
    public function productAndTour()
    {
        // Ambil semua artikel yang termasuk kategori "Product and Tour" (asumsikan category_id = 1)
        $articles = Articles::where('category_id', 1)->get();
    
        return view('auth.admin.productandtour', compact('articles'));
    }
    
    public function editProductAndTour() {
        $articles = Articles::where('category_id', 1)->get();
        return view('admin.editproductandtour', compact('articles'));
    }
    
    public function editNewsAndBlog() {
        $articles = Articles::where('category_id', 2)->get();
        return view('admin.editnewsandblog', compact('articles'));
    }

    public function redirect()
    {
        $user = auth()->user();
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('homeshow'); // halaman publik
        }
    }

    public function adminDashboard()
    {
        return view('auth.admin.dashboard');
    }
}   
