<?php

namespace App\Http\Controllers\website\ourteam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ourallteam;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;

class ourallteamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=ourallteam::where('status',1)->orderBy('uniq_id','DESC')->get();
        return view('admin.website.ourallteam.all',compact('all'));
    }

    public function add(){
        return view('admin.website.ourallteam.add');
    }
    public function edit($slug){
        $data=ourallteam::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.website.ourallteam.edit',compact('data'));
    }
    public function view($slug){
        $data=ourallteam::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.website.ourallteam.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=ourallteam::insertGetId([
            'heading'=>$request['heading'],
            'name'=>$request['name'],
            'designation'=>$request['designation'],
            'caption'=>$request['caption'],
            'info'=>$request['info'],
            'facebook'=>$request['facebookicon'],
            'facebook_url'=>$request['faceurl'],
            'twitter'=>$request['twittericon'],
            'twitter_url'=>$request['twitterurl'],
            'linkedin'=>$request['linkedinicon'],
            'linkedin_url'=>$request['linkedinurl'],
            'instagram'=>$request['instagramicon'],
            'instagram_url'=>$request['instagramurl'],
            'post_creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            ourallteam::where('uniq_id',$insert)->update([
              'image'=>$imageName,
            ]);
          }

        if($request->hasFile('bgimage')){
            $image=$request->file('bgimage');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            ourallteam::where('uniq_id',$insert)->update([
              'bgimage'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return redirect('dashboard/website/ourallteam');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ourallteam/add');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=ourallteam::where('status',1)->where('uniq_id',$id)->update([
          'heading'=>$request['heading'],
          'name'=>$request['name'],
          'designation'=>$request['designation'],
          'caption'=>$request['caption'],
          'info'=>$request['info'],
          'facebook'=>$request['facebookicon'],
          'facebook_url'=>$request['faceurl'],
          'twitter'=>$request['twittericon'],
          'twitter_url'=>$request['twitterurl'],
          'linkedin'=>$request['linkedinicon'],
          'linkedin_url'=>$request['linkedinurl'],
          'instagram'=>$request['instagramicon'],
          'instagram_url'=>$request['instagramurl'],
          'post_editor'=>$editor,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            ourallteam::where('uniq_id',$id)->update([
              'image'=>$imageName,
            ]);
          }

        if($request->hasFile('bgimage')){
            $image=$request->file('bgimage');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            ourallteam::where('uniq_id',$id)->update([
              'bgimage'=>$imageName,
            ]);
          }

          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/ourallteam/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ourallteam/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=ourallteam::where('status',1)->where('uniq_id',$id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/ourallteam');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/ourallteam');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
