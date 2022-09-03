<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\banner;
use Carbon\Carbon;
use Image;
use url;


class bannercontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=banner::where('ban_status',1)->orderBy('ban_id','DESC')->get();
        return view('admin.banner.all',compact('all'));
    }
    public function add(){
        return view('admin.banner.add');
    }
    public function edit($slug){
        $data=banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
        return view('admin.banner.edit',compact('data'));
    }
    public function view($slug){
        $data=banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
        return view('admin.banner.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=banner::insertGetId([
            'ban_title'=>$request['title'],
            'ban_subtitle'=>$request['subtitle'],
            'ban_button'=>$request['button'],
            'ban_url'=>$request['url'],
            'ban_creator'=>$creator,
            'ban_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
            banner::where('ban_id',$insert)->update([
              'ban_image'=>$imageName,
            ]);
          }

        if($insert){
            Session::flash('success','value');
            return redirect('dashboard/banner/add');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/banner/add');
          }
        
   
    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=banner::where('ban_status',1)->where('ban_id',$id)->update([
            'ban_title'=>$request['title'],
            'ban_subtitle'=>$request['subtitle'],
            'ban_button'=>$request['button'],
            'ban_url'=>$request['url'],
            'ban_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
    
            banner::where('ban_id',$id)->update([
              'ban_image'=>$imageName,
            ]);
          }

        if($update){
            Session::flash('success','value');
            return redirect('dashboard/banner/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/banner/edit/'.$slug);
          }


    }
    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=banner::where('ban_status',1)->where('ban_id',$id)->update([
        'ban_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','value');
        return redirect('dashboard/banner');
      }else{
        Session::flash('error','value');
        return redirect('dashboard/banner');
      }




    }
    public function restore(){

    }
    public function delete(){

    }
}
