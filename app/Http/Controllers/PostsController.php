<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where("IsActive", "=", true) -> get();
        return view("posts.index", ["posts" => $posts]);
    }
    public function edit($id) {
        $posts = Post::find($id);
        return view("posts.edit", ["posts" => $posts]);

    }
    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post -> Title = $request->input('Title');
        $post -> Link = $request->input('Link');
        $post -> ShortDescription = $request -> input('ShortDescription');
        $post -> ContentHTML = $request->input('ContentHTML');
        $post -> EditDateTime = date("Y-m-d G:i:s");
        $post -> MetaDescription = $request -> input('MetaDescription');
        $post -> MetaTags = $request->input('MetaTags');
        $post -> Notes = $request -> input('Notes');
        $post -> save();
        return redirect("/posty-wewnetrzne");
    }
    public function delete($id) {
        $post = Post::find($id);
        $post -> IsActive = false;
        $post -> save();
        return redirect("/posty-wewnetrzne");
    }
    public function create() {
        return view("posts.create");
    }
    public function addToDB(Request $request) {
        $post= new Post();
        $post -> Title = $request->input('Title');
        $post -> Link = $request->input('Link');
        $post -> ShortDescription = $request -> input('ShortDescription');
        $post -> ContentHTML = $request->input('ContentHTML');
        $post -> IsPublic = true;
        $post -> IsActive = true;
        $post -> CreationDateTime = date("Y-m-d G:i:s");
        $post -> PublishDateTime = date("Y-m-d G:i:s");
        $post -> EditDateTime = date("Y-m-d G:i:s");
        $post -> MetaDescription = $request -> input('MetaDescription');
        $post -> MetaTags = $request->input('MetaTags');
        $post -> Notes = $request -> input('Notes');
        $post -> save();
        return redirect("/posty-wewnetrzne");
    }
}
