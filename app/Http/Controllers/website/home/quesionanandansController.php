<?php

namespace App\Http\Controllers\website\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\qusionans;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;
use url;
use Illuminate\Support\Facades\Auth;


class quesionanandansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $all=qusionans::where('status',1)->orderBy('quesion_id','DESC')->get();
       return view('admin.website.clientmassage.all',compact('all'));

    }

    public function add(){
        return view('admin.website.clientmassage.add');
    }
    public function edit($slug){
        $data=qusionans::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.website.homeabout2.edit',compact('data'));
    }
    public function view($slug){
        $data=qusionans::where('status',1)->where('slug',$slug,)->firstOrFail();
        return view('admin.website.clientmassage.view',compact('data'));
    }
    public function insert(Request $request){
        $slug='ulcbd'.uniqid(20).'razu';
        $creator=Auth::user()->id;
        $insert=qusionans::insertGetId([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'subject'=>$request['subject'],
            'client_quesion'=>$request['quesion'],
            'answer'=>$request['answer'],
            'form_image'=>$request['image'],
            'creator'=>$creator,
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            qusionans::where('quesion_id',$insert)->update([
              'form_image'=>$imageName,
            ]);
          }

          if($insert){
            Session::flash('success','value');
            return  view('website.index');
          }else{
            Session::flash('error','value');
            return  view('website.index');
          }


    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::user()->id;
        $update=qusionans::where('about_status',1)->where('homeabout_id',$id)->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'subject'=>$request['subject'],
            'client_quesion'=>$request['quesion'],
            'answer'=>$request['answer'],
            'form_image'=>$request['image'],
            'creator'=>$editor,
            'slug'=>$slug,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName='ulcbd-'.$id.'-'.time().'.'.$image->getClientOriginalExtension();
            'Image'::make($image)->resize(300,300)->save('uploads/'.$imageName);
            
            qusionans::where('homeabout_id',$id)->update([
              'form_image'=>$imageName,
            ]);
          }
          if($update){
            Session::flash('success','value');
            return redirect('dashboard/website/clientquesion/view/'.$slug);
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/clientquesion/edit/'.$slug);
          }

    }
    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=qusionans::where('status',1)->where('quesion_id',$id)->update([
          'status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($soft){
            Session::flash('success','value');
            return redirect('dashboard/website/clientquesion');
          }else{
            Session::flash('error','value');
            return redirect('dashboard/website/clientquesion');
          }

    }
    public function restore(){
        echo "restore ";
    }
    public function delete(){
        echo "delter ";
    }
}
