<?php

namespace App\Http\Controllers\website\home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homepageService;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;


class serviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=homepageService::where('service_status',1)->orderBy('service_id','DESC')->get();
        return view('admin.website.homepage.all',compact('all'));
    }

    public function add(){
        return view('admin.website.homepage.add');
    }
    public function edit($slug){
        $data=homepageService::where('service_status',1)->where('service_slug',$slug,)->firstOrFail();
        return view('admin.website.homepage.edit',compact('data'));
    }
    public function view($slug){
        $data=homepageService::where('service_status',1)->where('service_slug',$slug,)->firstOrFail();
        return view('admin.website.homepage.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=homepageService::insertGetId([
            'service_heading'=>$request['heading'],
            'service_caption'=>$request['caption'],
            'service_title'=>$request['title'],
            'service_subtitle'=>$request['subtitle'],
            'service_info'=>$request['info'],
            'service_button'=>$request['button'],
            'button_url'=>$request['url'],
            'service_creator'=>$creator,
            'service_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            homepageService::where('service_id',$insert)->update([
              'service_image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/homepage/all');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/homepage/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=homepageService::where('service_status',1)->where('service_id',$id)->update([
            'service_heading'=>$request['heading'],
            'service_caption'=>$request['caption'],
            'service_title'=>$request['title'],
            'service_subtitle'=>$request['subtitle'],
            'service_info'=>$request['info'],
            'service_button'=>$request['button'],
            'button_url'=>$request['url'],
            'service_editor'=>$editor,
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            homepageService::where('service_id',$id)->update([
              'service_image'=>$imageName,
            ]);
          }
          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/homepage/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/homepage/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=homepageService::where('service_status',1)->where('service_id',$id)->update([
          'service_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/homepage');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/homepage');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }

}
