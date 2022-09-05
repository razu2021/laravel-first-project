<?php

namespace App\Http\Controllers\website\gellary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gellaryimage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class gellaryimageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $all=gellaryimage::where('post_status',1)->orderBy('image_id','DESC')->get();
       return view('admin.website.gellaryimage.all',compact('all'));
    }

    public function add(){
        return view('admin.website.gellaryimage.add');
    }
    public function edit($slug){
        $data=gellaryimage::where('post_status',1)->where('post_slug',$slug,)->firstOrFail();
        return view('admin.website.gellaryimage.edit',compact('data'));
    }
    public function view($slug){
        $data=gellaryimage::where('post_status',1)->where('post_slug',$slug,)->firstOrFail();
        return view('admin.website.gellaryimage.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=gellaryimage::insertGetId([
            'image_name'=>$request['image_name'],
            'post_creator'=>$creator,
            'post_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            gellaryimage::where('image_id',$insert)->update([
              'image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/gellaryimage');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/gellaryimage/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=gellaryimage::where('post_status',1)->where('image_id',$id)->update([
            'image_name'=>$request['image_name'],
            'post_editor'=>$editor,
            'post_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            gellaryimage::where('image_id',$id)->update([
              'image'=>$imageName,
            ]);
          }
          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/gellaryimage/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/gellaryimage/edit/'.$slug);
          }
    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=gellaryimage::where('slider_status',1)->where('image_id',$id)->update([
          'post_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/gellaryimage');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/gellaryimage');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
