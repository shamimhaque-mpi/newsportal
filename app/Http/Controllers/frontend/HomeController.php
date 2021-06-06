<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\District;
use App\Sponsor;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
    	$categories    = Category::withCount(['post'])->paginate(8);
    	$posts         = Post::orderBy('id', 'DESC')->paginate(8);
        $sponsors      = Sponsor::orderBy('id', 'DESC')->paginate(8);
        return view('frontend.index', compact('categories', 'posts', 'sponsors'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    
    public function jobs(Request $request, $cat_id=null)
    {
    	$posts = Post::orderBy('id', 'DESC');
        if($cat_id){
            $posts->where(['category_id'=>$cat_id]);
        }
        if($request->isMethod('post')){
            if($request->district_id != ''){
                $posts->where(['district_id'=>$request->district_id]);
            }
            $posts->where('company_name', 'LIKE', '%'.($request->search).'%');
        }
        $posts = $posts->paginate(15);

        $categories = Category::get();
        $districts = District::get();

        return view('frontend.pages.jobs', compact('posts', 'categories', 'districts'));
    }
    
    public function jobs_details($id)
    {
    	$post = Post::whereId($id)->first();
    	$relative_jobs = Post::where([
            ['category_id', '=',  $post->category_id],
            ['id',          '!=', $post->id],
        ])
        ->orderBy('id', 'DESC')->paginate(6);
        return view('frontend.pages.jobs_details', compact('post', 'relative_jobs'));
    }
    
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    
    public function terms()
    {
        return view('frontend.pages.terms');
    }
    
    public function blog()
    {
        return view('frontend.pages.blog');
    }
    
    public function blog_details()
    {
        return view('frontend.pages.blog_details');
    }
    
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    
    public function typography()
    {
        return view('frontend.pages.typography');
    }
    
    public function icons()
    {
        return view('frontend.pages.icons');
    }
    
    public function coming_soon()
    {
        return view('frontend.pages.coming_soon');
    }
    
    public function alert()
    {
        return view('frontend.pages.alert');
    }

    public function postLimit(Request $request){

        $conditions = $request->all();
        $where = [];
        $post = new Post();

        if($request->full_time){
            $post = $post->where(['job_type'=>'full_time']);
        }
        else if($request->part_time && $request->full_time){
            $post = $post->orWhere(['job_type'=>'part_time']);
        }
        else{
            if(($request->part_time)){
                $post = $post->where(['job_type'=>'part_time']);
            }
        }

        foreach ($conditions as $key => $value) {
            if($value != null){
                if($key=='category'){
                    $post = $post->where(['category_id'=>$value]);
                }
                if($key=='district'){
                    $post = $post->where(['district_id'=>$value]);
                }
                if($key=='search'){
                    $post = $post->where('company_name', 'LIKE', '%'.$value.'%');
                }
            }
        }


        return response()->json($post->get());
    }
    
    public function error_404()
    {
        return view('frontend.pages.error_404');
    }
}
