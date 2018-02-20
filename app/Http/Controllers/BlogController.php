<?php

namespace App\Http\Controllers;

use App\Note;
use function foo\func;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
class BlogController extends Controller
{
    public function index(Request $request){
        $posts = Post::where('status','PUBLISHED')->orderBy('created_at','desc');
        $categories = Category::withCount(['posts as count_post'])->orderBy('count_post','desc')->get()->take(8);
        $popular = Post::where('status','PUBLISHED')->orderBy('view_count','desc')->get()->take(5);
        if($request->search != null && $request->search != ""){
            $search = $request->search;
            $posts = $posts->whereHas('translations', function ($query)use($search){
                $query->where(function ($quer)use($search){
                    $quer->where('value','LIKE',"%$search%")->where('column_name','title');
                })->orWhere(function ($quer)use($search){
                    $quer->where('value','LIKE',"%$search%")->where('column_name','body');
                });
            })->orWhere('title','LIKE', "%$search%")->orWhere('body','LIKE', "%$search%");
        }
        if($request->category != null && $request->category != ""){
            $category = $request->category;
            $posts = $posts->whereHas('categories', function ($query) use($category){
               $query->where('name',$category);
            });
        }

        $relatedCategories = Category::whereHas('posts', function ($query) use($posts){
           $query->whereIn('posts.id',$posts->pluck('id'));
        })->get()->take(10);
        $posts = $posts->paginate(10);
        return view('blog')
            ->withPosts($posts)
            ->withCategories($categories)
            ->withPopular($popular)
            ->withRelatedcategories($relatedCategories);
    }
    public function show($slug){
        $post = Post::where('status','PUBLISHED')->where('slug',$slug)->firstOrFail();
        $categories = Category::withCount(['posts as count_post'])->orderBy('count_post','desc')->get()->take(8);
        $popular = Post::where('status','PUBLISHED')->orderBy('view_count','desc')->get()->take(5);
        $relatedCategories = Category::whereHas('posts', function ($query) use($post){
            $query->where('posts.id',$post->id);
        })->get()->take(10);

        return view('blog-single')
            ->withPost($post)
            ->withRelatedcategories($relatedCategories)
            ->withCategories($categories)
            ->withPopular($popular);
    }
    public function commentSubmit(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'parent_id'=>'nullable|exists:notes,id'
        ]);
        $note = new Note($request->all());
        if($request->parent_id != null){
            $note->parent_id = $request->parent_id;
        }
        $tour= Post::findOrFail($id)->comments()->save($note);

        return back()->with(['message'=>'Спасибо', 'text' => 'Ваш коммент принят!']);
    }
}
