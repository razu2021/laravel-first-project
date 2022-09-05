<?php
namespace App\Http\Controllers\website\home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $all=news::where('news_status',1)->orderBy('news_id','DESC')->get();
        return view('admin.website.news.all',compact('all'));
    }

    public function add(){
        return view('admin.website.news.add');
    }
    public function edit($slug){
        $data=news::where('news_status',1)->where('news_slug',$slug,)->firstOrFail();
        return view('admin.website.news.edit',compact('data'));
    }
    public function view($slug){
        $data=news::where('news_status',1)->where('news_slug',$slug,)->firstOrFail();
        return view('admin.website.news.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=news::insertGetId([
            'news_heading'=>$request['heading'],
            'news_caption'=>$request['caption'],
            'news_title'=>$request['title'],
            'news_info'=>$request['info'],
            'news_date'=>$request['date'],
            'news_button'=>$request['button'],
            'button_url'=>$request['url'],
            'news_creator'=>$creator,
            'news_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            news::where('news_id',$insert)->update([
              'news_image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/news');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/news/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $insert=news::where('news_status',1)->where('news_id',$id)->update([
            'news_heading'=>$request['heading'],
            'news_caption'=>$request['caption'],
            'news_title'=>$request['title'],
            'news_info'=>$request['info'],
            'news_date'=>$request['date'],
            'news_button'=>$request['button'],
            'button_url'=>$request['url'],
            'news_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            news::where('news_id',$id)->update([
              'news_image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/news/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/news/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=news::where('news_status',1)->where('news_id',$id)->update([
          'news_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/news');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/news');
          }
    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }




}
