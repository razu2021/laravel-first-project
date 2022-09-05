<?php

namespace App\Http\Controllers\website\ourteam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ourteambanner;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class ourteambannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $all=ourteambanner::where('slider_status',1)->orderBy('slider_id','DESC')->get();
       return view('admin.website.ourteambanner.all' ,compact('all'));
    }

    public function add(){
        return view('admin.website.ourteambanner.add');
    }
    public function edit($slug){
        $data=ourteambanner::where('slider_status',1)->where('slider_slug',$slug,)->firstOrFail();
        return view('admin.website.ourteambanner.edit',compact('data'));
    }
    public function view($slug){
        $data=ourteambanner::where('slider_status',1)->where('slider_slug',$slug,)->firstOrFail();
        return view('admin.website.ourteambanner.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=ourteambanner::insertGetId([
            'slider_title'=>$request['title'],
            'slider_heading'=>$request['heading'],
            'slider_caption'=>$request['caption'],
            'slider_button'=>$request['button'],
            'button_url'=>$request['url'],
            'slider_creator'=>$creator,
            'slider_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            ourteambanner::where('slider_id',$insert)->update([
              'slider_image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/ourteambanner');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ourteambanner/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=ourteambanner::where('slider_status',1)->where('slider_id',$id)->update([
            'slider_title'=>$request['title'],
            'slider_heading'=>$request['heading'],
            'slider_caption'=>$request['caption'],
            'slider_button'=>$request['button'],
            'button_url'=>$request['url'],
            'slider_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            ourteambanner::where('slider_id',$id)->update([
              'slider_image'=>$imageName,
            ]);
          }
          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/ourteambanner/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ourteambanner/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=ourteambanner::where('slider_status',1)->where('slider_id',$id)->update([
          'slider_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/ourteambanner');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ourteambanner');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
