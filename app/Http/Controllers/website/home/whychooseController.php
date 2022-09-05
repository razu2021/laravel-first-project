<?php

namespace App\Http\Controllers\website\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\whychoose;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class whychooseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=whychoose::where('choose_status',1)->orderBy('choose_id','DESC')->get();
        return view('admin.website.choose.all' ,compact('all'));

    }

    public function add(){
        return view('admin.website.choose.add');

    }
    public function edit($slug){
        $data=whychoose::where('choose_status',1)->where('choose_slug',$slug,)->firstOrFail();
        return view('admin.website.choose.edit',compact('data'));
    }
    public function view($slug){
        $data=whychoose::where('choose_status',1)->where('choose_slug',$slug,)->firstOrFail();
        return view('admin.website.choose.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=whychoose::insertGetId([
            'choose_heading'=>$request['heading'],
            'choose_caption'=>$request['caption'],
            'news_title'=>$request['title'],
            'news_count'=>$request['count'],
            'choose_info'=>$request['info'],
            'choose_creator'=>$creator,
            'choose_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/whychoose');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/whychoose/add');
          }



    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=whychoose::where('choose_status',1)->where('choose_id',$id)->update([
            'choose_heading'=>$request['heading'],
            'choose_caption'=>$request['caption'],
            'news_title'=>$request['title'],
            'news_count'=>$request['count'],
            'choose_info'=>$request['info'],
            'choose_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/whychoose/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/whychoose/edit'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=whychoose::where('choose_status',1)->where('choose_id',$id)->update([
          'choose_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/whychoose');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/whychoose');
          }

    }
    public function restore(){
      
    }
    public function delete(){
       
    }
}
